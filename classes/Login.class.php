<?php

/**
 * <b>Login.class.php</b> 
 * Versão 1.4
 * Data de Criação: 15/10/2016
 * Classe responsável por verificar e autenticar o acesso ao sistema
 * @copyright (c) 2016, SKYNERD - Universidade Estadual de Feira de Santana (UEFS), Brasil
 * [Lenington Rios]
 */
class Login{

	private $Email; //email para autenticação
	private $Senha; //senha do usuário

	private $isLogado; //para verificar se está logado no sistema
	private $id; //id do usuário

	private $Pesquisa; //variável para pesquisa no banco de dados
	private $Update; //variável para alterações no banco de dados

	/** <b>Construtor</b>  */
	public function __construct(){
		require_once(PATH."/_DAO/CRUD/Config.inc.php"); //acessando o arquivo config da CRUD
	}

	/**
     * <b>Login:</b> método responsável por inicializar as variáveis e chamar funções privadas
     * 
     * @param STRING $Email = E-mail do usuário cadastrado
     * @param STRING $Senha = Senha cadastrada no sistema
     */
	public function Login($Email, $Senha){
		$this->Email = $Email; //pegando a variável Email do html
		$this->Senha = $Senha; //pegando a variável Senha do html

		$this->isLogado = false; 

		$this->efetuarLogin();
	}

	//método responsável por efetuar o login no sistema
	private function efetuarLogin(){
		$this->verificaEmail($this->Email);
	}

	//verifica se existe o email no banco de dados e retorna a senha
	private function verificaEmail($Email){
		//verifica se o email tem validade para depois pesquisar no banco de dados do sistema
		if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
			$this->Pesquisa = new Read; //classe Read da CRUD
			
			$this->Pesquisa->ExeRead('cliente', 'WHERE email = :email', 'email='. $Email . ''); //Pesquisa no banco de dados

			//verifica se existe o e-mail no banco de dados
			if($this->Pesquisa->getNumRegistros()==1): //existe
				//$this->Pesquisa->getResultado()[0][senha] pega o índice senha do array contido na linha da tabela
				$this->verificaSenha($this->Pesquisa->getResultado()[0]['senha']);
			else: //não existe
				//echo "<br>E-MAIL NÃO EXISTE!";
			endif;	
		else:
			//email informado inválido
			//echo "<br>EMAIL INVÁLIDO!";
		endif;
	}

	//função para verificar se a senha informada ($this->Senha) é igual à senha armazenada ($SenhaBD)
	private function verificaSenha($SenhaBD){
		//strcmp(str1, str1)==0 se as duas strings forem iguais
		if(isset($SenhaBD) and (strcmp($this->Senha, $SenhaBD)==0)):
			$this->id = $this->Pesquisa->getResultado()[0]['idCliente']; //id do usuário
			$this->setLogado(1); //1 = true 
			//echo "<br>LOGIN EFETUADO COM SUCESSO";
		else:
			//echo "<br>SENHA INCORRETA";
		endif;
	}

	//altera a condição de estar logado no sistema para FALSE (0) ou TRUE (1 ou diferente de 0).
	private function setLogado($condicao){
		$this->Update = new Update; //classe Update da CRUD

		$this->Update->ExeUpdate('cliente', ['logado' => $condicao], 'WHERE idCliente = :idCliente', 'idCliente='. $this->id);

		//se não houverem erros e apenas um dado for alterado
		if($this->Update->getNumRegistros()==1 and $condicao==0):
			$this->setIsLogado(false);
		elseif($this->Update->getNumRegistros()==1 and $condicao==1):
			$this->setIsLogado(true);
		endif;
	}

	private function setIsLogado($condicao){
		$this->isLogado = $condicao;
	}

	/**
     * <b>Logado com sucesso</b> método que retorna a condição de logado ou não no sistema
     * @return BOOLEAN $isLogado = TRUE para se o login foi efetuado, OR FALSE
     */
	public function isLogado(){
		return $this->isLogado;
	}

	/**
     * <b>ID do Usuário</b> método que retorna o ID do usuário
     * @return INT $id = ID do usuário caso a senha seja equivalente OR null
     */
	public function getID(){
		return $this->id;
	}

	/**
     * <b>Logout:</b> método responsável por finalizar o acesso do cliente no sistema
     * 
     * @param INT $id = id do cliente
     */
	public function Logout($id){
		if(isset($id)):
			$this->id = $id;
			$this->Pesquisa = new Read; //classe Read da CRUD
			
			//Pesquisa no banco de dados do cliente por id
			$this->Pesquisa->ExeRead('cliente', 'WHERE idCliente = :idCliente', 'idCliente='. $this->id);

			if($this->Pesquisa->getNumRegistros()==1): //existe
				$this->setLogado(0); // 0 = false
			endif;
		endif;
	}

	/**
     * <b>Tipo de conta</b> método que retorna o tipo da conta do usuário.
     * @return STRING $tipoConta = tipo da conta se é 'cliente' OR 'prestador'.
     */
	public function tipoConta($id){
		if(isset($id)):
			$this->Pesquisa = new Read; //classe Read da CRUD

			//Pesquisa no banco de dados do prestador por id
			$this->Pesquisa->ExeRead('prestadores', 'WHERE idCliente = :idCliente', 'idCliente='. $id); 

			//verifica se existe o id no banco de dados do prestador
			if($this->Pesquisa->getNumRegistros()==1 and isset($this->Pesquisa->getResultado()[0]['idCliente'])): //existe
				return 'prestador';
			elseif ($this->Pesquisa->getNumRegistros()==0): //não existe
				return 'cliente';
			endif;	
		endif;
	}
}