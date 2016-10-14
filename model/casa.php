<?php

require_once PATH . "/CRUD/Config.inc.php";

class Casa{
    private $nome;
    private $idade;
    private $contato;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getContato()
    {
        return $this->contato;
    }

    public function setContato($contato)
    {
        $this->contato = $contato;
    }

    public function cadastrar(){
        $Dados = ['nome' => $this->nome, 'idade' => $this->idade, 'contato' => $this->contato];
        $Cadastra = new Create;
        $Cadastra->ExeCreate('cliente', $Dados);
    }
}