<?php
#require_once (PATH."/model//_DAO/CRUD/Config.inc.php");
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
		require_once (PATH."/_DAO/CRUD/Config.inc.php");
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
        }
        
        public function update($idEndereco){
            $Dados = ['pais' => $this->pais, 'estado' => $this->estado, 'cidade' => $this->cidade, 'bairro' => $this->bairro,
                    'logradouro' => $this->logradouro, 'numero' => $this->numero, 'cep' => $this->cep];
            $Atualiza = new Update;
            $Atualiza->ExeUpdate('endereco', $Dados, 'WHERE id=: $id', 'id ='.$idEndereco);
        }

	public function getEndereco($id){
		$Pesquisa = new Read;
		//exemplo de pesquisa de cliente
		$Pesquisa->ExeRead('localizacao', 'WHERE idEndereco = :idEndereco', 'idEndereco='.$id);

		if($Pesquisa->getResultado()):
			//pegando as variáveis da tabela:
			$array = $Pesquisa->getResultado();
			$this->setEstado($array[0]['estado']);
			$this->setCidade($array[0]['cidade']);
			$this->setBairro($array[0]['bairro']);
			$this->setLogradouro($array[0]['bairro']);
			$this->setNumero($array[0]['numero']);
			$this->setCep($array[0]['cep']);
			#$this->setFoto($array[0]['thumb']);
		endif;
	}
}
?>
