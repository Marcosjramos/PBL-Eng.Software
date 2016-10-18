<?php
require_once ('PrincipalController.class.php');
class HomeController extends PrincipalController{

    public function index(){

        $this->setTitle('Home');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/view/home.php";
        require_once PATH . "/view/includes/footer.php";
    }

    public function direciona($acao){
        if($acao == 'funcaoum'){
            $this->funcaoUm();
        }elseif ($acao == 'funcaodois'){
            $this->funcaoDois();
        }elseif ($acao == 'index'){
            $this->index();
        }else{
            $this->erroPagina();
            return;
        }
    }

    public function funcaoUm(){
        echo 'Vc escolher FUNÇÃO UM';
    }

    public function funcaoDois(){
        echo 'Vc escolher FUNÇÃO DOIS';
    }
}
