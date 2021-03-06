<?php

/**
 * <b>Contratacao.class.php</b> 
 * Versão 1.0
 * Data de Criação: 20/10/2016
 * Classe responsável .....
 * @copyright (c) 2016, SKYNERD - Universidade Estadual de Feira de Santana (UEFS), Brasil
 * [Lenington Rios e Ivan]
 */
class Contratacao{

	private $idCliente;
	private $idPrestador;
	private $idLocalizacao;
	private $dataInicio;
	private $dataFim;
	private $estadoServico;
	private $valor;
	private $ID;

	private $Create;
	private $Read;
	private $Update;
	private $Delete;

	private $Dados; //Array dos dados da tabela

	/** 
	 *<b>Contrutor:</b> 
     * 
	 */
	public function __construct(){
		require_once('../_DAO/CRUD/Config.inc.php'); //acessando o arquivo config da CRUD
	}

	/** 
	 *<b>Contratação do Cliente:</b> método que requisita um contrato de um cliente para um prestador
     * 
     * @param INT $idCliente = 
     * @param INT $idPrestador = 
     * @param INT $idLocalizacao = 
     * @param DATA $dataInicio = 
	 */
	public function ContratacaoCliente($idCliente, $idPrestador, $idLocalizacao, $dataInicio){
		//inicializa as variáveis:
		$this->idCliente = $idCliente;
		$this->idPrestador = $idPrestador;
		$this->idLocalizacao = $idLocalizacao;
		$this->dataInicio = $dataInicio;

		if($this->verificaLocalizacao()):
			$this->Dados = ['idCliente' => $this->idCliente, 'idPrestador' => $this->idPrestador, 'idLocalizacao' => $this->idLocalizacao,
								'dataInicio' => $this->dataInicio];

			$this->Create = new Create; //classe Create da CRUD

			$this->inicializaContrato();
		else:
			echo "ID localização incorreto/inexistente!";
		endif;	
	}

	//função que verifica se a localização do cliente é a mesma do id de localização informado
	//retorna TRUE ou FALSE
	private function verificaLocalizacao(){
		$this->Read->ExeRead('clientes', 'WHERE idEndereco = :idEndereco AND id = :id', 'idEndereco='. $this->idLocalizacao . '&id=' . $this->idCliente); //Pesquisa no banco de dados

		$idC = $this->Read->getResultado()[0]['id']; //id cliente
		$idL = $this->Read->getResultado()[0]['idEndereco']; //id do endereço/localização

		if($this->Read->getNumRegistros()==1 and ($idC==$this->idCliente) and ($idL==$this->idLocalizacao)): //existe
			//var_dump($this->Read->getResultado());
			return true;
		else: //não existe
			return false;
		endif;
	}

	//inicializa contrato do cliente
	private function inicializaContrato(){
		$this->Create->ExeCreate('contratacao', $this->Dados);
		
		$this->ID = $this->Create->getResultado(); //retorna o ultimo ID inserido.
		echo "Ultimo ID inserido = " . $this->Create->getResultado() . "\n";
	}

	/** 
	 *<b>ID da Contratação:</b> 
     * 
     * @return INT $ID
	 */
	public function getID(){
		return $this->ID; 
	}

	/** 
	 *<b>Contratação do Prestador:</b> 
     * 
     * @param INT $IDContratacao =  
     * @param DATA $dataFim =  
     * @param DATA $estadoServico =  
     * @param DOUBLE $valor = 
	 */
	public function ContratacaoPrestador($IDContratacao, $dataFim, $estadoServico, $valor){
		$this->ID = $IDContratacao;
		$this->dataFim = $dataFim;
		$this->estadoServico = $estadoServico;
		$this->valor = $valor;


		$this->Read = new Read; //classe Read da CRUD

		$this->buscaContrato($IDContratacao);
	}

	//busca contrato no banco de dados
	private function buscaContrato($IDContratacao){
		$this->Read->ExeRead('contratacao', 'WHERE id = :id', 'id='. $IDContratacao . ''); //Pesquisa no banco de dados

		if($this->Read->getNumRegistros()==1): //existe
			//var_dump($this->Read->getResultado());
			$this->atualizarContrato();
		else: //não existe
			echo "ID não existe";
		endif;
	}

	//atualiza contrato de prestador e cliente
	private function atualizarContrato(){
		$this->Update = new Update;

		$this->Dados = ['dataFim' => $this->dataFim, 'estadoServico' => $this->estadoServico, 'valor' => $this->valor];
		$this->Update->exeUpdate('contratacao', $this->Dados, "WHERE id = :id", 'id=' . $this->ID);

		//$this->Read->ExeRead('contratacao', 'WHERE id = :id', 'id='. $this->ID . ''); //Pesquisa no banco de dados
		//var_dump($this->Read->getResultado());
	}

	/** 
	 *<b>Cancelar Contrato:</b> 
     * 
     * @param INT $idContrato = 
	 */
	public function cancelarContrato($idContrato){
		$this->Delete = new Delete;

		$this->Delete->exeDelete('contratacao', 'WHERE id = :id', 'id='. $idContrato);
		//$this->Read->ExeRead('contratacao', 'WHERE id = :id', 'id='. $idContrato); //Pesquisa no banco de dados
		//var_dump($this->Read->getResultado());
	}

	/** 
	 *<b>Pegar Dados do Contrato:</b> 
     * 
     * @return ARRAY $Dados = 
	 */
	public function getDadosContrato($idContrato){
		$this->Read->ExeRead('contratacao', 'WHERE id = :id', 'id='. $idContrato); //Pesquisa no banco de dados
		return $this->Read->getResultado();
	}

	/** 
	 *<b>Pegar Contratações do Prestador:</b> funcção que retorna todos os contratos pendentes do prestador
     * 
     * @return ARRAY $Dados = Array de todas as ocorrências de contratação do prestador. Array [0 => prestador 1, 1 => prestador 2..., n =>
     * prestador n-1]. Cada array possui os índices da tabela de contratacao do banco de dados.
     * 
	 */
	public function getContratacoesPrestador($idPrestador){
		$this->Read->ExeRead('contratacao', 'WHERE idPrestador = :idPrestador', 'idPrestador='. $idPrestador . ''); //Pesquisa no banco de dados

		if($this->Read->getNumRegistros()==1): //existe
			//var_dump($this->Read->getResultado());
			return $this->Read->getResultado(); //retorna todas as ocorrências 
		else: //não existe
			return null;
		endif;
	}
}
