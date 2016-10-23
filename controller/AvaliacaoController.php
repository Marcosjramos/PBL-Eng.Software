<?php

require_once ('PrincipalController.class.php');
class AvaliacaoController extends PrincipalController
{

    public function index()
    {
        $this->setTitle('Foto de Perfil');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/demos/avaliacao-view.php";
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