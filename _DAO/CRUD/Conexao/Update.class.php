<?php

/**
* <b>Update.class.php</b>
* Versão 1.1
* Data de Criação: 25/09/2016
* Classe, que Herda de <b>Conexao.class.php</b>, responsável por leituras no banco de dados.
* @copyright (c) 2016, Lenington do C. Rios - UEFS,
* Código adaptado de Robson V. Leite - UPINSIDE TREINAMENTOS.
*/
class Update extends Conexao {

    private $Tabela; //tabela do banco de dados
    private $Dados; //dados a serem inseridos
    private $Termos; //condições de atualização
    private $Places; //para executar os bind values
    private $Resultado; //resultado para ver se o cadastro foi bem sucedido

    /** @var PDOStatement */
    private $Update; //carry preparada do PDO

    /** @var PDO */
    private $Conexao; //pegar a conexão da PDO

    /**
     * <b>ExeUpdate:</b> Executa uma atualização simplificada com Prepared Statments. Basta informar o 
     * nome da tabela, os dados a serem atualizados em um Array Atribuitivo, as condições e uma 
     * analise em cadeia para executar.
     * @param STRING $Tabela = Nome da tabela
     * @param ARRAY $Dados = [NomeDaColuna] => Valor (Atribuição)
     * @param STRING $Termos = WHERE coluna = :link AND.. OR..
     * @param STRING $ParseString = link={$link}&link2={$link2}
     */
    public function ExeUpdate($Tabela, array $Dados, $Termos, $ParseString) {
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;
        $this->Termos = (string) $Termos;

        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    /**
     * <b>getResultado:</b> Retorna TRUE se não ocorrerem erros, ou FALSE. Mesmo não alterando os dados se uma query
     * for executada com sucesso o retorno será TRUE. Para verificar alterações execute o getNumRegistros();
     * @return BOOL $Var = True ou False
     */
    public function getResultado() {
        return $this->Resultado;
    }

    /**
     * <b>getNumRegistros: </b> Retorna o número de linhas alteradas no banco de dados.
     * @return INT $Var = Quantidade de linhas alteradas
     */
    public function getNumRegistros() {
        return $this->Update->rowCount();
    }

    /**
     * <b>Modificar Links:</b> Método pode ser usado para atualizar com Stored Procedures. Modificando apenas os valores
     * da condição. Use este método para editar múltiplas linhas!
     * @param STRING $ParseString = id={$id}&..
     */
    public function setPlaces($ParseString) {
        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    //Obtém o PDO e Prepara a query
    private function Conecta() {
        $this->Conexao = parent::getConexao(); //obtendo a conexão PDO
        //PDO::prepare - Prepara declarações para execução e retorna o objeto declarado
        $this->Update = $this->Conexao->prepare($this->Update);
    }

    //Cria a sintaxe da query para Prepared Statements
    private function getSyntax() {
        //montar a carry de atualização
        foreach ($this->Dados as $Key => $Value){
            $Places[] = $Key . ' = :' . $Key;
        }

        //implode - junta elementos de uma matriz em uma string
        $Places = implode(', ', $Places); 
        $this->Update = "UPDATE {$this->Tabela} SET {$Places} {$this->Termos}";
    }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute() {
        $this->Conecta();
        try {
            //PDOStatement::execute — Executa o prepared statement e retorna true em caso de sucesso ou false.
            //array_merge - para poder mesclar os arrays.
            $this->Update->execute(array_merge($this->Dados, $this->Places));
            $this->Resultado = true;
        } catch (PDOException $e) {
            $this->Resultado = null;
            WSErro("<b>Erro ao Ler:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
