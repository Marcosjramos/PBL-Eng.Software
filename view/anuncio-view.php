<<<<<<< HEAD
<?php
/**
 * Created by PhpStorm.
 * User: Gilvanei
 * Date: 27/10/2016
 * Time: 10:41
 */
=======
<div class="animate-box">
    <div class="container">
        <div class="post">
            <div class="col-md-10 col-md-push-1 animate-box">
                <div style="height: 2em"></div>
                <h2 >Anúncios</h2>

            </div>

            <div class="col-md-10 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">

                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <strong>Observação:</strong> Os anúncios apareceram somente nos resultados de buscas dos
                nossos clientes. No entanto eles terão prioridade na ordem de exibição.
                </div>

                <form method="post"  id="fServico">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <select class="form-control" name="prof">
                                    <option id="" disabled selected>Sua profissão...</option>
                                    <option id="">Predeiro</option>
                                    <option id="">Carpideiro</option>
                                    <option id="">Encanador</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input class="form-control" placeholder="Título..." type="text" name="tTitulo" id="cTitulo" size="30" maxlength="40">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div style="height: .3em"></div>
                            <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 btn" style="width: 100%;"data-multiple-caption="{count} files selected" multiple />
                            <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Imagem &hellip;&nbsp;&nbsp;&nbsp;&nbsp;</span></label>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="tDescricao" class="form-control" id="cDescricao" cols="30" rows="4" placeholder="Descrição do Serviço"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input value="Publicar Anúncio" class="btn btn-primary" type="submit" name="enviar">
                            </div><!-- Fim da div Group do botão enviar -->
                        </div><!-- Fim da div/class col-md-12 -->
                    </div><!-- Fim da div/class row -->
                </form><!-- Fim do form -->
            </div><!-- Fim da div Group geral do form -->
        </div>
    </div>
</div>

<?php if(isset($_POST['enviar'])){
    if(empty($_POST['prof'])){
        echo 'O campo profissão é obrigatório';
    }elseif ($_POST['tTitulo']){
        echo 'Um título é obrigatório';
    }else{
        require_once (PATH.'/model/AnuncioModel.class.php');
        $anuncio = new Anuncio();
        $anuncio->setIdCliente($_GET['id']);
        $anuncio->setTitulo($_POST['cTitulo']);
        $anuncio->setDescricao($_POST['']);

        $anuncio->criarAnuncio();
    }
}
>>>>>>> e3ea24ce5e0f27d80530c8af39350454741fd47e
