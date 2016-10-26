    <?php
$tipo = $_SESSION['tipo'];
$cliente;

  require_once (PATH.'/model/PrestadorModel.class.php');
  $cliente = new Prestador();

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

    <div id="interface">
      <header id="cabecalho">
        <hgroup>
      
          <h1 class="fontzero">Bem vindo, <?php echo $cliente->getNome(); ?>!</h1>
          <p>
          
          </p>
        </hgroup>
      </header>
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
                <img title="Nome Sobrenome" alt="Nome Sobrenome" src="<?php echo $ft; ?>">
                
                <br>
                <!-- NOME DO USUÁRIO (COMO UMA VARIÁVEL) -->
                <?php $nome = $cliente->getNome(); ?>
                <legend><?php echo $nome ?> </legend>
                <legend>Avaliações</legend>
              </div>
            </h3>


            <h3>
              <!-- BOTÕES: -->
              <input type="button" name="botaoNotificacao" value="Notificações" onclick="window.open('notificacao.html', '_parent')"><br/>
              <input type="button" name="botaoCriarAnuncios" value="Criar Anúncios" onclick="window.open('criar_anuncio.html', '_parent')"><br/>
              <input type="button" name="botaoPublicar" value="Publicar Serviços" onclick="window.open('publicar.html', '_parent')"><br/>
              <input type="button" name="botaoHistórico" value="Histórico" onclick="window.open('historico.html', '_parent')"><br/>
              <input type="button" name="botaoFavoritos" value="Favoritos" onclick="window.open('favoritos.html', '_parent')"><br/>
            </h3>

            <h2>
              <fieldset>
                <legend>Fotos de Serviços</legend>
                <div class="dashboard-avatar-perfil">
                  <img title="Nome Sobrenome" alt="Nome Sobrenome" src="_imagens/foto_perfil.png">
                  <img title="Nome Sobrenome" alt="Nome Sobrenome" src="_imagens/foto_perfil.png">
                </div>
              </fieldset>
            </h2>

            <h2>
              <fieldset>
                <legend>Mural de anúncios</legend>
              </fieldset>
            </h2>

            <h2>
              <fieldset>
                <legend>Comentários</legend>
              </fieldset>
            </h2>

          </article>
        </form>