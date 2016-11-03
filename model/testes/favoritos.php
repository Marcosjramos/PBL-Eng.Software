<?php
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 02/11/2016
 * Time: 21:09
 */

require_once('../FavoritoModel.class.php');

$f = new Favorito();

echo $f->add(12, 6);