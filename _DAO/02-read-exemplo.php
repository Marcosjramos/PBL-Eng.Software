<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exemplo CRUD :: Read</title>
    </head>
    <body>
        <?php
        require('./CRUD/Config.inc.php'); 
        
        
        $Pesquisa = new Read;
        //exemplo de pesquisa de cliente
        $Pesquisa->ExeRead('homer', 'WHERE nome = :nome AND id = :id', 'nome=Teste Apenas&id=5');
        

        if($Pesquisa->getResultado()):
            //pegando as variáveis da tabela:
            $array = $Pesquisa->getResultado();
            $id = $array[0]['nome'];
            $idUsuario = $array[0]['idUsuario'];
            $nome = $array[0]['nome'];
            $cpf = $array[0]['cpf'];
            $telefone = $array[0]['telefone'];
            //debugando...
            echo "{$Pesquisa->getNumRegistros()} Resultado(s) encontrado(s):<hr>";
            echo "Nome = {$nome}, id = {$idUsuario}, cpf = {$cpf}, telefone = {$telefone}";
        endif;
        
        var_dump($Pesquisa);
        
        ?>
    </body>
</html>