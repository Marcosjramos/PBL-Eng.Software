<?php

/**
* <b>Read.class.php</b>
* Versão 1.0
* Data de Criação: 24/09/2016
* Classe, que Herda de <b>Conexao.class.php</b>, responsável por leituras no banco de dados.
* @copyright (c) 2016, Lenington do C. Rios - UEFS,
* Código adaptado de Robson V. Leite - UPINSIDE TREINAMENTOS.
*/
class Read extends Conexao {

    private $Selecao; //carry de seleção
    private $Places; //para executar os bind values
    private $Resultado; //resultado para ver se o cadastro foi bem sucedido

    /** @var PDOStatement */
    private $Read; //carry preparada do PDO

    /** @var PDO */
    private $Conexao; //pegar a conexão da PDO

    /**
     * <b>ExeRead:</b> Executa uma leitura simplificada com Prepared Statments. Basta informar o nome da tabela,
     * os termos da seleção e uma analise em cadeia (ParseString) para executar.
     * @param STRING $Tabela = Nome da tabela
     * @param STRING $Termos = WHERE | ORDER | LIMIT :limit | OFFSET :offset
     * @param STRING $ParseString = link={$link}&link2={$link2}
     */
    public function ExeRead($Tabela, $Termos = null, $ParseString = null) {
    	//verifica se existe uma condição para executar a carry
        if (!empty($ParseString)){
            parse_str($ParseString, $this->Places); //transforma a string em um array
        }

        $this->Selecao = "SELECT * FROM {$Tabela} {$Termos}";
        $this->Execute();
    }

    /**
     * <b>getResultado:</b> Retorna um array com todos os resultados obtidos. Envelope primário númérico. Para obter
     * um resultado chame o índice getResult()[0]
     * @return ARRAY $this = Array ResultSet
     */
    public function getResultado() {
        return $this->Resultado;
    }

    /**
     * <b>getNumRegistros: </b> Retorna o número de registros encontrados pelo select
     * @return INT $Var = Quantidade de registros encontrados
     */
    public function getNumRegistros() {
        return $this->Read->rowCount();
    }

    //leitura completa
    public function FullRead($Query, $ParseString = null) {
        $this->Selecao = (string) $Query;
        //verifica se existe uma condição para executar a carry
        if (!empty($ParseString)){
            parse_str($ParseString, $this->Places); //transforma a string em um array
        }

        $this->Execute();
    }

    /**
     * <b>Full Read:</b> Executa leitura de dados via query que deve ser montada manualmente para possibilitar
     * seleção de multiplas tabelas em uma única query!
     * @param STRING $Query = Query Selecao Syntax
     * @param STRING $ParseString = link={$link}&link2={$link2}
     */
    public function setPlaces($ParseString) {
        parse_str($ParseString, $this->Places);
        $this->Execute();
    }

    //Obtém o PDO e Prepara a query
    private function Conecta() {
        $this->Conexao = parent::getConexao(); //obtendo a conexão PDO
        //PDO::prepare - Prepara declarações para execução e retorna o objeto declarado
        $this->Read = $this->Conexao->prepare($this->Selecao);
        //PDOStatement::setFetchMode — Define o modo de busca padrão para o PDO Statement
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);
    }

    //Cria a sintaxe da query para Prepared Statements
    private function getSyntax() {
        if ($this->Places){
        	//para cada indice que foi criado, executar um bind 
            foreach ($this->Places as $Vinculo => $Valor){
            	//passar de string para int, pois a carry não pode receber uma string na montagem dela
            	//limit e offset são palavras reservadas
                if ($Vinculo == 'limit' || $Vinculo == 'offset'){
                    $Valor = (int) $Valor; 
                }
                //BIND
                $this->Read->bindValue(":{$Vinculo}", $Valor, ( is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }

    //Obtém a Conexão e a Syntax, executa a query
    private function Execute() {
        $this->Conecta();
        try {
        	//montar a carry
            $this->getSyntax();
            //PDOStatement::execute — Executa o prepared statement e retorna true em caso de sucesso ou false.
            $this->Read->execute();
            //PDOStatement::fetchAll — Retorna um array contendo todos os resultados das linhas
            $this->Resultado = $this->Read->fetchAll();
        } catch (PDOException $e) {
            $this->Resultado = null;
            WSErro("<b>Erro ao Ler:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}