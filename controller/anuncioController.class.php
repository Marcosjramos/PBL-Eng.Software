<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 27/10/2016
 * Time: 10:36
 */
=======

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
>>>>>>> e3ea24ce5e0f27d80530c8af39350454741fd47e
