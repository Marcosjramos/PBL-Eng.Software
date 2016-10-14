<div id="corpo">
    <h1>Olá pessoa</h1>
    <form method="post" name="formCasa">
        <input type="text" name="nome" placeholder="Nome">
        <input type="number" name="idade" placeholder="Idade">
        <input type="text" name="contato" placeholder="Contato">
        <input type="submit" name="btn" value="Enviar">
    </form>
</div>

<?php
require_once PATH . "/model/cliente.php";

if(isset($_POST['btn'])){
    $casa = new Casa();
    $casa->setNome($_POST['nome']);
    $casa->setIdade($_POST['idade']);
    $casa->setContato($_POST['contato']);

    $casa->cadastrar();
}