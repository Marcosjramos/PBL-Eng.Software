<?php
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 12/10/2016
 * Time: 20:06
 */






if(!empty($_GET['control'])){

    /* Recebe o parâmetro Control e Acao da URL o trata, retirando
     * os elementos HTML (questão de segurança) com a função strip_tags;
     * além de converter os parâmetros para minusculas, patronizando o
     * acesso.
     */
    $control = strip_tags (strtolower($_GET['control']));
    $acao;
    if(!empty($_GET['acao'])) {
        $acao = strip_tags(strtolower($_GET['acao']));
    }else{
        $acao = 'index';
    }

    $control = preg_replace( '/[^a-zA-Z]/i', '', $control );
    $acao = preg_replace( '/[^a-zA-Z]/i', '', $acao );

    $file = 'controller/'.$control.'Controller.class.php';

    if ( ! file_exists( $file ) ) {
        echo "Página Não Encontrara!";
        return;
    }

    // Inclui o arquivo da classe
    require_once $file;

    $classe = $control.'Controller';
    $controle = new $classe($acao);
}else{
    require_once('controller/HomeController.class.php');
    $controle = new HomeController('index');
}