<?php

class Contratacao {

	private $idCliente;
	private $idPrestador;
	private $localizacao;
	private $dataInicio;
	private $dataFim;
	private $estadoServico;
	private $valor;

	function __construct($idCliente, $idPrestador, $localizacao, $dataInicio, $dataFim, $estadoServico, $valor)
	{
		$this->idCliente = $idCliente;
		$this->idPrestador = $idPrestador;
		$this->localizacao = $localizacao;
		$this->dataInicio = $dataInicio;
		$this->dataFim = $dataFim;
		$this->estadoServico = $estadoServico;
		$this->valor = $valor;
	}

	public function getIdCliente() {
		return $this->idCliente;
	}

	public function getIdPrestador() {
		return $this->idPrestador;
	}

	public function getLocalizacao() {
		return $this->localizacao;
	}

	public function getDataInicio() {
		return $this->dataInicio;
	}

	public function getDataFim() {
		return $this->dataFim;
	}

	public function getEstadoServico() {
		return $this->estadoServico;
	}

	public function getValor() {
		return $this->valor;
	}

	public function setIdCliente($idCliente) {
		$this->idCliente = $idCliente;
	}

	public function setPrestador($idPrestador) {
		$this->idPrestador = $idPrestador;
	}

	public function setLocalizao($localizacao) {
		$this->localizacao = $localizacao;
	}

	public function setDataInicio($dataInicio) {
		$this->dataInicio = $dataInicio;
	}

	public function setDataFim($dataFim) {
		$this->dataFim = $dataFim;
	}

	public function setEstadoServico($estadoServico) {
		$this->estadoServico = $estadoServico;
	}

	public function setValor($valor) {
		$this->valor = $valor;
	}

	public function equals($contratacao) {

		if (($this->idCliente == $contratacao->idCliente) && ($this->idPrestador == $contratacao->idPrestador) && ($this->localizacao == $contratacao->localizacao)) {
			return true;
		} else {
			return false;
		}
	}
}

?>