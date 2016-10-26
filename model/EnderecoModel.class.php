<?php
require_once ("C:/wamp/www/projetos/pbl2/_DAO/CRUD/Config.inc.php");
class Endereco{
	private $idEndereco;
	private $pais;
	private $estado;
	private $cidade;
	private $bairro;
	private $logradouro;
	private $numero;
	private $cep;
	private $latitude;
	private $longitude;

	public function __construct()
	{

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
        public function getIdEndereco(){
                return $this->idEndereco; 
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
    
    public function setIdEndereco($idEndereco){
                $this->idEndereco = $idEndereco;
    }

    public function equals($endereco) {
		if (($this->latitude == $endereco->latitude) && ($this->longitude == $endereco->longitude)) {
			return true;
		} else {
			return false;
		}

	}

    public function create(){
    
            $Dados = ['estado' => $this->estado, 'cidade' => $this->cidade, 'bairro' => $this->bairro,
                    'rua' => $this->logradouro, 'cep' => $this->cep, 'numero' => $this->numero,
					'cLatitude' => $this->latitude, 'cLongitude' => $this->longitude];
            $Cadastra = new Create;
            $Cadastra->ExeCreate('localizacao', $Dados);

			return $Cadastra->getResultado();
    }
        
    public function delete($idEndereco){
            $Deleta = new Delete;
            $Deleta->ExeDelete('endereco', 'WHERE id =: id', 'id ='.$idEndereco);
    }
        
    public function read($idEndereco){
            $Pesquisa = new Read;
            $Pesquisa->ExeRead('endereco', 'WHERE id =: $id', 'id='.$idEndereco);
            return $Pesquisa->getResultado();
    }
        
    public function update($idEndereco){
            $Dados = ['pais' => $this->pais, 'estado' => $this->estado, 'cidade' => $this->cidade, 'bairro' => $this->bairro,
                    'logradouro' => $this->logradouro, 'numero' => $this->numero, 'cep' => $this->cep];
            $Atualiza = new Update;
            $Atualiza->ExeUpdate('endereco', $Dados, 'WHERE id=: $id', 'id ='.$idEndereco);
    }
}
?>
