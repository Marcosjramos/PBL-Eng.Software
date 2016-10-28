<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Homer : Foto de Perfil</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="../_estilo/_padrao/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../_estilo/_padrao/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../_estilo/_padrao/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="../_estilo/_padrao/css/flexslider.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../_estilo/_padrao/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../_estilo/_padrao/css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="../_estilo/_padrao/css/style.css">

    <!-- Estilo Proprio para o input file -->
    <link rel="stylesheet" href="css/component.css">

    <!-- Js padrão do tema Flew -->
    <script src="../_estilo/_padrao/js/modernizr-2.6.2.min.js"></script>
    <script src="../_estilo/_padrao/js/respond.min.js"></script>

    <script type="text/javascript" src="js/jquery.custom-file-input.js"></script>
    <script type="text/javascript" src="js/custom-file-input.js"></script>
    <script type="text/javascript" src="js/jquery-v1.min.js"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.Jcrop.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.Jcrop.css" />
    <script type="text/javascript">
        function getCoords(){
            var api;
            $('#toCrop').Jcrop({
                minSize: [160,160],
                aspectRatio: 1,
                bgOpacity: 0.4,
                addClass: 'jcrop-light',
                onSelect: updateCoords,
                onChange: updateCoords,
                setSelect: [0,0,160,160]
            });
        }

        function updateCoords(c){
            $('#x').val(c.x);
            $('#y').val(c.y);
            $('#w').val(c.w);
            $('#h').val(c.h);
        };

        function _(element){
            if(document.getElementById(element))
                return document.getElementById(element);
            else
                return false;
        }

        function submitForm(){
            if(_('file-1').files[0]){//Se houver um arquivo, faremos alguns testes no mesmo
                var arquivo = _('file-1').files[0];
                if(arquivo.type != 'image/png' && arquivo.type != 'image/jpeg')
                    _('result').innerHTML = "<div class='alert-warning btn'>Por favor, selecione uma imagem do tipo JPEG ou PNG.</div>";
                else if(arquivo.size > 1024 * 2048)//2MB
                    _('result').innerHTML = "<div class='alert-warning btn'>Por favor selecione uma imagem no máximo 2MB de tamanho.</div>";
                else{
                    var x = _('x').value;
                    var y = _('y').value;
                    var w = _('w').value;
                    var h = _('h').value;
                    var formData = new FormData();
                    formData.append('arquivo', arquivo);
                    formData.append('x', x);
                    formData.append('y', y);
                    formData.append('w', w);
                    formData.append('h', h);
                    if(_('imgType')){
                        var imgType = _('imgType').value;
                        formData.append('imgType', imgType);
                    }
                    if(_('imgName')){
                        var imgName = _('imgName').value;
                        var id = "<?php echo $_GET['id']; ?>";
                        formData.append('imgName', imgName);
                        formData.append('imgId', id);
                    }
                    var request  = new XMLHttpRequest();
                    if(_('toCrop'))
                        var includeFile = 'cropFile.php';
                    else
                        var includeFile = 'recebeFile.php';
                    request.open('post', includeFile, true);
                    request.onreadystatechange = function(){
                        if(request.readyState == 4 && request.status == 200)
                            _('result').innerHTML = request.responseText;
                        if(_('toCrop'))
                            _('sendButton').value = 'Recortar';
                    }
                    request.send(formData);
                    _('result').innerHTML = '<img src="loading.gif" />';
                }
            }
            else
                _('result').innerHTML = "<div class='alert-danger btn'>Por favor, selecione uma imagem para ser enviada!</div>";
        }
    </script>
</head>
    <body>

        <header id="fh5co-header" role="banner">
            <div class="container">
                <div class="header-inner">
                    <h1><a href="/projetos/PBL-Eng.Software">Homer</a></h1>
                    <nav role="navigation">
                        <ul>
                            <li><a href="/projetos/PBL-Eng.Software">Início</a></li>
                            <li><a href="services.html">Opção 01</a></li>
                            <li><a href="pricing.html">Opção 02</a></li>
                            <li><a href="quem-somos">Sobre Nós</a></li>
                            <li><a href="configuracoes">Configurações</a></li>
                            <li><a href="contato">Contato</a></li>
                            <li class="cta"><a href="#">Sair</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Linha inferior no menu -->
        <hr style="height:2px; border:none; color:#000; background-color:#22D4C2; margin-top: 0px; margin-bottom: 0px;"/>

        <div style="height: 2em"></div>
        <div class="container">
            <div class="post">
                <fieldset><legend>Selecione uma imagem para seu perfil</legend>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <form>
                                <input type="hidden" id="x" name="x" />
                                <input type="hidden" id="y" name="y" />
                                <input type="hidden" id="w" name="w" />
                                <input type="hidden" id="h" name="h" />
                                <!--<input type="file" id="arquivo" class="btn btn-default" />-->


                                <div class="col-md-12">

                                    <div class="col-md-4">
                                        <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 btn" style="width: 100%;"data-multiple-caption="{count} files selected" multiple />
                                <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Caregar Foto&hellip;</span></label>
                                    </div>











                                    <div class="col-md-4">

                                    <a href="../../inicio?id=12" style="width: 100%;" class="btn btn-default">Pular</a></div>
                                        <div class="col-md-4">
                                    <input onclick="submitForm();" style="width: 100%;" type="button" id="sendButton" value="Enviar" class="btn btn-outline" /></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                        <hr style="height:2px; border:none; color:#000; background-color:#22D4C2; margin-top: 0px; margin-bottom: 0px;"/></div>
                        <div class="col-md-7 text-center">
                            <output id="result" class="control"></output>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </body>
</html>