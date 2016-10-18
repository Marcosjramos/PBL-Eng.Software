<?php
require_once PATH . "/CRUD/Config.inc.php";
class ClienteModel{
    
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $cpf;
    private $genero;
    private $telefone;
    private $estado;
    private $cidade;
    private $cep;

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

    public function getEstado(){
        return $this->estado;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getCep(){
        return $this->cep;
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

    public function inserir(){
        $dados = ['nome' => $this->nome, 'senha' => $this->md5($this->senha), 'email' => $this->email,
                    'cpf' => $this->cpf, 'genero' => $this->genero, 'telefone'=> $this->telefone];
        $cadastra = new Create;
        $cadastra->ExeCreate('cliente', $dados);
    }
}