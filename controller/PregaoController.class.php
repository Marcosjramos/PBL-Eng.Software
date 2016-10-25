<?php
require_once ('PrincipalController.class.php');
class PregaoController extends PrincipalController
{
    public function index(){

        $this->setTitle('Home');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/view/pregao-view.php";
        require_once PATH . "/view/includes/footer.php";
    }

    public function direciona($acao){
        if($acao == 'index'){
            $this->index();
        }else{
            $this->erroPagina();
            return;
        }
    }
}