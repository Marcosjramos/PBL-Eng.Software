<?php

class Favorito {

	private $idCliente;
	private $idFavoritado;

	function __construct($idCliente, $idFavoritado)
	{
		$this->idCliente = $idCliente;
		$this->idFavoritado = $idFavoritado;
	}

	public function getIdCliente() {
		return $this->idCliente;
	}

	public function getIdFavoritado() {
		return $this->idFavoritado;
	}

	public function setIdCliente($idCliente) {
		$this->idCliente = $idCliente;
	}

	public function setIdFavoritado($idFavoritado) {
		$this->idFavoritado = $idFavoritado;
	}

	public function equals($favorito) {

		if (($this->idCliente == $favorito->idCliente) && ($this->idFavoritado == $favorito->idFavoritado)) {
			return true;
		} else {
			return false;
		}
	}
}

?>