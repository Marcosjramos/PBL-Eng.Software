<?php

class Anuncio {

	private $idCliente;
	private $titulo;
	private $descricao;
	private $valor;

	function __construct($idCliente, $titulo, $descricao, $valor)
	{
		$this->idCliente = $idCliente;
		$this->titulo = $titulo;
		$this->descicao = $descricao;
		$this->valor = $valor;
	}

	public function getIdCliente() {
		return $this->idCliente;
	}

	public function getTitulo() {
		return $this->titulo;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function getValor() {
		return $this->valor;
	}

	public function setIdCliente($idCliente) {
		$this->idCliente = $idCliente;
	}

	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	public function setValor($valor) {
		$this->valor = $valor;
	}

	public function equals($anuncio) {

		if (($this->idCliente == $anuncio->idCliente) && ($this->titulo == $anuncio->titulo) ($this->descricao == $anuncio->descricao)) {
			return true;
		} else {
			return false;
		}
	}
}

?>