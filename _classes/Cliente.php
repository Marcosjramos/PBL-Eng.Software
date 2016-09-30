<?php

class Cliente extends Usuario {

	private $telefone;
	private $endereco;

	public function __construct($nome, $cpf, $email, $senha, $sexo, $telefone, $endereco)
	{
		parent::__construct($nome, $cpf, $email, $senha, $sexo);
		$this->telefone = $telefone;
		$this->endereco = $endereco;
	}


	public function getTelefone() {
		return $this->telefone;
	}

	public function getEndereco() {
		return $this->endereco;
	}
	
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
}

?>