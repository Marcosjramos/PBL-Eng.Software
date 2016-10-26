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

    public function getPrestador($id){
        $Pesquisa = new Read;
        //exemplo de pesquisa de cliente
        $Pesquisa->ExeRead('homer', 'WHERE nome = :nome AND id = :id', 'nome=Teste Apenas&id=5');


        if($Pesquisa->getResultado()):
            //pegando as variáveis da tabela:
            $array = $Pesquisa->getResultado();
            $this->setNome($array[0]['nome']);
            $this->setId($array[0]['idUsuario']);
            $this->setEmail($array[0]['idUsuario']);
            $this->setCpf($array[0]['idUsuario']);
            $this->setGenero($array[0]['idUsuario']);
            $this->setTelefone($array[0]['idUsuario']);
            $this->setEndereco($array[0]['idUsuario']);
        endif;
        var_dump($Pesquisa);
    }

     public function buscarEnderecoPorId($id){
        $en = new Endereco();
        return $en->read($id);
    }

    
}