<?php
	#define("PATH", "C:/wamp/www/projetos/PBL-Eng.Software" );
	require_once(PATH."/model/ClienteModel.class.php");
	require_once(PATH."/model/EnderecoModel.class.php");
	require_once(PATH."/model/PrestadorModel.class.php");
	require_once(PATH."/classes/Login.class.php");
?>

<div class="animate-box">
	<div class="container">
		<div class="post">
			<form method="post">
				<fieldset>
					<legend><h2>Acessar Conta</h2></legend>

					<div class="col-md-8">
						<div class="form-group">
							<label for="idEmail">E-mail:</label>
							<input type="email" class="form-control" name="tM" id="idEmail" size="20" maxlength="40" placeholder="example@gmail.com" />
						</div>
					</div>

					<div class="col-md-8">
						<div class="form-group">
							<label for="idSenha">Senha:</label>
							<input type="password" class="form-control" name="tS" id="idSenha" size="16" maxlength="16" placeholder="16 dígitos"/>
						</div>
					</div>

					<div class="col-md-8 animate-box">
						<div class="form-group">
							<a href="" target="_self">Esqueci minha senha  </a><br> 
							<input type="submit" value="Entrar" name="tEntrar" class="btn btn-primary" />
						</div>
					</div>

				</fieldset>
			</form>

			<?php
			if(isset($_POST['tEntrar'])){

				$login = new Login;
				$login->Login($_POST['tM'], $_POST['tS']);
				echo "<br>{$login->getID()}<br>";

				if($login->isLogado()){
					echo 'logou';
					?>
						<script>
							window.location="<?php echo HOME_URI.'/inicio?id=12';?>";
						</script>
					<?php
				} else{

					$msg="<div class='alert-warning btn' style='display: block; position: center; margin: 1em auto;'>Senha ou Login incorreto!</div>";
					echo $msg;
				}
			}
			?>
		</div>	
	</div>
</div>
