<?php require_once('ClienteModel.class.php');
class Prestador extends Cliente {
	
	//private $id;
	private $areaAtuacao;
	private $tipoConta;
    private $endereco;

	public function __construct()
	{
        require_once ("C:/wamp/www/projetos/pbl2/_DAO/CRUD/Config.inc.php");

    }

	/*
	public function getId() {
		return $this->id;
	}
	*/

	public function getAreaAtuacao() {
		return $this->areaAtuacao;
	}

	public function getTipoConta() {
		return $this->tipoConta;
	}

	/*
	public function setId($id) {
		$this->id = $id;
	}
	*/

	public function setAreaAtuacao($areaAtuacao) {
		$this->areaAtuacao = $areaAtuacao;
	}

	public function setTipoConta($tipoConta) {
		$this->tipoConta = $tipoConta;
	}


	public function inserir(){
        $dados = ['area' => $this->areaAtuacao, 'tipoConta' => $this->tipoConta];
        $cadastra = new Create;
        $cadastra->ExeCreate('prestador', $dados);
        $idPrest = $cadastra->getResultado();


       $dados = null; //Limpando a variavel dados.

        $dados = ['nome' => $this->getNome(), 'senha' => $this->getSenha(), 'email' => $this->getEmail(),
                    'cpf' => $this->getCpf(), 'sexo' => $this->getGenero(), 'telefone'=> $this->getTelefone(),
                    'idPrestador' => $idPrest, 'idEndereco' => $this->getEndereco()];
        $cadastra->ExeCreate('cliente', $dados);

        return $cadastra->getResultado();
    }

}