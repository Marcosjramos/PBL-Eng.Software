<?php

require_once ('PrincipalController.class.php');
class ErroController extends PrincipalController
{

    public function index()
    {

        $this->setTitle('Configurações');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/view/config-view.php";
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