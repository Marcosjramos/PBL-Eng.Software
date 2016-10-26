        <?php
$tipo = $_SESSION['tipo'];
$cliente;

  require_once (PATH.'/model/ClienteModel.class.php');
  $cliente = new Cliente();


$msg = "<div class='alert-warning btn' style='display: block; position: relative; margin: 6em auto;'>Usuário não encontrado!</div>";

if(empty($_GET['id'])){
    echo $msg;
  }else{
  $id = $_GET['id'];
  $cliente->getCliente($id);

  if(!$cliente->getId()){
    echo $msg;
    return;
  }
?>
        <form method="get"  id="fContato">
          <article>                    
            <!-- FOTO DO USUÁRIO -->
            <?php
          if($cliente->getFoto()=='default'){
            $ft = 'http://placehold.it/200x200';
          }else{
            $ft = HOME_URI.'/view/foto/imagens/'.$cliente->getFoto();
          }
          ?>
            <h3>
              <div class="dashboard-avatar-perfil">
                <img title="Nome Sobrenome" alt="Nome Sobrenome"  class="img-circle img-responsive img-center imagem" src="<?php  echo $ft;?>">
                
                <br>
                <!-- NOME DO USUÁRIO (COMO UMA VARIÁVEL) -->
                <?php
                $nome = $cliente->getNome();
                ?>
                <legend> <?php echo $nome ?></legend>

                <br>
                <!-- E-MAIL DO USUARIO(COMO UMA VARIÁVEL) -->
                <?php
                $email = $cliente->getEmail();
                ?>
                <legend> <?php echo $email ?></legend>

                <br>
                <!-- CPF DO USUÁRIO (COMO UMA VARIÁVEL) -->
                <?php
                $cpf = $cliente->getCpf();
                ?>
                <legend> <?php echo $cpf ?></legend>

                <br>
                <!-- GENERO DO USUÁRIO (COMO UMA VARIÁVEL) -->
                <?php
                $genero = $cliente->getGenero();
                ?>
                <legend> <?php echo $genero ?></legend>

                <br>
                <!-- TELEFONE DO USUÁRIO (COMO UMA VARIÁVEL) -->
                <?php
                $telefone = $cliente->getTelefone();
                ?>
                <legend> <?php echo $telefone ?></legend>

                <br>
                <!-- ENDERECO DO USUÁRIO (COMO UMA VARIÁVEL) -->
                <?php
                $endereco = $cliente->getEndereco();
                $pais = $endereco->getPais();
                $estado = $endereco->getEstado();
                $cidade = $endereco->getCidade();
                $bairro = $endereco->getBairro();
                $logradouro = $endereco->getLogradouro();
                $numero = $endereco->getNumero();
                $cep = $endereco->getCep();
                $latitude = $endereco->getLatitude();
                $longitude = $endereco->getLongitude();
                ?>
                <legend> <?php echo $pais;
                               echo $estado;
                               echo $cidade;
                               echo $bairro;
                               echo $logradouro;
                               echo $numero;
                               echo $cep;
                               echo $latitude;
                               echo $longitude; ?></legend>
              </div>
            </h3>


            <h3>
              <!-- BOTÕES: -->
              <input type="button" name="botaoNotificacao" value="Notificações" onclick="window.open('notificacao.html', '_parent')"><br/>
              <input type="button" name="botaoPublicar" value="Publicar Serviços" onclick="window.open('publicar.html', '_parent')"><br/>
              <input type="button" name="botaoHistórico" value="Histórico" onclick="window.open('historico.html', '_parent')"><br/>
              <input type="button" name="botaoFavoritos" value="Favoritos" onclick="window.open('favoritos.html', '_parent')"><br/>
            </h3>

            <h2>
              <fieldset>
                <legend>Mural de anúncios</legend>
              </fieldset>
            </h2>

          </article>
        </form>
