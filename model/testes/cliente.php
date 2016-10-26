<?php
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 21/10/2016
 * Time: 20:01
 */
require_once('../ClienteModel.class.php');

$c = new Cliente();
echo "Exibindo 2 de ".$c->getNumberReg().'<br/>';

$array = $c->getLimitada(0, 5);
echo '<br/>';
for ($i = 1; $i <= 2; $i++) {
    echo "Nome ".$i.": ";
    echo $array[$i]['nome'].' - '.$array[$i]['email'].'<br/>';
}

$aca = $c->getAll();

for ($i = 1; $i <= 7; $i++) {
    echo "Nome ".$i.": ";
    echo $aca[$i]['nome'].' - '.$aca[$i]['email'].'<br/>';
}
