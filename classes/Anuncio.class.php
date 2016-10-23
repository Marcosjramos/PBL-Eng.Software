<?php 

/**
 * <b>Anuncio.class.php</b> 
 * Versão 1.0
 * Data de Criação: 20/10/2016
 * Classe responsável .....
 * @copyright (c) 2016, SKYNERD - Universidade Estadual de Feira de Santana (UEFS), Brasil
 * [Lenington Rios e Ivan]
 */
class Anuncio{

	private $idHomer; //ID do anunciante
	private $titulo; //Título do anúncio
	private $descricao; //Descrição do anúncio
	private $valor; //Valor do anúncio (Double)
	private $ID; //ID do anúncio

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
	 *<b>Criação de Anúncio:</b> 
     * 
     * @param INT $idHomer
     * @param STRING $titulo
     * @param STRING $descricao
     * @param DOUBLE $valor
	 */
	public function criarAnuncio($idHomer, $titulo, $descricao, $valor){
		
		if($this->verificaID($idHomer, 'homer')):
			$this->inicializaVariaveis(null, $idHomer, $titulo, $descricao, $valor);

			$this->salvarAnuncio();
		else:
			echo "USUÁRIO N EXISTE";
		endif;

	}

	//método responsável por inicializar as variáveis do anuncio
	private function inicializaVariaveis($ID=null, $idHomer=null, $titulo, $descricao, $valor){
		if(isset($idHomer)):
			$this->idHomer = $idHomer;
		else:
			$this->ID = $ID;
		endif;

		$this->titulo = $titulo;
		$this->descricao = $descricao;
		$this->valor = $valor;
	}

	//retorna um boleano caso exista o Homer
	private function verificaID($ID, $tabela){
		$this->Read = new Read;
		$this->Read->ExeRead($tabela, 'WHERE id = :id', 'id='. $ID . ''); //Pesquisa no banco de dados

		if($this->Read->getNumRegistros()==1): //existe
			//var_dump($this->Read->getResultado());
			if(strcmp($tabela, 'anuncios')==0):
				//pega o id do homer no banco de dados e seta a variável
				$this->setIdHomer($this->Read->getResultado()[0]['idHomer']);
			endif;

			return TRUE;
		else: //não existe
			echo "ESTE ID NÃO EXISTE!";
			return FALSE;
		endif;
	}

	//método que efetua o salvamento do anuncio no banco de dados
	private function salvarAnuncio(){
		$this->Create = new Create;
		$this->Create->ExeCreate('anuncios', 
			['idHomer' => $this->idHomer, 'titulo' => $this->titulo, 'descricao' => $this->descricao, 'valor' => $this->valor]);

		$this->ID = $this->Create->getResultado(); //retorna o ultimo ID inserido.
		echo "Ultimo ID inserido = " . $this->Create->getResultado() . "\n";
	}

	/** 
	 *<b>Editar Anúncio:</b> 
     * 
     * @param INT $ID = 
     * @param INT $idHomer =
     * @param STRING $titulo =
     * @param STRING $descricao =
     * @param DOUBLE $valor =
	 */
	public function editarAnuncio($ID, $idHomer, $titulo, $descricao, $valor){
		
		if($this->verificaID($ID, 'anuncios') and ($idHomer==$this->idHomer)):
			$this->inicializaVariaveis($ID, null, $titulo, $descricao, $valor);

			$this->salvarAlteracoes('update');
		else:
			echo "ID NÃO EXISTE";
		endif;		
	}

	//salvar alterações no banco de dados
	private function salvarAlteracoes($acao){
		if(strcmp($acao, 'update')==0):
			$this->updateDados();
		else:
			$this->deleteDados();
		endif;
		
	}

	//função responsável por efetuar o Update da CURD
	private function updateDados(){
		$this->Update = new Update;

		$this->Dados = ['id' => $this->ID, 'titulo' => $this->titulo, 'descricao' => $this->descricao, 'valor' => $this->valor];

		$this->Update->ExeUpdate('anuncios', $this->Dados, 'WHERE id = :id', 'id=' . $this->ID);

		var_dump($this->Update->getNumRegistros());
	}

	//função responsável por efetuar o Delete da CRUD
	private function deleteDados(){
		$this->Delete = new Delete;

		$this->Delete->ExeDelete('anuncios', 'WHERE id = :id', 'id=' . $this->ID);

		var_dump($this->Delete->getNumRegistros());
	}

	//alterar o ID do Homer 
	private function setIdHomer($id){
		$this->idHomer = $id;
	}

	/** 
	 *<b>Excluir Anúncio:</b> 
     * 
     * @param INT $ID = 
     * @param INT $idHomer =
	 */
	public function excluirAnuncio($ID, $idHomer){
		if($this->verificaID($ID, 'anuncios') and ($idHomer==$this->idHomer)):
			$this->ID = $ID;
		
			$this->salvarAlteracoes('delete');
		else:
			echo " ID NÃO EXISTE";
		endif;	
	}

	/** 
	 *<b>ID da Contratação:</b> 
     * 
     * @return INT $ID
	 */
	public function getID(){
		return $this->ID; 
	}
}
