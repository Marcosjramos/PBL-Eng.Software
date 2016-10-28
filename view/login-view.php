<?php
#define("PATH", "C:/wamp/www/projetos/PBL-Eng.Software" );
require_once(PATH."/model/ClienteModel.class.php");
require_once(PATH."/model/EnderecoModel.class.php");
require_once(PATH."/model/PrestadorModel.class.php");
require_once(PATH."/classes/Login.class.php");
?>

<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" >
	<div class="panel-heading">
		<div class="panel-title">Entrar</div>
		<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu sua senha?</a></div>
	</div>

	<div style="padding-top:30px" class="panel-body" >

		<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

		<form id="loginform" class="form-horizontal" role="form" method="post" name="login">

			<div style="margin-bottom: 25px" class="input-group">
				<span class="input-group-addon"><i class="icon icon-user"></i></span>
				<input id="login-username" type="email" class="form-control" name="username" value="" placeholder="Seu email...">
			</div>

			<div style="margin-bottom: 25px" class="input-group">
				<span class="input-group-addon"><i class="icon icon-lock"></i></span>
				<input id="login-password" type="password" class="form-control" name="password" placeholder="Senha...">
			</div>

			<div class="input-group">
				<div class="checkbox">
					<label for="login-remember" class="control control--checkbox">
						<input id="login-remember" type="checkbox" name="remember" value="1" class="radio">
						<div class="control__indicator"> </div>
						&ensp;Lembre-me!
					</label>
				</div>
			</div>

			<div style="margin-top:10px" class="form-group">
				<!-- Button -->

				<div class="col-sm-12 controls">
					<!--<a type="submit" name="tEntrar" href="" id="btn-login" class="btn btn-success"><i class="icon-arrow-up"></i> &nbsp;&nbsp;Entrar  </a>-->
					<input type="submit" name="tEntrar" class="btn btn-success">
					<a id="btn-fblogin" href="#" class="btn btn-primary"><i class="icon-facebook"></i>   &nbsp;&nbsp;Entrar com o Facebook</a>

				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12 control">
					<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
						Não tem uma conta?
						<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
							Inscreva-se
						</a>
					</div>
				</div>
			</div>
		</form>

		<?php
		if(isset($_POST['tEntrar'])) {
		if (empty($_POST['username']) || empty($_POST['password'])){
			?>
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<strong>Atenção!</strong> Senha ou e-mail vazio.
			</div>
		<?php
		}else{

			$pass = md5($_POST['password']);

		$login = new Login;
		$login->Login($_POST['username'], $pass);
		echo "<br>{$login->getID()}<br>";

		if ($login->isLogado()){
			$id = $login->getID();
			$_SESSION['id']=$id;
			$_SESSION['tipo'] = $login->tipoConta($id);
		?>
			<script>
				window.location = "<?php echo HOME_URI . '/inicio?id='.$id;?>";
			</script>
			<?php
		} else {

			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<strong>Atenção!</strong> Senha ou e-mail incorreto.
			</div>
			<?php
		}
		}
		}
		?>
	</div>
</div>
</div>
</div>