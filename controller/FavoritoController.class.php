<?php
require_once ('../model/favorito-model.php');

class FavoritoController {
	
	public function __construct(){
	}

	public function add($idCliente, $idFavoritado){
		$favorito = new Favorito($idCliente, $idFavoritado);
		$id = $favorito->add($idCliente,$idFavoritado);
		echo "Cliente: $idCliente Favorito: $idFavoritado";
		return $id;
	}

	public function remove($idCliente, $idFavoritado){
		$favorito = new Favorito($idCliente, $idFavoritado);
		$result = $favorito->remove($idCliente,$idFavoritado);
		return $result;
	}

	public function mostrarFavoritos($idCliente){
		$favorito = new Favorito($idCliente, null);
		$dados = $favorito->mostrarFavoritos($favorito->getIdCliente());
		return $dados;
	}


}














?>