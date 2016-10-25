<?php

    /* Número de Registro por página */
    $regPag = 10;

    $pagina=$_GET['p'];
    if (!$pagina) {
        $pagAtual = "1";
    } else {
        $pagAtual = $pagina;
    }

    $inicio = $pagAtual - 1;
    $inicio = $inicio * $regPag;

    $limite = mysql_query("$busca LIMIT $inicio,$total_reg");
    $todos = mysql_query("$busca");

    $tr = mysql_num_rows($todos); // verifica o número total de registros
    $tp = $tr / $total_reg; // verifica o número total de páginas

    // vamos criar a visualização
    while ($dados = mysql_fetch_array($limite)) {
    $nome = $dados["nome"];
    echo "Nome: $nome<br>";


?>



    <div class="animate-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                </div>
            </div>
        </div>
    </div>