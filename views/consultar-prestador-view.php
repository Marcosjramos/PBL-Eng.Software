<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title> Prestadores - Homer </title>
  <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
</head>

<body>
  <div id="interface">

    <header id="cabecalho">
      <h1 class="fontzero"> Pesquisa de Prestadores </h1>
    </header>

    <form method="get"  id="prestadores">
      <h2>
        <legend> Área de Atuação:
          <label>
            <select name="aa">
              <option value="area">Selecione</option>
              <option value="b">Babá</option>
              <option value="ca">Carpinteiro</option>
              <option value="co">Cozinheiro</option>
              <option value="el">Eletricista</option>
              <option value="en">Encanador</option>
              <option value="f">Faxineiro</option>
              <option value="j">Jardineiro</option>
              <option value="l">Lavandeira</option>
              <option value="pe">Pedreiro</option>
              <option value="pi">Pintor</option>
            </select>
          </label>
        </legend>
      </h2>      
      <h3>
        <fieldset>
          <legend> Localização </legend>
            <legend> País: </legend>
            <label>              
              <input type="text" name="p" placeholder="Digite o país">
            </label>
            <legend> Estado: </legend>
            <label>              
              <input type="text" name="e" placeholder="Digite o estado">
            </label>
            <legend> Cidade: </legend>
            <label>              
              <input type="text" name="c" placeholder="Digite a cidade">
            </label>
            <legend> Bairro: </legend>
            <label>              
              <input type="text" name="b" placeholder="Digite o bairro">
            </label>
            <legend> Logradouro: </legend>
            <label>              
              <input type="text" name="r" placeholder="Digite o logradouro">
            </label>
            <legend> Nº: </legend>
            <label>              
              <input type="number" name="n" size="8" placeholder="Digite o número">
            </label>
        </fieldset>
      </h3>
      <br/><p>
        <input type="button" name="botaoVoltar" value="VOLTAR"/>        
        <input type="button" name="botaoBuscar" value="BUSCAR"/>        
      </p>
      <fieldset>
        <legend> Resultados </legend>
        <br/><br/><br/><br/><br/>
      </fieldset>
    </form>
  </div>
</body>

</html>