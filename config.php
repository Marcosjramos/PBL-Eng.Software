<?php
define("PATH", "C:/wamp/www/projetos/PBL-Eng.Software");
define("HOME_URI", "http://localhost/projetos/PBL-Eng.Software");
define("TITLE", "Homer");

$_SESSION['tipo'] = 'cliente';
$_SESSION['id'] = 12;
$_COOKIE['id'] = 12;

require_once ('loader.php');