<?php

class Avaliacao {

	private $idAvaliador;
	private $idAvaliado;
	private $mensagem;

	function __construct($idAvaliador, $idAvaliado, $mensagem)
	{
		$this->idAvaliador = $idAvaliador;
		$this->idAvaliado = $idAvaliado;
		$this->mensagem = $mensagem;
	}

	public function getIdAvaliador() {
		return $this->idAvaliador;
	}

	public function getIdAvaliado() {
		return $this->idAvaliado;
	}

	public function getMensagem() {
		return $this->mensagem;
	}

	public function setIdAvaliador($idAvaliador) {
		$this->idAvaliador = $idAvaliador;
	}

	public function setAvaliado($idAvaliado) {
		$this->idAvaliado = $idAvaliado;
	}

	public function setDescricao($mensagem) {
		$this->mensagem = $mensagem;
	}

	public function equals($avaliacao) {

		if (($this->idAvaliador == $anuncio->idAvaliador) && ($this->idAvaliado == $anuncio->idAvaliado)) {
			return true;
		} else {
			return false;
		}
	}
}

?>