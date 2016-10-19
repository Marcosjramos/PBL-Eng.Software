<?php

abstract class Cliente extends Usuario {

	//private $id;
	private $nome;
	private $cpf;
	private $sexo;
	private $telefone;

	public function __construct($email, $senha, $nome, $cpf, $sexo, $telefone)
	{
		parent::__construct($email, $senha)
		//$this->id = $id;
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->sexo = $sexo;
		$this->telefone = $telefone;
	}

	/*
	public function getId() {
		return $this->id;
	}
	*/

	public function getNome() {
		return $this->nome;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	/*
	public function setId($id) {
		$this->id = $id;
	}
	*/

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	/*
	public function equals($cliente) {
		
		if ($this->id == $cliente->id) {
			return true;
		} else {
			return false;
		}
	}
	*/
}

?>