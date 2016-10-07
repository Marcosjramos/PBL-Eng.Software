<?php

class Propaganda {

	private $nomeEmpresa;
	private $tempoDuracao;
	private $qtdExibicao;
	private $qtdExibido;

	public function __construct($nomeEmpresa, $tempoDuracao, $qtdExibicao, $qtdExibido)
	{
		$this->nomeEmpresa = $nomeEmpresa;
		$this->tempoDuracao = $tempoDuracao;
		$this->qtdExibicao = $qtdExibicao;
		$this->qtdExibido = $qtdExibido;
	}

	public function getNomeEmpresa() {
		return $this->nomeEmpresa;
	}

	public function getTempoDuracao() {
		return $this->tempoDuracao;
	}

	public function getQtdExibicao() {
		return $this->qtdExibicao;
	}

	public function getQtdExibido() {
		return $this->qtdExibido;
	}

	public function setNomeEmpresa($nomeEmpresa) {
		$this->nomeEmpresa = $nomeEmpresa;
	}

	public function setTempoDuracao($tempoDuracao) {
		$this->tempoDuracao = $tempoDuracao;
	}

	public function setQtdExibicao($qtdExibicao) {
		$this->qtdExibicao = $qtdExibicao;
	}

	public function setQtdExibido($qtdExibido) {
		$this->qtdExibido = $qtdExibido;
	}
}

?>