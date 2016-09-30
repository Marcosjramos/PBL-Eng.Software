<?php

   class Cliente implements Usuario{

   	 private $Nome;
   	 private $Sexo;
   	 private $Endereco;
   	 private $CPF;
   	 private $Tel;
     private $Email;
     private $Senha;


      public function __construct($nome,$sexo,$endereco,$cpf,$tel,$email,$senha){
	
	  	$this->Nome=$nome;
	  	$this->Sexo=$sexo;
	  	$this->Endereco=$endereco;
	  	$this->CPF=$cpf;
	  	$this->Tel=$tel;
      $this->Email=$email;
      $this->Senha=$senha;
		
	    }
       public function getEmail(){
          return $this->Email;
        }

        public function setEmail($email){
          $this->Email=$email;
        }
        
        public function setSenha($senha){
          $this->Senha=$senha;
        }

        public  function setCPF($cpf){
          $this->CPF=$cpf;

        }

        public function getCPF(){
        	return $this->CPF;
        }

        public  function setNome($nome){
        	 $this->Nome=$nome;

        }

        public  function getNome(){
        	return $this->Nome;

        }

        public  function setSexo($sexo){
        	$this->Sexo=$sexo;

        }

        public  function getSexo(){
        	return $this->Sexo;

        }

        public  function setEndereco($endereco){
            $this->Endereco=$endereco;

        }

        public function getEndereco(){
        	return $this->endereco;

        }

        public function setTel($tel){
        	$this->Tel=$tel;

        }

        public function getTel(){
        	return $this->Tel;

        }
        
   	
   }

  ?>