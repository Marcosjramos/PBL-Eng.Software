<div class="animate-box">
    <div class="container">
        <div class="post">

            <fieldset>
                <div class="col-md-12">
                    <legend>Informações do Usuário</legend>
                    <div class="col-md-10">

                <h2>Usuário</h2>
                <h6>Prestador de Serviços >> Conta Grátis</h6>
                        </div>
                    <div class="col-md-2">
                <label>
                    <a class="btn btn-primary" href="cadastro" style="width: 100%;"><i class="icon icon-edit"></i>Editar Perfil</a>
                </label>
                        </div>
                </div>
            </fieldset>


            <fieldset>
                <div class="col-md-12">

                <legend>Informações da Conta</legend>

                    <script>
                        function habilitacao(){
                            if(document.getElementById('iPed').checked == true){
                                document.getElementById('tipoConta').disabled = ""
                                document.getElementById('area').disabled = ""
                            }
                            if(document.getElementById('iPed').checked == false){
                                document.getElementById('tipoConta').disabled = "disabled"
                                document.getElementById('area').disabled = "disabled"
                            }
                        }
                    </script>

                    <label for="iPed" class="control control--checkbox">
                        <input type="checkbox" value="None" name="nPed" id="iPed"  onClick="habilitacao()" checked/>
                        <div class="control__indicator"></div>
                        Deseja oferecer seus serviços?
                    </label>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipoConta">Tipo de conta.</label>
                            <select name="tipoConta" id="tipoConta" class="form-control" disabled>
                                <option value="" class="form-control">Gratis</option>
                                <option value="">Profissional</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                <label for="area">Profissão que pretende atuar.</label>
                <select name="" class="form-control" id="area" disabled>
                    <option value="">Predeiro</option>
                    <option value="">Carpinteiro</option>
                    <option value="">Encanador</option>
                    <option value="">Eletricista</option>
                </select>
                        </div>
                </div>
                    </div>
                <div class="col-md-12">
                 <a class="btn btn-facebook"><i class="glyphicon glyphicon-menu-right"> </i> Pagar Assinatura</a>
                </div>
                    </div>
            </fieldset>
        </div>
    </div>
</div>