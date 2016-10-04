<?php

/**
* Conexao.class.php
* Versão 1.0
* Data de Criação: 24/09/2016
* Classe de conexão ao banco de dados no padrão Singleton.
* Retorna um objeto PDO pelo método getConexao().
* @copyright (c) 2016, Lenington do C. Rios - UEFS,
* Código adaptado de Robson V. Leite - UPINSIDE TREINAMENTOS.
*/
class Conexao {

	private static $Host = HOST; //host do banco de dados
	private static $User = USER; //usuário do banco de dados
	private static $Pass = PASS; //senha do usuário do banco de dados
	private static $Dbsa = DBSA; //nome do banco de dados que será manipulado

	/** @var PDO */
	private static $Conecta = null;

	private static function Conectar() {
		try{
			if (self::$Conecta == null) {//se não existir uma nova instância do objeto
				$dsn = 'mysql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
				$opcoes = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];

				self::$Conecta = new PDO($dsn, self::$User, self::$Pass, $opcoes);//instancia o PDO
			}
		} catch(PDOException $e){
			PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            die;
		}

		self::$Conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return self::$Conecta;
	}

	/** 
	* Retorna um objeto PDO Singleton Pattern.
	*/
	public static function getConexao(){
		return self::Conectar();
	}
}