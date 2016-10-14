<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title> Avaliação </title>
  <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
</head>

<body>
  <div id="interface">

    <header id="cabecalho">
      <h1 class="fontzero"> Avalie Fulano </h1>
    </header>

    <form method="get"  id="avaliacao">
      <h2>
        <legend> Descrição: </legend>
        <label>
          <textarea name="d" rows="5" cols="90" placeholder="Descreva o serviço"></textarea>
        </label>
      </h2>
      <h2>
        <legend> Nota:
          <label>
            <input type="number" name="n" size="1" min="0" max="5" placeholder="0 a 5">
          </label>
        </legend>
      </h2>
      <br/><p>
        <input type="button" name="botaoEnviar" value="ENVIAR" onclick="window.open('perfil-prestador-view.php', '_parent')"/>
      </p>
    </form>
  </div>
</body>

</html>