<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exemplo CRUD :: Update</title>
    </head>
    <body>
        <?php
        require('./CRUD/Config.inc.php'); 
        
        //dados da tabela sem o id
        $Dados = ['id' => '1', 'nome' => 'Fulando Update', 'telefone' => '22222222222'];
        
        $Atualiza = new Update;
        //nome da tabela, os dados que serão atualizados e em que linha será atualizado
        $Atualiza->ExeUpdate('homer', $Dados, "WHERE id = :id", 'id=1');
        
        if($Atualiza->getResultado()):
            //debugando...
            echo "Dados atualizados com sucesso!<hr>";
            echo "Usuário {$Dados['nome']} atualizado com sucesso";
        endif;
        
        var_dump($Atualiza);
        
        ?>
    </body>
</html>