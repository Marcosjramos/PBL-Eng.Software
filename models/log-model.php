<?php

class Log {

	private $idCliente;
	private $data;
	private $operacao;

	public function __construct($idCliente, $data, $operacao)
	{
		$this->idCliente = $idCliente;
		$this->data = $data;
		$this->operacao = $operacao;
	}

	public function getIdCliente() {
		return $this->idCliente;
	}

	public function getData() {
		return $this->data;
	}

	public function getOperacao() {
		return $this->operacao;
	}

	public function setIdCliente($idCliente) {
		$this->idCliente = $idCliente;
	}

	public function setData($data) {
		$this->data = $data;
	}

	public function setOperacao($operacao) {
		$this->operacao = $operacao;
	}

	public function equals($log) {

		if (($this->idCliente == $log->idCliente) && ($this->data == $log->data) && ($this->operacao == $log->operacao)) {
			return true;
		} else {
			return false;
		}
	}
}

?>