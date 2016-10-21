<?php

class Endereco {

  private $id;
  private $pais;
  private $estado;
  private $cidade;
  private $bairro;
  private $logradouro;
  private $numero;
  private $cep;
  private $latitude;
  private $longitude;
	
	public function __construct($id, $pais, $estado, $cidade, $bairro, $logradouro, $numero, $cep)
	{		
		$this->id = $id;
		$this->pais = $pais;
		$this->estado = $estado;
		$this->cidade = $cidade;
		$this->bairro = $bairro;
		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cep = $cep;
	}

	public function getId() {
		return $this->id;
	}

	public function getPais() {
		return $this->pais;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function getLogradouro() {
		return $this->logradouro;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function getCep() {
		return $this->cep;
	}

	public function getLatitude() {
		return $this->latitude;
	}

	public function getLongitude() {
		return $this->longitude;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function setPais($pais) {
		$this->pais = $pais;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function setCep($cep) {
		$this->cep = $cep;
	}

	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	public function equals($endereco) {
		if (($this->latitude == $endereco->latitude) && ($this->longitude == $endereco->longitude)) {
			return true;
		} else {
			return false;
		}
	}

	public function create(){
        require './CRUD/Config.inc.php';
        $Dados = ['pais' => $this->pais, 'estado' => $this->estado, 'cidade' => $this->cidade, 'bairro' => $this->bairro,
                'logradouro' => $this->logradouro, 'numero' => $this->numero, 'cep' => $this->cep];
        $Cadastra = new Create;
        $Cadastra->ExeCreate('endereco', $Dados);
    }
    
    public function delete($id){
        require './CRUD/Config.inc.php';
        $Deleta = new Delete;
        $Deleta->ExeDelete('endereco', 'WHERE id =: id', 'id ='.$id);
    }
    
    public function read($id){
        require './CRUD/Config.inc.php';
        $Pesquisa = new Read;
        $Pesquisa->ExeRead('endereco', 'WHERE id =: $id', 'id='.$id);
    }
    
    public function update($id){
        $Dados = ['pais' => $this->pais, 'estado' => $this->estado, 'cidade' => $this->cidade, 'bairro' => $this->bairro,
                'logradouro' => $this->logradouro, 'numero' => $this->numero, 'cep' => $this->cep];
        $Atualiza = new Update;
        $Atualiza->ExeUpdate('endereco', $Dados, 'WHERE id=: $id', 'id ='.$id);
    }
}

?>