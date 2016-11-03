<?php
require_once (PATH . '/model/clienteModel.class.php');
require_once (PATH . '/model/PrestadorModel.class.php');
require_once (PATH . '/model/EnderecoModel.class.php');

$id = $_GET['id'];

$c = new Cliente();
$e = new Endereco();

$c->getCliente($id);
$e->getEndereco($c->getEndereco());

if($c->isPrestador($id)){
    $c = new Prestador();
    $c->getPrestador($id, $c->getIdPestador());
}
?>
<div class="panel-body">
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="indicator icon icon-list"></i> Editar informações pessoais </a> </h4>
                    </div>

                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <fieldset>
                                <legend>
                                    Informações Pessoas
                                </legend>
                                <form method="post">
                                    <div class="col-md-6">
                                        <input value="<?php echo $c->getNome(); ?>" name="nome" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input value="<?php echo $c->getEmail(); ?>" name="email" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input value="<?php echo $c->getCpf(); ?>" name="cpf" type="text" class="form-control" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input value="<?php echo $c->getGenero(); ?>" name="sexo" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input value="<?php echo $c->getTelefone(); ?>" name="telefone" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-6 col-md-offset-6" style="margin-top: 5px">
                                            <input type="submit" value="Atualizar" onclick="location.reload();" style="width: 100%" class="btn btn-primary btn-outline" name="update">
                                        </div>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                </div>

                <?php

                    $inMsg = "
						<div class='alert alert-success alert-dismissible' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span></button>
							<strong>" . $c->getNome() . "!</strong>";

                    if(isset($_POST['update'])){
                        $c->setNome($_POST['nome']);
                        $c->setEmail($_POST['email']);
                        $c->setTelefone($_POST['telefone']);
                        $c->setGenero($_POST['sexo']);

                        echo "<div class='panel-body'>" . $inMsg . " " . $c->updateCliente($id) . ".</div></div>";
                    }
                ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <i class="indicator icon icon-lock"></i> Editar informações da conta </a> </h4>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <fieldset>
                                <legend>
                                    Informações da conta
                                </legend><?php if($c->isPrestador($id)){ ?>
                                    <!-- Caso o cliente seja prestador, exibe a opções para editar. -->
                                    <form>
                                        <div class="col-md-6">
                                            <div class="form-group"><label>Area</label>
                                                <input value="<?php echo $c->getAreaAtuacao(); ?>" name="area"
                                                       type="text" class="form-control" style="background-color: #FFF">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="<?php echo $c->getTipoConta(); ?>" name="area"
                                                       type="text" class="form-control" style="background-color: #FFF">
                                            </div>
                                        </div>
                                    </form>
                                    <?php

                                }else{ ?>
                                        <!-- Se o cliente não for prestador, exibe a opção de redirecionar para configurações
                                onde ele pode se tornar prestador. -->
                                        <div class="col-md-6">
                                            <label>Você está como cliente!</label>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="<?php echo HOME_URI . '/configuracoes?id=' . $id; ?>"
                                               class="btn btn-success" style="width: 100%; word-wrap: break-word;">
                                                <i class="icon-angle-double-up"></i>&nbsp;&nbsp;Torna-me prestador de serviços</a>
                                        </div>
                                <?php } ?>
                            </fieldset>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <i class="indicator icon icon-info-circle"></i> Editar informações de endereço </a> </h4>
                    </div>

                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <fieldset>
                                <legend>
                                    Informações de endereço
                                </legend>

                                <form method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Estado:</label>
                                        <input value="<?php echo $e->getEstado(); ?>" maxlength="2" name="estado" type="text" class="form-control">
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cidade:</label>
                                        <input value="<?php echo $e->getCidade(); ?>" name="cidade" type="text"
                                               class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bairro:</label>
                                        <input value="<?php echo $e->getBairro(); ?>" name="bairro" type="text"
                                               class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Logradouro:</label>
                                        <input value="<?php echo $e->getLogradouro(); ?>" name="logradouro"
                                               type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Número:</label>
                                        <input value="<?php echo $e->getNumero(); ?>" name="numero" type="text"
                                               class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CEP:</label>
                                        <input value="<?php echo $e->getCep(); ?>" name="cep" type="text"
                                               class="form-control">
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-3 col-md-offset-9" style="margin-top: 5px">
                                            <input type="submit" value="Atualizar" style="width: 100%" onclick="JavaScript:location.reload(true);"
                                                   class="btn btn-primary btn-outline" name="atualizar">
                                        </div>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                </div>
                    <?php
                    if(isset($_POST['atualizar'])){
                        if( empty($_POST['estado'])||
                            empty($_POST['cidade'])||
                            empty($_POST['bairro'])||
                            empty($_POST['logradouro'])||
                            empty($_POST['cep'])||
                            empty($_POST['numero'])){
                                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span></button>
							<strong>" . $c->getNome() . "!</strong> Todos os campos são obrigatórios!</div>";
                        }else{

                            $e->setEstado($_POST['estado']);
                            $e->setCidade($_POST['cidade']);
                            $e->setBairro($_POST['bairro']);
                            $e->setLogradouro($_POST['logradouro']);
                            $e->setCep($_POST['cep']);
                            $e->setNumero($_POST['numero']);

                            echo "<div class='panel-body'>" . $inMsg . " " . $e->update($c->getEndereco()) . ".</div></div>";
                        }
                    }
                    ?>






            </div>
        </div></div>
    </div>
</div>
</div>