<?php

require_once ('PrincipalController.class.php');
class ContatoController extends PrincipalController
{

    public function index()
    {

        $this->setTitle('Contato');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/view/contato-view.php";
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