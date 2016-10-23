<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exemplo CRUD :: Delete</title>
    </head>
    <body>
        <?php
        require('./CRUD/Config.inc.php'); 
        
        $Deleta = new Delete;
        //nome da tabela e o id onde será removido
        $Deleta->ExeDelete('homer', "WHERE id = :id", 'id=1');
        
        if($Deleta->getResultado()):
            //debugando...
            echo "{$Deleta->getNumRegistros()} registro(s) removido(s) com sucesso!<hr>";
        endif;
        
        var_dump($Deleta);
        
        ?>
    </body>
</html>