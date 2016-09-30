<?php

class Prestador extends Cliente {

	private $areaAtuacao;
	private $tipoConta;


	public function __construct($nome, $cpf, $email, $senha, $sexo, $telefone, $endereco, $areaAtuacao, $tipoConta)
	{
		parent::__construct($nome, $cpf, $email, $senha, $sexo, $telefone, $endereco);
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
}

?>