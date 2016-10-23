<?php

require_once ('PrincipalController.class.php');
class ProfilePhotoController extends PrincipalController
{

    public function index()
    {
        $this->setTitle('Foto de Perfil');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/view/denuncia-view.php";
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