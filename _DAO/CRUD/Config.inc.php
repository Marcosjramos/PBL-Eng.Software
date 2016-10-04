<?php

/**
* <b>Config.inc.php</b>
* Versão 1.0
* Data de Criação: 24/09/2016
* Configurações de acesso ao banco de dados
* @copyright (c) 2016, Lenington do C. Rios - UEFS,
* Código adaptado de Robson V. Leite - UPINSIDE TREINAMENTOS.
*/
define('HOST', 'localhost'); //host do banco de dados
define('USER', 'root');	//usuário do banco de dados
define('PASS', ''); //senha do usuário
define('DBSA', 'new_schema'); //nome do banco de dados que será manipulado

// AUTO LOAD DE CLASSES ####################
function __autoload($Classe) {

	$configDiretorio = ['Conexao']; //configuração do diretório
	$includeDiretorio = null; //para verificar se a inclusão ocorreu ou não

	foreach ($configDiretorio as $nomeDiretorio) {
		if (!$includeDiretorio && file_exists(__DIR__ . "\\{$nomeDiretorio}\\{$Classe}.class.php")
									&& !is_dir(__DIR__ . "\\{$nomeDiretorio}\\{$Classe}.class.php")) {
			
			include_once(__DIR__ . "\\{$nomeDiretorio}\\{$Classe}.class.php");
			$includeDiretorio = true;
		}
	}

	if (!$includeDiretorio) { //caso não seja possível incluir o diretório
		trigger_error("Não foi possível incluir {$Classe}.class.php", E_USER_ERROR);
		die;
	}
}

// TRATAMENTO DE ERROS #####################
//CSS constantes :: Mensagens de Erro
define('WS_ACCEPT', 'accept');
define('WS_INFOR', 'infor');
define('WS_ALERT', 'alert');
define('WS_ERROR', 'error');

//WSErro :: Exibe erros lançados :: Front
function WSErro($ErrMsg, $ErrNo, $ErrDie = null) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";

    if ($ErrDie):
        die;
    endif;
}

//PHPErro :: personaliza o gatilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na Linha: #{$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";
    echo "<span class=\"ajax_close\"></span></p>";

    if ($ErrNo == E_USER_ERROR):
        die;
    endif;
}

set_error_handler('PHPErro');
