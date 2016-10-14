<?php


class PrincipalController
{

    public function setTitle($title){
        $_SESSION['title'] = TITLE.' : ' .$title;
    }

    public function __construct ( $acao ) {
        if(!empty($acao)){
            $this->direciona($acao);
        }else{
            $this->erroPagina();
        }
    }

    public function erroPagina(){
        echo "Página não encontrada";
    }
}