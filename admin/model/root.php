    <?php


      class root{

          private $nome;
          private $email;
          private $senha;
          private $id;

          /**
           * Root constructor.
           * @param $nome
           * @param $email
           * @param $senha
           * @param $id
           */
          public function __construct($nome, $email, $senha, $id){
              $this->nome = $nome;
              $this->email = $email;
              $this->senha = $senha;
              $this->id = $id;
          }

          /**
           * @return mixed
           */
          public function getNome(){
              return $this->nome;
          }

          /**
           * @param mixed $nome
           */
          public function setNome($nome){
              $this->nome = $nome;
          }

          /**
           * @return mixed
           */
          public function getEmail(){
              return $this->email;
          }

          /**
           * @param mixed $email
           */
          public function setEmail($email){
              $this->email = $email;
          }

          /**
           * @return mixed
           */
          public function getSenha()
          {
              return $this->senha;
          }

          /**
           * @param mixed $senha
           */
          public function setSenha($senha)
          {
              $this->senha = $senha;
          }

          /**
           * @return mixed
           */
          public function getId()
          {
              return $this->id;
          }

          /**
           * @param mixed $id
           */
          public function setId($id)
          {
              $this->id = $id;
          }


      }