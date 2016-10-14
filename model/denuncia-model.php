<?php

class Denuncia {

	private $idDenunciante;
	private $idDenunciado;
	private $data;
	private $descricao;
	private $resultado;

	function __construct($idDenunciante, $idDenunciado, $data, $descricao, $resultado)
	{
		$this->idDenunciante = $idDenunciante;
		$this->idDenunciado = $idDenunciado;
		$this->data = $data;
		$this->descricao = $descricao;
		$this->resultado = $resultado;
	}

	public function getIdDenunciante() {
		return $this->idDenunciante;
	}

	public function getIdDenuciado() {
		return $this->idDenunciado;
	}

	public function getData() {
		return $this->data;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function getResultado() {
		return $this->resultado;
	}

	public function setIdDenunciante($idDenunciante) {
		$this->idDenunciante = $idDenunciante;
	}

	public function setIdDenuciado($idDenuciado) {
		$this->idDenuciado = $idDenuciado;
	}

	public function setData($data) {
		$this->data = $data;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	public function setResultado($resultado) {
		$this->resultado = $resultado;
	}

	public function equals($denuncia) {

		if (($this->idDenunciante == $denuncia->idDenunciante) && ($this->idDenunciado == $denuncia->idDenunciado)) {
			return true;
		} else {
			return false;
		}
	}
}

?>