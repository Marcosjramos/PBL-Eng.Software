<?php

/**
* <b>Create.class.php</b>
* Versão 1.0
* Data de Criação: 24/09/2016
* Classe, que Herda de <b>Conexao.class.php</b>, responsável por cadastros no banco de dados.
* @copyright (c) 2016, Lenington do C. Rios - UEFS,
* Código adaptado de Robson V. Leite - UPINSIDE TREINAMENTOS.
*/
class Create extends Conexao {

	private $Tabela; //tabela do banco de dados
	private $Dados; //dados a serem inseridos
	private $Resultado; //resultado para ver se o cadastro foi bem sucedido

	/** @var PDOStatement */
    private $Create; //carry preparada do PDO

    /** @var PDO */
    private $Conexao; //pegar a conexão da PDO

    /**
     * <b>Create:</b> Executa um cadastro simplificado no banco de dados utilizando prepared statements.
     * Basta informar o nome da tabela e um array atribuitivo com nome da coluna e valor!
     * 
     * @param STRING $Tabela = Informe o nome da tabela no banco
     * @param ARRAY $Dados = Informe um array atribuitivo. Exemplo: ['coluna_A' => 'dado_x', 'coluna_B' => 'dado_y'] (Nome Da Coluna => Valor).
     */
    public function ExeCreate($Tabela, array $Dados) {
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;

        $this->getSyntax();
        $this->Executa();
    }

    /**
     * <b>getResultado</b>
     * <b>Obter resultado:</b> Retorna o ID do registro inserido ou FALSE caso nem um registro seja inserido
     * @return INT $Variavel = Ultimo ID inserido OU FALSE.
     */
    public function getResultado() {
        return $this->Resultado;
    }

    //Obtém o PDO e Prepara a query
    private function Conecta() {
        $this->Conexao = parent::getConexao(); //obtendo a conexão PDO
        //PDO::prepare - Prepara declarações para execução e retorna o objeto declarado
        $this->Create = $this->Conexao->prepare($this->Create); 
    }

    //Cria a sintaxe da query para Prepared Statements
    private function getSyntax() {
    	//implode - junta elementos de uma matriz em uma string
        $Campos = implode(', ', array_keys($this->Dados)); 
        $Places = ':' . implode(', :', array_keys($this->Dados));
        $this->Create = "INSERT INTO {$this->Tabela} ({$Campos}) VALUES ({$Places})";
    }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Executa() {
        $this->Conecta();
        try {
        	//PDOStatement::execute — Executa o prepared statement e retorna true em caso de sucesso ou false.
            $this->Create->execute($this->Dados);
            //PDO::lastInsertId — Retorna o ID da ultima linha inserida ou valor da sequência
            $this->Resultado = $this->Conexao->lastInsertId(); 
        } catch (PDOException $e) {
            $this->Resultado = null;
            WSErro("<b>Erro ao cadastrar:</b> {$e->getMessage()}", $e->getCode());
        }
    }
}