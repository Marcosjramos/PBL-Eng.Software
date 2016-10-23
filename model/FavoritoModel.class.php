<?php

class Favorito {

	private $idCliente;
	private $idFavoritado;

	function __construct($idCliente, $idFavoritado)
	{
		$this->idCliente = $idCliente;
		$this->idFavoritado = $idFavoritado;
	}

	public function getIdCliente() {
		return $this->idCliente;
	}

	public function getIdFavoritado() {
		return $this->idFavoritado;
	}

	public function setIdCliente($idCliente) {
		$this->idCliente = $idCliente;
	}

	public function setIdFavoritado($idFavoritado) {
		$this->idFavoritado = $idFavoritado;
	}

	public function equals($favorito) {

		if (($this->idCliente == $favorito->idCliente) && ($this->idFavoritado == $favorito->idFavoritado)) {
			return true;
		} else {
			return false;
		}
	}

	//Funcao para adicionar o favorito de um cliente no db
	public function add($idCliente, $idFavoritado){

		require '../CRUD/Config.inc.php'; //acessando o arquivo config da CRUD 
		$favorito = new Favorito($idCliente, $idFavoritado);
		$dados = ['idhomer'=> $favorito->getIdCliente(), 'idfavoritado'=> $favorito->getIdFavoritado()]; //criando um array com os ids, para serem inseridos no db
		$read = new Read();
		$read->exeRead('favoritos', 'WHERE idHomer = :idHomer AND idFavoritado = :idFavoritado', 'idHomer='.$favorito->getIdCliente().'&idFavoritado='.$favorito->getIdFavoritado());
		$create = new Create(); //classe Create da CRUD
		$create->ExeCreate('favoritos', $dados); //funçao que insere as informaçoes no db
		if ($create->getResultado()!=null) { //se a inserçao foi completada
			$id = $create->getResultado(); //guarda o id da ultima inserçao
			return $id; //retorna o id da tabela favoritos
		}
	}

	//Funcao para remover o favorito de um determinado cliente
	public function remove($idCliente, $idFavoritado){

		require '../CRUD/Config.inc.php'; //acessando o arquivo config da CRUD 
		$favorito = new Favorito($idCliente, $idFavoritado);
		$delete = new Delete();
			
		$delete->ExeDelete('favoritos', 'WHERE idHomer = :idHomer AND idFavoritado = :idFavoritado', 'idHomer='.$favorito->getIdCliente().'&idFavoritado='.$favorito->getIdFavoritado());
		return $delete->getNumRegistros();
		
	}
	//Funcao para listar todos os favoritos de um determinado cliente, pesquisando pelo seu id
	public function mostrarFavoritos($idCliente){
		require '../CRUD/Config.inc.php'; //acessando o arquivo config da CRUD 
		$read = new Read();//classe Read da CRUD
		$read->ExeRead('favoritos','WHERE idhomer = :idhomer', 'idhomer=' .$idCliente);
		if ($read->getNumRegistros()!=null) {
			$dados = $read->getResultado();
			return $dados;
		}else{
			echo "Id cliente invalido ou não possui favoritos";
		}
	}
}

?>