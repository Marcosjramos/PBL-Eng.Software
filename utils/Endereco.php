<?php

class Endereco {


  private $pais;
  private $estado;
  private $cidade;
  private $bairro;
  private $rua;
  private $numero;
	
	public function __construct($pais, $estado, $cidade, $bairro, $rua, $numero)
	{		
		$this->pais = $pais;
		$this->estado = $estado;
		$this->cidade = $cidade;
		$this->bairro = $bairro;
		$this->rua = $rua;
		$this->numero = $numero;
	}

	public function getPais() {
		return $this->pais;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function getRua() {
		return $this->rua;
	}

	public function getNumero() {
		return $this->numero;
	}
	
	public function setPais($pais) {
		$this->pais = $pais;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	public function setRua($rua) {
		$this->rua = $rua;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function equals($endereco) {
		if (($this->pais == $endereco->pais) && ($this->estado == $endereco->estado) && ($this->cidade == $endereco->cidade) &&
			($this->bairro == $endereco->bairro) && ($this->rua == $endereco->rua) && ($this->numero == $endereco->numero)) {
			return true;
		} else {
			return false;
		}
	}
}

?>