<?php

class Endereco {

  private $pais;
  private $estado;
  private $cidade;
  private $bairro;
  private $logradouro;
  private $numero;
  private $cep;
  private $latitude;
  private $longitude;
	
	public function __construct($pais, $estado, $cidade, $bairro, $logradouro, $numero, $cep)
	{		
		$this->pais = $pais;
		$this->estado = $estado;
		$this->cidade = $cidade;
		$this->bairro = $bairro;
		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cep = $cep;
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

	public function getLogradouro() {
		return $this->logradouro;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function getCep() {
		return $this->cep;
	}

	public function getLatitude() {
		return $this->latitude;
	}

	public function getLongitude() {
		return $this->longitude;
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

	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function setCep($cep) {
		$this->cep = $cep;
	}

	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}
	public function equals($endereco) {
		if (($this->latitude == $endereco->latitude) && ($this->longitude == $endereco->longitude)) {
			return true;
		} else {
			return false;
		}
	}
}

?>