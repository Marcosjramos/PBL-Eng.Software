<?php

require_once ('PrincipalController.class.php');
class loginController extends PrincipalController
{

    public function index()
    {

        $this->setTitle('Cadastro Ep 2');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/view/login-view.php";
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