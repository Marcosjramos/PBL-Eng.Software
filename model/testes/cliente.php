<?php
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 21/10/2016
 * Time: 20:01
 */
require_once('../ClienteModel.class.php');

$c = new Cliente();
$c->getCliente($_GET['id']);
echo $c->getNome();



