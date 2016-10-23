<?php
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 21/10/2016
 * Time: 21:20
 */

require_once('../prestador-model.php');

$pro = new Prestador();

$pro->setNome('Gilvanei');
$pro->setSenha('1234567');
$pro->setEmail('gilvanei@gmail.com');
$pro->setCpf('432764987-23');
$pro->setGenero('f');
$pro->setTelefone('234567890');
$pro->setAreaAtuacao('Predeiro');
$pro->setEndereco(1);
$pro->setTipoConta('gratis');

echo $pro->inserir();