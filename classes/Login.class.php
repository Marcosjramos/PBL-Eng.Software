<?php

/**
 * <b>Login.class.php</b> 
 * Versão 1.0 teste
 * Data de Criação: 15/10/2016
 * Classe responsável por verificar e autenticar o acesso ao sistema
 * @copyright (c) 2016, SKYNERD - Universidade Estadual de Feira de Santana (UEFS), Brasil
 * [Lenington Rios]
 */
class Login{

	private $Email; //email para autenticação
	private $Senha; //senha do usuário
	private $Pesquisa; //variável para pesquisa no banco de dados
	private $isLogado; //para verificar se está logado no sistema

	/**
     * <b>Login (construtor):</b> método responsável por inicializar as variáveis e chamar funções privadas
     * 
     * @param STRING $Email = E-mail do usuário cadastrado
     * @param STRING $Senha = Senha cadastrada no sistema
     */
	public function Login($Email, $Senha){
		$this->Email = $Email; //pegando a variável Email do html
		$this->Senha = $Senha; //pegando a variável Senha do html

		$this->isLogado = false;

		require('../_DAO/CRUD/Config.inc.php'); //acessando o arquivo config da CRUD
		$this->Pesquisa = new Read; //classe Read da CRUD

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
			$this->Pesquisa->ExeRead('usuario', 'WHERE email = :email', 'email='. $Email . ''); //Pesquisa no banco de dados

			//verifica se existe o e-mail no banco de dados
			if($this->Pesquisa->getNumRegistros()==1): //existe
				//$this->Pesquisa->getResultado()[0][senha] pega o índice senha do array contido na linha da tabela
				$this->verificaSenha($this->Pesquisa->getResultado()[0]['senha']);
			else: //não existe
				echo "E-MAIL NÃO EXISTE!";
			endif;	
		else:
			//email informado inválido
			echo "EMAIL INVÁLIDO!";
		endif;
	}

	//função para verificar se a senha informada ($this->Senha) é igual à senha armazenada ($SenhaBD)
	private function verificaSenha($SenhaBD){
		//strcmp(str1, str1)==0 se as duas strings forem iguais
		if(isset($SenhaBD) and (strcmp($this->Senha, $SenhaBD)==0)):
			$this->isLogado = true;
			echo "LOGIN EFETUADO COM SUCESSO";
		else:
			echo "SENHA INCORRETA";
		endif;
	}

	/**
     * <b>Logado com sucesso</b> método que retorna a condição de logado ou não no sistema
     * @return BOOLEAN $isLogado = TRUE para se o login foi efetuado, OR FALSE
     */
	public function isLogado(){
		return $this->isLogado;
	}
}