<?php
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 21/10/2016
 * Time: 20:01
 */
require_once('../EnderecoModel.class.php');

$endereco = new Endereco();

$endereco->setEstado('BA');
$endereco->setCidade('Feira');
$endereco->setBairro('Centro');
$endereco->setLogradouro('FVI');
$endereco->setNumero('65');
$endereco->setCep('2345678');
$endereco->setLatitude(0);
$endereco->setLongitude(0);

echo $endereco->create();
