<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Generic Crud :: Delete</title>
    </head>
    <body>
        <?php
        require('./Config.inc.php');
        //ws_siteviews_agent
        
        $deleta = new Delete;
        $deleta->ExeDelete('ws_siteviews_agent', "WHERE agent_id >= :id", 'id=23');
        
        if($deleta->getResultado()):
            echo "{$deleta->getNumRegistros()} registro(s) removidos com sucesso!<hr>";
        endif;
        
//        var_dump($deleta);
        ?>
    </body>
</html>
