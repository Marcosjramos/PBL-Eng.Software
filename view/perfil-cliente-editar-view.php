<?php
$tipo = 'cliente';
$cliente;

require_once (PATH.'/model/EnderecoModel.class.php');
require_once (PATH.'/model/ClienteModel.class.php');
$cliente = new Cliente();
$end = new Endereco();


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
    <!-- FOTO DO USUÁRIO -->
    <?php
    if($cliente->getFoto()=='default'){
      $ft = 'http://placehold.it/200x200';
    }else{
      $ft = HOME_URI.'/view/foto/imagens/'.$cliente->getFoto();
    }

    $end->getEndereco($cliente->getEndereco());


    ?>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
  <div style="height: 2em"></div>
  <div class="row">
    <div class="col-md-offset-2 col-md-10 col-lg-offset-2 col-lg-8">
      <div class="well profile">
        <?php if($cliente->getGenero()=='Masculino'){echo "<i class='icon icon-profile-male'></i>"; }else{
          echo "<i class='icon icon-profile-female'></i>";} ?>

        <div class="col-sm-12">

          <div class="col-xs-12 col-sm-8">
            <h2><?php echo $cliente->getNome(); ?></h2>
            <p>No Homer como <strong><?php echo $tipo?></strong>. </p>
            <p><strong>Local: </strong> <?php echo $end->getBairro().', '.$end->getCidade().' - '.$end->getEstado().'.'; ?> </p>
            <p><strong>Contato: </strong>
              <span class="tags"><?php echo $cliente->getTelefone().'</span> | <span class="tags">'.$cliente->getEmail(); ?></span>
            </p>
          </div>
          <div class="col-xs-12 col-sm-3 text-center">
            <figure>
              <img src="<?php echo $ft; ?>" alt="" class="img-circle img-responsive">
              <figcaption class="ratings">
                <p>
                  <a href="#">
                    <span class="fa fa-star"></span>
                  </a>
                  <a href="#">
                    <span class="fa fa-star"></span>
                  </a>
                  <a href="#">
                    <span class="fa fa-star"></span>
                  </a>
                  <a href="#">
                    <span class="fa fa-star"></span>
                  </a>
                  <a href="#">
                    <span class="fa fa-star-o"></span>
                  </a>
                  Avaliação
                </p>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-xs-12 divider text-center">
          <div class="col-xs-12 col-sm-4 emphasis">
            <h2><strong>&nbsp;&nbsp;</strong></h2>
            <p><small>&nbsp;&nbsp;</small></p>
            <button class="btn btn-success btn-block"><i class="fa fa-history" aria-hidden="true"></i></span> Histórico </button>
          </div>
          <div class="col-xs-12 col-sm-4 emphasis">
            <h2><strong>245</strong></h2>
            <p><small>Favoritou</small></p>
            <button class="btn btn-info btn-block"><span class="fa fa-fav"></span> Favoritar </button>
          </div>
          <div class="col-xs-12 col-sm-4 emphasis">
            <h2><strong>245</strong></h2>
            <p><small>Contratou</small></p>
            <button class="btn btn-info btn-block"><span class="fa fa-fav"></span> Contratar </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div style="height: 2em"></div>
<?php } ?>