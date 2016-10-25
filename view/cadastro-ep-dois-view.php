<script>
	function formatar(mascara, documento){
		var i = documento.value.length;
		var saida = mascara.substring(0,1);
		var texto = mascara.substring(i)

		if (texto.substring(0,1) != saida){
			documento.value += texto.substring(0,1);
		}
	}
</script>
<?php
	require_once(PATH."/model/ClienteModel.class.php");
	require_once(PATH."/model/EnderecoModel.class.php");
	require_once(PATH."/model/PrestadorModel.class.php");
?>

<div class="animate-box">
	<div class="container">
		<div class="post">
			<form method="post">
				<fieldset>
					<legend><h2>Cadastro de Usuário</h2></legend>

					<h4>Etapa 2</h4>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idTelefone">Telefone:</label>
							<input type="text" name="tTelefone" class="form-control" maxlength="14" id="idTelefone" OnKeyPress="formatar('## # ####-####', this)" placeholder="00 0 0000-0000"/>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idEstado">Estado:</label>
							<select name="tEstado" id="idEstado" class="form-control">
								<option value="BA">Bahia</option>
								<option>RJ</option>
								<option>SP</option>
								<option>PA</option>
								<option>MG</option>
								<option>AL</option>
								<option>PE</option>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idCidade">Cidade: </label>
							<input type="text" class="typeahead tt-query form-control typeahead" name="tCidade" id="tCidade" placeholder="Cidade" autocomplete="off" spellcheck="false"/>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idCidade">Logradoudo: </label>
							<input type="text" class="typeahead tt-query form-control typeahead" name="tLogradouro" id="tLogradouro" placeholder="Av./Rua/Alameda/Estreito..." autocomplete="off" spellcheck="false"/>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idBairro">Bairro: </label>
							<input type="text" class="form-control" name="tBairro" id="idBairro" placeholder="Bairro..." />
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idNum">Número da Casa: </label>
							<input type="number" class="form-control" name="tNum" id="idNum" size="12" placeholder="Número..." min="0" max="9999" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idNum">CEP: </label>
							<input type="text" class="form-control" name="tCep" id="idCep" placeholder="CEP..." maxlength="10" OnKeyPress="formatar('##.###-###', this)" />
						</div>
					</div>

					<script>
						function habilitacao(){
							if(document.getElementById('isPrestador').checked == true){
								document.getElementById('idArea').disabled = ""
							}
							if(document.getElementById('isPrestador').checked == false){
								document.getElementById('idArea').disabled = "disabled"
							}
						}
					</script>
					<div class="col-md-6">
						<div class="form-group">
							<label for="isPrestador" class="control control--checkbox">
							<input type="checkbox" value="None" id="isPrestador" name="isPrestador" onClick="habilitacao()" />
								<div class="control__indicator"></div>
							Deseja oferecer seus serviços?</label>

							<select name="tArea" id="idArea" class="form-control" disabled>
								<option value="" disabled selected>Área de Atuação</option>
								<option value="Pedreiro">Pedreiro</option>
								<option value="Pintor">Pintor</option>
								<option value="Encanador">Encanador</option>
							</select>
						</div>
					</div>

					<div class="col-md-12 animate-box">
						<div class="form-group">
							<button value="Voltar" href="" name="tPrevious" class="btn btn-primary" onclick="history.go(-1)">Voltar</button>
							<input type="submit" value="Enviar Cadastro" name="tCadastrar" class="btn btn-primary" />
						</div><!-- Fim da div Group do botão enviar -->
					</div>
				</fieldset>
			</form>

			<?php
				if(isset($_POST['tCadastrar'])){

					$endereco = new Endereco();

					$endereco->setEstado($_POST['tEstado']);
					$endereco->setCidade($_POST['tCidade']);
					$endereco->setBairro($_POST['tBairro']);
					$endereco->setLogradouro($_POST['tLogradouro']);
					$endereco->setNumero($_POST['tNum']);
					$endereco->setCep($_POST['tCep']);
					$endereco->setLatitude(0);
					$endereco->setLongitude(0);

					$idEnd = $endereco->create();

					if(isset($_POST['isPrestador'])){

						$pro = new Prestador();

						$pro->setNome($_GET['tN']);
						$pro->setSenha($_GET['tS']);
						$pro->setEmail($_GET['tE']);
						$pro->setCpf($_GET['tC']);
						$pro->setGenero($_GET['tSe']);
						$pro->setTelefone($_POST['tTelefone']);
						$pro->setAreaAtuacao('tArea');
						$pro->setEndereco($idEnd);
						$pro->setTipoConta('gratis');

					?>
					<script>
						alert('foi');
					</script>
				<?php

						if($pro->inserir()){
							echo "Cadastrado com sucesso";
							?>
								<script>
									window.location="<?php echo HOME_URI.'/view/foto';?>";
								</script>
							<?php
						}else{
							echo "Erro ao cadastrar";
						}
					}else {
						$cliente = new Cliente();

						$cliente->setNome($_GET['tN']);
						$cliente->setSenha($_GET['tS']);
						$cliente->setEmail($_GET['tE']);
						$cliente->setCpf($_GET['tC']);
						$cliente->setGenero($_GET['tSe']);
						$cliente->setTelefone($_POST['tTelefone']);
						$cliente->setFoto('default');
						$cliente->setEndereco($idEnd);

						if($cliente->inserir()){
							echo "Cadastrado com sucesso";
							?>
								<script>
									window.location="<?php echo HOME_URI.'/view/foto';?>";
								</script>
							<?php
						}else{
							echo "Erro ao cadastrar";
						}
					}
				}

			?>
		</div>
	</div>
</div>
