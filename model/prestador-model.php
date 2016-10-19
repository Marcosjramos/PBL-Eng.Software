<?php
class Prestador extends Cliente {
	
	//private $id;
	private $areaAtuacao;
	private $tipoConta;

	public function __construct($email, $senha, $nome, $cpf, $sexo, $telefone, $areaAtuacao, $tipoConta)
	{
		parent::__construct($email, $senha, $nome, $cpf, $sexo, $telefone);
		//$this->id = $id;
		$this->areaAtuacao = $areaAtuacao;
		$this->tipoConta = $tipoConta;
	}

	/*
	public function getId() {
		return $this->id;
	}
	*/

	public function getAreaAtuacao() {
		return $this->areaAtuacao;
	}

	public function getTipoConta() {
		return $this->tipoConta;
	}

	/*
	public function setId($id) {
		$this->id = $id;
	}
	*/

	public function setAreaAtuacao($areaAtuacao) {
		$this->areaAtuacao = $areaAtuacao;
	}

	public function setTipoConta($tipoConta) {
		$this->tipoConta = $tipoConta;
	}

	/*
	public function equals($prestador) {
		
		if ($this->id == $prestador->id) {
			return true;
		} else {
			return false;
		}
	}
	*/

}