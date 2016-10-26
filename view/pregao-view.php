<div class="animate-box">
    <div class="container">
        <div class="row">
            <form method="post">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-md-6">
                    <select name="op" class="form-control col-md-5">
                        <option  value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="7">8</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <button type="submit" name="totalReg" class="btn btn-default" style="width: 100%;">Selecionar</button>
                        </div>
                </form>
        </div>

<?php

require_once (PATH."/model/ClienteModel.class.php");
    /* Número de Registro por página */
   if(isset($_POST['totalReg'])){
        $regPag = $_POST['op'] + 1;
   }else{
       $regPag= 3;
   }

    if (empty($_GET['p'])) {
        $pagAtual = "1";
    } else {
        $pagAtual = $_GET['p'];
    }

    $inicio = $pagAtual - 1;
    $inicio = $inicio * $regPag;

    $cliente = new Cliente();
    $limite = $cliente->getLimitada($inicio, $regPag);
    #$todos = $cliente->getAll();

    $tr = $cliente->getNumberReg();// verifica o número total de registros
    $tp = $tr / $regPag; // verifica o número total de páginas

    // vamos criar a visualização
    #while ($dados = $cliente->getLimitada($inicio, $regPag)) {

for ($i = 1; $i < $regPag; $i++) {?>
<div class="col-sm-12 col-md-12">
    <div class="thumbnail">
        <!--<img src="https://goo.gl/k1LHHZ" alt="...">-->
        <div class="caption">

            <h3><?php echo $limite[$i]['nome'];?></h3>
            <p><?php echo $limite[$i]['email'];?></p>
            <a href="<?php echo HOME_URI.'/inicio?id='.$limite[$i]['idCliente'];?>" class="btn btn-primary" role="button">Ver mais...</a>
        </div>
    </div>
</div>


    <?php } ?>
        <div class="col-md-12">
        <ul class="pager"><?php

$anterior = $pagAtual -1;
$proximo = $pagAtual +1;
if ($pagAtual>1) {
    echo "<li><a href='?p=$anterior'>Anterior</a></li>";
}
if ($pagAtual<$tp) {
    echo "<li><a href='?p=$proximo'>Próxima</a></li>";
}
?>
</ul></div>

            </div>
        </div>
    </div>
</div>