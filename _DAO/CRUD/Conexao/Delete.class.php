<?php

/**
* <b>Delete.class.php</b>
* Versão 1.1
* Data de Criação: 25/09/2016
* Classe, que Herda de <b>Conexao.class.php</b>, responsável por deletar dados no banco de dados.
* @copyright (c) 2016, Lenington do C. Rios - UEFS,
* Código adaptado de Robson V. Leite - UPINSIDE TREINAMENTOS.
*/
class Delete extends Conexao {

    private $Tabela; //tabela do banco de dados
    private $Termos; //condições de atualização
    private $Places; //para executar os bind values
    private $Resultado; //resultado para ver se o cadastro foi bem sucedido

    /** @var PDOStatement */
    private $Delete; //carry preparada do PDO

    /** @var PDO */
    private $Conexao; //pegar a conexão da PDO

    /**
     * <b>ExeDelete:</b> Executa uma exclusão simplificada com Prepared Statments. Basta informar o 
     * nome da tabela, os termos da seleção e uma analise em cadeia para executar.
     * @param STRING $Tabela = Nome da tabela
     * @param STRING $Termos = WHERE coluna = :link AND.. OR..
     * @param STRING $ParseString = link={$link}&link2={$link2}
     */
    public function ExeDelete($Tabela, $Termos, $ParseString) {
        $this->Tabela = (string) $Tabela;
        $this->Termos = (string) $Termos;

        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    /**
     * <b>getResultado:</b> Retorna TRUE se não ocorrerem erros, ou FALSE. Mesmo não removido os dados se uma query
     * for executada com sucesso o retorno será TRUE. Para verificar remoções execute o getNumRegistros();
     * @return BOOL $Var = True ou False
     */
    public function getResultado() {
        return $this->Result;
    }

    /**
     * <b>getNumRegistros: </b> Retorna o número de linhas removidas no banco de dados.
     * @return INT $Var = Quantidade de linhas removidas
     */
    public function getNumRegistros() {
        return $this->Delete->rowCount();
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
        $this->Delete = $this->Conexao->prepare($this->Delete);
    }

    //Cria a sintaxe da query para Prepared Statements
    private function getSyntax() {
        $this->Delete = "DELETE FROM {$this->Tabela} {$this->Termos}";
    }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute() {
        $this->Conecta();
        try {
            //PDOStatement::execute — Executa o prepared statement e retorna true em caso de sucesso ou false.
            $this->Delete->execute($this->Places);
            $this->Result = true;
        } catch (PDOException $e) {
            $this->Result = null;
            WSErro("<b>Erro ao Deletar:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
