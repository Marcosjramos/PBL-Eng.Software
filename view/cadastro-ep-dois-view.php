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

<div class="animate-box">
	<div class="container">
		<div class="post">
			<form method="post" action="">
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
							<input type="text" class="typeahead tt-query form-control typeahead" name="tCidade" id="tags" placeholder="Cidade" autocomplete="off" spellcheck="false"/>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idBairro">Bairro: </label>
							<input type="text" class="form-control" name="tBairro" id="idBairro" placeholder="Bairro" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idNum">Número da Casa: </label>
							<input type="number" class="form-control" name="tNum" id="idNum" size="12" placeholder="Número" min="0" max="9999" />
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
							<button value="Voltar" href="<?php echo PATH . "/cadastro"; ?>" name="tPrevious" class="btn btn-primary" onclick="history.go(-1)">Voltar</button>
							<input type="submit" value="Enviar Cadastro" name="tCadastrar" class="btn btn-primary" />
						</div><!-- Fim da div Group do botão enviar -->
					</div>
				</fieldset>
			</form>

			<?php
				require_once PATH . "/model/ClienteModel.php";
				$mesagemStatus = '';

				if(isset($_POST['btn'])){
					$cliente = new ClienteModel();
					$cliente->setNome($_GET['tNome']);
					$cliente->setSenha($_GET['tSenha']);
					$cliente->setEmail($_GET['tMail']);
					$cliente->setCpf($_GET['tCpf']);
					$cliente->setGenero($_GET['tSexo']);

					$cliente->inserir();
				}

				echo $mesagemStatus;
			?>
		</div>
	</div>
</div>
