<?php

$tipo;
$cliente;
require_once (PATH.'/classes/Login.class.php');
require_once (PATH.'/model/PrestadorModel.class.php');
	require_once (PATH.'/model/ClienteModel.class.php');
	$login = new Login();
	#$cliente = new Prestador();


$msg = "<div class='alert-warning btn' style='display: block; position: relative; margin: 6em auto;'>Usuário não encontrado!</div>";

if(empty($_GET['id'])){
		echo $msg;
	}else{
	$id = $_GET['id'];
	$tipo = $login->tipoConta($id);
	if($tipo == 'cliente'){
		$cliente = new Cliente();
	}elseif ($tipo == 'prestador'){
		$cliente = new Prestador();
	}else{
		echo "ERRO INTERNO!";
	}

	$cliente->getCliente($id);

	if(!$cliente->getId()){
		echo $msg;
		return;
	}
?>
<div class="animate-box">
	<div class="container">
		<div style="height: 2em"></div>
		<div class="row">
			<div class="col-md-offset-2 col-md-10 col-lg-offset-2 col-lg-8">
				<div class="well profile">

				<div class="col-md-3 ">
					<?php
					if($cliente->getFoto()=='default'){
						$ft = 'http://placehold.it/200x200';
					}else{
						$ft = HOME_URI.'/view/foto/imagens/'.$cliente->getFoto();
					}
					?>

					<img class="img-circle img-responsive img-center imagem" src="<?php echo $ft; ?>">
				</div>

				<div class="text-justify">
					<h2><?php echo $cliente->getNome();?></h2>



					<div class="alert-success" style="padding: 10px;">
						<h4><?php
							if($cliente->getGenero() == 'masc'){
								echo "Bem-vido";
							}else{
								echo "Bem-vinda";
							}?> ao Homer!</h4>
						<p>Você entrou como <?php echo $tipo; ?></p>
						<div class="col-md-12">
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 85%">
								<span class="sr-only">85% Complete (success)</span>
							</div>
							<div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 5%">
								<span class="sr-only">5% Complete (warning)</span>
							</div>
							<div class="progress-bar progress-bar-danger" style="width: 10%">
								<span class="sr-only">10% Complete (danger)</span>
							</div>
							</div>
						</div>
					</div>
				</div><br/>

				<div class="col-md-12">
					<div class="col-md-6 ">
					<a href="pregao"><button class="btn btn-default" style="width: 100%">Acompanhar Pregão</button></a>
					</div>
					<div class="col-md-6">
					<p><a href="anuncio" class="btn btn-primary btn-outline with-arrow" style="width: 100%; background-color: #FFF;">Criar Anúncio <i class="icon-arrow-right"></i></a></p>
						</div>

						<div class="col-md-12 carousel">
							<fieldset><legend></legend>

							</fieldset>
						</div>



			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="https://goo.gl/k1LHHZ" alt="...">
						<div class="caption">
							<h3>Thumbnail label</h3>
							<p>...</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="https://goo.gl/k1LHHZ" alt="...">
								<div class="caption">
									<h3>Thumbnail label</h3>
									<p>...</p>
									<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="https://goo.gl/k1LHHZ" alt="...">
								<div class="caption">
									<h3>Thumbnail label</h3>
									<p>...</p>
									<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								</div>
							</div>
						</div>
					</div>





			</div>
</div>
		</div>
	</div>
</div>
</div>


<?php } ?>