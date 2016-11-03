<?php

/**
 * <b>Servico.class.php</b> 
 * Versão 1.2
 * Data de Criação: 03/11/2016
 * Classe responsável .....
 * @copyright (c) 2016, SKYNERD - Universidade Estadual de Feira de Santana (UEFS), Brasil
 * [Lenington Rios]
 */
class Servico{

	private $idServico;
	private $data;
	private $idCliente;
	private $idPrestador;
	private $valor;
	private $tipoServico;

	private $Dados;

	private $Create;
	private $Read;
	private $Update;
	private $Delete;


	public function __construct(){
		require_once(PATH."/_DAO/CRUD/Config.inc.php"); //acessando o arquivo config da CRUD
	}
	
	public function criarServico($idCliente, $idPrestador, $valor, $tipoServico, $data){
		$this->idCliente = $idCliente;
		$this->idPrestador = $idPrestador;
		$this->valor = $valor;
		$this->tipoServico = $tipoServico;
		$this->data = $data;

		//verifica se existe o id do cliente e do prestador
		if(verificaUsuario('cliente', $idCliente) and verificaUsuario('prestador', $idPrestador)):
			$this->publicaServico();
		else:
			echo "ID cliente e/ou prestador não existe.";
		endif;
	}

	//
	private function publicaServico(){
		$this->Create = new Create;
		$this->Create->ExeCreate('servico', 
			['tipoServico' => $this->tipoServico, 'dataServico' => $this->data, 'valor' => $this->valor, 'idCliente' => $this->idCliente, 'idPrestador' => $this->idPrestador]);

		$this->idServico = $this->Create->getResultado(); //retorna o ultimo ID inserido.
		//echo "Ultimo ID inserido = " . $this->Create->getResultado() . "\n";
	}

	//
	private function verificaUsuario($tabela, $id){
		$this->Read = new Read; //classe Read da CRUD
			
		//Pesquisa no banco de dados do cliente por id
		$this->Read->ExeRead($tabela, 'WHERE id = :id', 'id='. $id);

		if($this->Read->getNumRegistros()==1): //existe
			return true;
		else: 
			return false;
		endif;
	}


	public function getID(){
		return $this->idServico;
	}


	public function removerServico($idServico){
		if(isset($idServico)):
			$this->Delete = new Delete;

			$this->Delete->ExeDelete('servico', 'WHERE id = :id', 'id=' . $this->ID);

			var_dump($this->Delete->getNumRegistros());
		endif;
	}
}