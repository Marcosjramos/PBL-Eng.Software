<?php

abstract class Usuario {

	private $nome;
	private $cpf;
	private $email;
	private $senha;
	private $sexo;

	public function __construct($nome, $cpf, $email, $senha, $sexo)
	{
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->email = $email;
		$this->senha = $senha;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	public function equals($usuario) {
		if ($this->cpf == $usuario->cpf) {
			return true;
		} else {
			return false;
		}
	}
}

?>