<?php

class Denuncia {

	private $idDenuncia;
	private $idDenunciante;
	private $idDenunciado;
	private $data;
	private $descricao;
	private $resultado;
	private $create;
	private $read;
	private $update;
	private $delete;
	private $dados;

	public function __construct() {
		require_once('../_DAO/CRUD/Config.inc.php');
	}

	public function denunciar($idDenunciante, $idDenunciado, $data, $descricao, $resultado) {
		
		if (($this->verificaId($idDenunciante, 'homer', "denunciante")) && ($this->verificaId($idDenunciado, 'homer', "denunciado"))):
			$this->inicializaVariaveis(null, $idDenunciante, $idDenunciado, $data, $descricao, $resultado);
			$this->salvarDenuncia();
		else:
			echo "Usuário não existe!";
		endif;
	}

	private function verificaId($id, $tabela, $opcao) {
		$this->Read = new Read;
		$this->Read->ExeRead($tabela, 'WHERE id = :id', 'id='. $idDenuncia);

		if ($this->Read->getNumRegistros() == 1):

			if (strcmp($tabela, 'denuncia') == 0):

				switch ($opcao) {
					case "denuncia":
						$this->setIdDenuncia($this->Read->getResultado()[0]['id']);
						break;
					case "denunciante":
						$this->setIdDenunciante($this->Read->getResultado()[0]['idDenunciante']);
						break;
					case "denunciado":
						$this->setIdDenunciado($this->Read->getResultado()[0]['idDenunciado']);
						break;
				}				
			endif;
			return TRUE;
		else:
			echo "Id não existe!";
			return FALSE;
		endif;
	}

	public function setIdDenuncia($idDenuncia) {
		$this->idDenuncia = $idDenuncia;
	}

	public function setIdDenunciante($idDenunciante) {
		$this->idDenunciante = $idDenunciante;
	}

	public function setIdDenuciado($idDenuciado) {
		$this->idDenuciado = $idDenuciado;
	}

	private function inicializaVariaveis($idDenuncia = null, $idDenunciante = null, $idDenunciado = null, $data, $descricao, $resultado) {

		if ((isset($idDenunciante)) && (isset($idDenunciado))):
			$this->idDenunciante = $idDenunciante;
			$this->idDenunciado = $idDenunciado;
		else:
			$this->idDenuncia = $idDenuncia;
		endif;
		$this->data = $data;
		$this->descricao = $descricao;
		$this->resultado = $resultado;
	}

	private function salvarDenuncia() {
		$this->Create = new Create;
		$this->Create->ExeCreate('denuncia', ['idDenunciado' => $this->idDenunciado, 'idDenunciante' => $this->idDenunciante, 'data' => $this->data, 'descricao' => $this->descricao, 'resultado' => $this->resultado]);
		$this->idDenuncia = $this->Create->getResultado();
	}

	public function editarDenuncia($idDenuncia, $idDenunciante, $idDenunciado, $data, $descricao, $resultado) {
		
		if ($this->verificaId($idDenuncia, 'denuncia', "denuncia") && ($idDenunciante == $this->idDenunciante) && ($idDenunciado == $this->idDenunciado)):
			$this->inicializaVariaveis($idDenuncia, null, null, $data, $descricao, $resultado);
			$this->updateDados();
		else:
			echo "Id não existe!";
		endif;		
	}

	private function updateDados() {
		$this->Update = new Update;
		$this->dados = ['descricao' => $this->descricao, 'resultado' => $this->resultado];
		$this->Update->ExeUpdate('denuncia', $this->dados, 'WHERE id = :id', 'id='. $this->idDenuncia);
	}

	public function excluirDenuncia($idDenuncia, $idDenunciante, $idDenunciado) {
		
		if ($this->verificaId($idDenuncia, 'denuncia', "denuncia") && ($idDenunciante == $this->idDenunciante) && ($idDenunciado == $this->idDenunciado)):
			$this->idDenuncia = $idDenuncia;
			$this->deleteDados();
		else:
			echo "Id não existe!";
		endif;		
	}

	private function deleteDados() {
		$this->Delete = new Delete;
		$this->Delete->ExeDelete('denuncia', 'WHERE id = :id', 'id='. $this->idDenuncia);
	}
}

?>