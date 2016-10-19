<?php
require_once PATH . "/CRUD/Config.inc.php";

class Denuncia {

	private $idDenuncia;   //autoincrementado automaticamente no banco de dados
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

	public function getIdDenuncia() {
		return $this->idDenuncia;
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

	public function setIdDenuncia($idDenuncia) {
		$this->idDenuncia = $idDenuncia;
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

	public function inserir() {
        $dados = ['idDenunciado' => $this->idDenunciado, 'idDenunciante' => $this->idDenunciante, 'data' => $this->data, 'descricao' => $this->descricao, 'resultado' => $this->resultado];

        $insere = new Create;
        $insere->ExeCreate('denuncia', $dados);
    }

    public function buscar() {
    	$busca = new Read;
        //$busca->ExeRead('denuncia', 'WHERE id = :id', 'id=');  Como recuperar o id no banco?
    }

    public function alterar() {
    	$dados = ['resultado' => $this->resultado];
    	$altera = new Update;
    	//$altera->ExeUpdate('denuncia', $dados, "WHERE id = :id", 'id=');   Como recuperar o id no banco?
    }

    public function remover() {
    	$remove = new Delete;
        //$remove->ExeDelete('denuncia', "WHERE id = :id", 'id=');   Como recuperar o id no banco?
    }

    public function listar() {
    	
    }
}
?>