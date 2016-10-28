<?php

require_once ('PrincipalController.class.php');
class AnuncioController extends PrincipalController
{

    public function index()
    {
        $this->setTitle('Cadastro');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/view/anuncio-view.php";
        require_once PATH . "/view/includes/footer.php";
    }

    public function direciona($acao){
        if($acao == 'index'){
            $this->index();
        }else{
            $this->erroPagina();
        }
    }
}