<?php

class Cliente{
    
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $cpf;
    private $genero;
    private $telefone;
    private $endereco;

    public function __construct()
    {
        require_once ("C:/wamp/www/projetos/pbl2/_DAO/CRUD/Config.inc.php");
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    ######################################################################################################

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha){
        $this->senha = $senha;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getFoto(){
        return 'perfil.jpg';
    }

    public function inserir(){
        $dados = ['nome' => $this->nome, 'email' => $this->email, 'senha' => $this->senha,
                    'cpf' => $this->cpf, 'sexo' => $this->genero, 'telefone'=> $this->telefone,
                    'idPrestador' => null, 'idEndereco' => $this->endereco
        ];
        $cadastra = new Create;
        $cadastra->ExeCreate('cliente', $dados);

        return $cadastra->getResultado();
    }

    public function getCliente($id){
        $Pesquisa = new Read;
        //exemplo de pesquisa de cliente
        $Pesquisa->ExeRead('cliente', 'WHERE idCliente = :idCliente', 'idCliente='.$id);

        if($Pesquisa->getResultado()):
            //pegando as variáveis da tabela:
            $array = $Pesquisa->getResultado();
            $this->setNome($array[0]['nome']);
            $this->setId($array[0]['idCliente']);
            $this->setEmail($array[0]['email']);
            $this->setCpf($array[0]['cpf']);
            $this->setGenero($array[0]['sexo']);
            $this->setTelefone($array[0]['telefone']);
        endif;
    }
}