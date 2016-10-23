   <!DOCTYPE html>

      <html lang="pt-br">

      <head>

          <meta charset="UTF-8"/>
          
          <title> Gerenciamento de Deúncias</title>

          <link rel="stylesheet" type="text/css" href="_css/style.css"/>

      </head>

       <body>

           <div id="interface-2">

                <header id="cab-gerD">

                  <hgroup> 

                   <h1> Denuncias </h1>

                 </hgroup>

                <p> </p> <br>

            </header>

             
                <fieldset id="opcao">

               <input type="radio" name="opc" id="DMais" checked><label for="DMais">Denuncia mais recentes </label> 

               <input type="radio" name="opc" id="DAnt"><label for="DAnt">Denuncia mais antigas</label>

               <input type="radio" name="opc" id="DArq" ><label for="DArq">Denuncia arquivadas</label>

               <input type="submit" name="Pesquisar"  value="Pesquisar">

               </fieldset>

               <div id="exib">

               Aqui  vai exibir  a demuncia  quem denunciou  e  que   foi acusado
               ex:<br><a href=" denuncia.html">Desrespeitos com o cliente</a>(<a href="Maria.html">Maria</a>)(<a href="João.html">João</a>) <input type="submit" name="arquivar"  value="arquivar"> <input type="submit" name="apagar"  value="apagar">


            </div>
            <br><a href="tela-admin.php"> voltar</a>


      </body>

      </html>