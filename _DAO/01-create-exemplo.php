<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exemplo CRUD :: Create</title>
    </head>
    <body>
        <?php
        require('./CRUD/Config.inc.php'); 
        
        //dados da tabela sem o id
        $Dados = ['idUsuario' => '1', 'nome' => 'Teste Apenas', 'cpf' => '00000000000', 'telefone' => '000000000000'];
        
        $Cadastra = new Create;
        //nome da tabela e os dados que serão inseridos
        $Cadastra->ExeCreate('homer', $Dados);
        
        if($Cadastra->getResultado()):
            //debugando...
            echo "Cadastro com sucesso!<hr>";
            echo "Usuário {$Dados['nome']} cadastrado com sucesso";
        endif;
        
        var_dump($Cadastra);
        
        ?>
    </body>
</html>
