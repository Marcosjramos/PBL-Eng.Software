<?php

class Avaliacao {

	private $idAvaliacao;
	private $idAvaliador;
	private $idAvaliado;
	private $mensagem;
	private $create;
	private $read;
	private $update;
	private $delete;
	private $dados;

	public function __construct() {
		require_once('../_DAO/CRUD/Config.inc.php');
	}

	public function avaliar($idAvaliador, $idAvaliado, $mensagem) {
		
		if (($this->verificaId($idAvaliador, 'homer', "avaliador")) && ($this->verificaId($idAvaliado, 'homer', "avaliado"))):
			$this->inicializaVariaveis(null, $idAvaliador, $idAvaliado, $mensagem);
			$this->salvarAvaliacao();
		else:
			echo "Usuário não existe!";
		endif;
	}

	private function verificaId($id, $tabela, $opcao) {
		$this->Read = new Read;
		$this->Read->ExeRead($tabela, 'WHERE id = :id', 'id='. $idAvaliacao);

		if ($this->Read->getNumRegistros() == 1):

			if (strcmp($tabela, 'avaliacao') == 0):

				switch ($opcao) {
					case "avaliacao":
						$this->setIdAvaliacao($this->Read->getResultado()[0]['id']);
						break;
					case "avaliador":
						$this->setIdAvaliador($this->Read->getResultado()[0]['idAvaliador']);
						break;
					case "avaliado":
						$this->setIdAvaliado($this->Read->getResultado()[0]['idAvaliado']);
						break;
				}				
			endif;
			return TRUE;
		else:
			echo "Id não existe!";
			return FALSE;
		endif;
	}

	public function setIdAvaliacao($idAvaliacao) {
		$this->idAvaliacao = $idAvaliacao;
	}

	public function setIdAvaliador($idAvaliador) {
		$this->idAvaliador = $idAvaliador;
	}

	public function setAvaliado($idAvaliado) {
		$this->idAvaliado = $idAvaliado;
	}

	private function inicializaVariaveis($idAvaliacao = null, $idAvaliador = null, $idAvaliado = null, $mensagem) {

		if ((isset($idAvaliador)) && (isset($idAvaliado))):
			$this->idAvaliador = $idAvaliador;
			$this->idAvaliado = $idAvaliado;
		else:
			$this->idAvaliacao = $idAvaliacao;
		endif;
		$this->mensagem = $mensagem;
	}

	private function salvarAvalicao() {
		$this->Create = new Create;
		$this->Create->ExeCreate('avaliacao', ['idAvaliador' => $this->idAvaliador, 'idAvaliado' => $this->idAvaliado, 'mensagem' => $this->mensagem]);
		$this->idAvaliacao = $this->Create->getResultado();
	}

	public function editarAvaliacao($idAvaliacao, $idAvaliador, $idAvaliado, $mensagem) {
		
		if ($this->verificaId($idAvaliacao, 'avaliacao', "avaliacao") && ($idAvaliador == $this->idAvaliador) && ($idAvaliado == $this->idAvaliado)):
			$this->inicializaVariaveis($idAvaliacao, null, null, $mensagem);
			$this->updateDados();
		else:
			echo "Id não existe!";
		endif;		
	}

	private function updateDados() {
		$this->Update = new Update;
		$this->dados = ['mensagem' => $this->mensagem];
		$this->Update->ExeUpdate('avaliacao', $this->dados, 'WHERE id = :id', 'id='. $this->idAvaliacao);
	}

	public function excluirAvaliacao($idAvaliacao, $idAvaliador, $idAvaliado) {
		
		if ($this->verificaId($idAvaliacao, 'avaliacao', "avaliacao") && ($idAvaliador == $this->idAvaliador) && ($idAvaliado == $this->idAvaliado)):
			$this->idAvaliacao = $idAvaliacao;
			$this->deleteDados();
		else:
			echo "Id não existe!";
		endif;		
	}

	private function deleteDados() {
		$this->Delete = new Delete;
		$this->Delete->ExeDelete('avaliacao', 'WHERE id = :id', 'id='. $this->idAvaliacao);
	}
}

?>