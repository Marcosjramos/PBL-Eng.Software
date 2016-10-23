<?php

class Administrador extends Usuario {
	
	//private $id;

	public function __construct($email, $senha)
	{
		parent::__construct($email, $senha);
		//$this->id = $id;
	}

	/*
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function equals($administrador) {
		
		if ($this->id == $usuario->id) {
			return true;
		} else {
			return false;
		}
	}
	*/
}

?>