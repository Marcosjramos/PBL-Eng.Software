   <!DOCTYPE html>

      <html lang="pt-br">

      <head>

          <meta charset="UTF-8"/>
          
          <title> Gerenciemento de progranda </title>

          <link rel="stylesheet" type="text/css" href="_css/style.css"/>

      </head>

       <body>

           <div id="interface-2">

                <header id="cab-gerPro">

                  <hgroup> 

                   <h1>  Gerenciamento de  Propaganda  </h1>

                  <h1>  </h1>

                 </hgroup>

                <p> </p> <br>

            </header>

             <fieldset id="opcao"><legend>Inserir propaganda</legend>

               <p><label for="cNome">Nome da empresa</label> <input type="text" name="TNome" id="cNome" size="20" maxlength="30" placeholder="Nome da empresa "> </p>

                <fieldset><legend>Endereço</legend>

                <p> <label for="clog">logradouro </label><input type="text" name="Tlog" id="clog" size="20" maxlength="30" placeholder="Logradouro">  </p>

                <p><label for="cnum"> Número </label> <input type="number" name="tnum" id="cnum" min="0" max="9999"></p>

                <p><label for="cBairro"> Bairro </label> <input type="text" name="Tbairro" id="cBairro" size="20" maxlength="30" placeholder="Bairro "></p>

                <p><label for="cEstado"> Estado<label><input type="text" name="TEstado" id="cEstado" size="20" maxlength="30" placeholder="Estado "> </p>

                <p><label for="ccep"> CEP </label>  <input type="text" name="Tcep" id="ccep" size="20" maxlength="30" placeholder="CEP"> </p>

                </fieldset>

                <p><label for="cCnpj">CNPJ </label> <input type="text" name="Tcnpj" id="cCnpj" size="20" maxlength="30" placeholder="CNPJ "> </p>

                <p><label for="cnome-pr"> Nome da propaganda </label> <input type="text" name="Tnome-pr" id="cnome-pr" size="20" maxlength="30" placeholder="Nome da propaganda "></p>

                <p><label for="cdata">Valido até </label> <input type="date" name="tdata" id="cdata"></p>

                <input type="submit" value="Cadastrar" name="Cadastrar">

                <input type="submit" value="Pesquisar" name="Pesquisar">

               </fieldset>

               <fieldset id="opcao2"><legend>Remover propaganda</legend>

               <p><label for="cNome"> Nome da empresa </label><input type="text" name="TNome" id="cNome" size="20" maxlength="30" placeholder="Nome da empresa ">  </p>

               <p><label for="cnome-pr">Nome da propaganda </label> <input type="text" name="Tnome-pr" id="cnome-pr" size="20" maxlength="30" placeholder="Nome da propaganda "> </p>

               <p> <label for="cCnpj">CNPJ  </label><input type="text" name="Tcnpj" id="cCnpj" size="20" maxlength="30" placeholder="CNPJ "></p>

               <input type="submit" value="Remover" name="Remover">

               <input type="submit" value="Pesquisar" name="Pesquisar">

               </fieldset>

               <fieldset id="opcao3"><legend>Suspender Propaganda </legend>

               <p> <label for="cNome"> Nome da empresa </label> <input type="text" name="TNome" id="cNome" size="20" maxlength="30" placeholder="Nome da empresa "> </p>

               <p><label for="cnome-pr">Nome da propaganda </label> <input type="text" name="Tnome-pr" id="cnome-pr" size="20" maxlength="30" placeholder="Nome da propaganda "> </p>

               <p><label for="cCnpj"> CNPJ </label> <input type="text" name="Tcnpj" id="cCnpj" size="20" maxlength="30" placeholder="CNPJ "> </p>
                 
               <p><label>Motivo </label> <textarea name="tMsn" id="CMsn" cols="30" rows="5"> </textarea></p>

               <input type="submit" value="Suspender" name="Suspender">

               <input type="submit" value="Pesquisar" name="Pesquisar">

               </fieldset>

                <br><a href="tela-admin.php">Voltar</a>

            </div>


      </body>

      </html>