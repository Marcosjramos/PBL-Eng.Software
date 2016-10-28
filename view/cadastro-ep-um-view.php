<script>
	function formatar(mascara, documento){
		var i = documento.value.length;
		var saida = mascara.substring(0,1);
		var texto = mascara.substring(i);

		if (texto.substring(0,1) != saida){
			documento.value += texto.substring(0,1);
		}
	}
</script>


<div class="animate-box">
	<div class="container">
		<div class="post">
			<form method="get" action="cadastro-ep-dois">
				<fieldset><legend>
						<h2>Cadastro de Usuário</h2></legend>

					<h4>Etapa 1</h4>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idNome">Nome:</label>
							<input type="text" class="form-control" name="tN" id="idNome" size="40" maxlength="40" placeholder="Nome Completo"/>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idEmail">E-mail:</label>
							<input type="email" class="form-control" name="tE" id="idEmail" size="20" maxlength="40" placeholder="example@gmail.com" />
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idSenha">Senha:</label>
							<input type="password" class="form-control" name="tS" id="idSenha" size="16" maxlength="16" placeholder="Entre 8 e 16 dígitos..."/>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idCmail">Confirmar senha:</label>
							<input type="password" class="form-control" name="tSC" id="idCmail" size="20" maxlength="40" placeholder="Entre 8 e 16 dígitos..." />
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="idCpf">CPF:</label>
							<input type="text" class="form-control" name="tC" id="idCpf" size="14" maxlength="14" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<fieldset><legend>Sexo: </legend>
								<div class="col-md-3"><label for="cMasc" class="control control--radio">
									<input type="radio" name="tSe" id="cMasc" checked value="Masculino" />
									<div class="control__indicator"></div>
									Masculino</label>
								</div>
								<div class="col-md-3"><label for="cFem" class="control control--radio">
									<input type="radio" name="tSe" id="cFem" value="Feminino" />
									<div class="control__indicator"></div>
									Feminino</label>
								</div>
							</fieldset>
						</div>
					</div>

					<div class="col-md-12 animate-box">
						<div class="form-group">
							<input type="submit" value="Próximo" name="tNext" class="btn btn-primary" />
						</div><!-- Fim da div Group do botão enviar -->
					</div>


				</fieldset>
			</form>
		</div>
	</div>
</div>