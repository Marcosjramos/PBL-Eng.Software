<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="form.css"/>
	<title>Cadastro HOMER</title>
</head>
<body>	
		<div id="interface">
		<form method="get" action="cadastro-etapa2.html">
			<fieldset><legend><h1>Cadastro de Usuário</h1></legend>

				<h3>Etapa 1</h3>

				<p><label for="idNome">Nome:</label><input type="text" name="tNome" id="idNome" size="40" maxlength="40" placeholder="Nome Completo"/></p>

				<p><label for="idSenha">Senha:</label><input type="password" name="tSenha" id="idSenha" size="16" maxlength="16" placeholder="16 dígitos"/></p>

				<p><label for="idEmail">E-mail:</label><input type="email" name="tMail" id="idEmail" size="20" maxlength="40" placeholder="example@gmail.com" /></p>	

				<p><label for="idCmail">Confirmar e-mail:</label><input type="email" name="tMail" id="idCmail" size="20" maxlength="40" placeholder="example@gmail.com" /></p>
				
				<p><label for="idCpf">CPF:</label><input type="text" name="tCpf" id="idCpf" size="14" maxlength="14"
					placeholder="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
					title="Digite o CPF no formato nnn.nnn.nnn-nn"/></p>

				<input type="submit" value="Next" name="tNext" />
			</fieldset>
		</form>
		</div>
</body>
</html>