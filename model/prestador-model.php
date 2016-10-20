<?php
class Prestador extends Cliente {
	
	private $areaAtuacao;
	private $tipoConta;

	public function __construct($id,$email, $senha, $nome, $cpf, $sexo, $telefone, $areaAtuacao, $tipoConta)
	{
		parent::__construct($id, $email, $senha, $nome, $cpf, $sexo, $telefone);
		$this->id = $id;
		$this->areaAtuacao = $areaAtuacao;
		$this->tipoConta = $tipoConta;
	}

	public function getAreaAtuacao() {
		return $this->areaAtuacao;
	}

	public function getTipoConta() {
		return $this->tipoConta;
	}

	public function setAreaAtuacao($areaAtuacao) {
		$this->areaAtuacao = $areaAtuacao;
	}

	public function setTipoConta($tipoConta) {
		$this->tipoConta = $tipoConta;
	}

	public function equals($prestador) {
		
		if ($this->cpf == $prestador->cpf) {
			return true;
		} else {
			return false;
		}
	}

}