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
    private $foto;
    private $logado;

    public function getLogado(){
        return $this->logado;
    }

    public function setLogado($log){
        $this->logado = $log;
    }

    public function __construct()
    {
        require_once ("C:\wamp\www\projetos\PBL-Eng.Software/_DAO/CRUD/Config.inc.php");
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
        return $this->foto;
    }

    public function inserir(){
        $dados = ['nome' => $this->nome, 'email' => $this->email, 'senha' => $this->senha,
                    'cpf' => $this->cpf, 'sexo' => $this->genero, 'telefone'=> $this->telefone,
                    'thumb' => $this->foto, 'logado' =>$this->logado, 'idPrestador' => null,
                    'idEndereco' => $this->endereco

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
            $this->setFoto($array[0]['thumb']);
            $this->setEndereco($array[0]['idEndereco']);
        endif;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getLimitada($inicio, $limite){
        $Pesquisa = new Read;
        //exemplo de pesquisa de cliente  id=1&limit=2
        $Pesquisa->ExeRead('cliente', 'LIMIT '.$limite.' OFFSET '.$inicio);

        if($Pesquisa->getResultado()):
            return $Pesquisa->getResultado();
        endif;
    }

    public function getAll(){
        $Pesquisa = new Read;
        //exemplo de pesquisa de cliente  id=1&limit=2
        $Pesquisa->ExeRead('cliente', '');

        if($Pesquisa->getResultado()):
            return $Pesquisa->getResultado();
        endif;
    }

    public function getNumberReg(){
        $Pesquisa = new Read;
        //exemplo de pesquisa de cliente  id=1&limit=2
        $Pesquisa->ExeRead('cliente', '', '');

        return $Pesquisa->getNumRegistros();
    }

    public function gravarFoto($id){
        //dados da tabela sem o id
        $Dados = ['thumb' => $this->foto];

        $Atualiza = new Update;
        //nome da tabela, os dados que serão atualizados e em que linha será atualizado
        $Atualiza->ExeUpdate('cliente', $Dados, 'WHERE idCliente = :idCliente', 'idCliente='.$id);
        if($Atualiza->getResultado()){
           return true;
        }
    }
}