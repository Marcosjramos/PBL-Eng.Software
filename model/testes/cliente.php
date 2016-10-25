<?php
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 21/10/2016
 * Time: 20:01
 */
require_once('../ClienteModel.class.php');

$c = new Cliente();
echo $c->getNumberReg().'<br/>';

$array = $c->getLimitada(0, 3);
echo '<br/>';
for ($i = 1; $i <= 2; $i++) {
    echo "Nome ".$i.": ";
    echo $array[$i]['nome'].' - '.$array[$i]['email'].'<br/>';
}


