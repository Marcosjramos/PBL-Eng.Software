<!DOCTYPE html>

    <html lang="pt-br">
     
	    <head>

	      <meta charset="UTF-8"/>

	      <title> Fale conosco </title>

	      <link rel="stylesheet" type="text/css" href="_css/style-cont-quem.css"/>

        </head>
        <body>

        <div id="interface">

           <header id="cabecalho">

            <hgroup>

              <h1> Fale conosco </h1>

               <p>Tem dúvidas sobre como utilizar o serviço, sugestões ou reclamação? <br/> Deixe uma mensagem abaixo que nossa equipe de suporte entrará <br/>em contato o mais rápido possível.
               </p> 

             </hgroup>

             </header>
           <form method="get"  id="fContato">

           <h2><label for="thelp"> No que podemos ajudar-lo? </label></h2>
              <p> Por qual motivo  de está entrando em contado conosco?</p>

              <p><select name="help" id="thelp" >
                  <option value="TD" selected> Tenho uma Dúvida</option>
                  <option value="TS"> Tenho Sugestões</option>
                  <option value="PS"> Preciso de Suporte</option>
                  <option value="TR"> Tenho uma Reclamação</option>
                </select></p>

             <h2><label for="cNomeCom"> Nome completo</label> </h2>
             <p>insira seu nome completo</p>
             <p> <input type="text" name="tNomeCom" id="cNomeCom" size="30" maxlength="40" placeholder="Nome completo" /></p>

              <h2><label for="cMail"> E-mail</label> </h2>
             <p>o e-mail que entraremos encontato</p>
             <p><input type="e-mail" name="tMail" id="cMail" size="30" maxlength="40" placeholder="Digite  seu e-mail" /></p>


             <h2><label for="msn"> Mensagem </label></h2>
             <p>escreva sua menagem</p>
             <p><textarea name="tmsn" id="msn" cols="60" rows="10" placeholder="Deixe aqui o que precisa de nossa ajuda "></textarea></p>

             <p><br><input type="image" name="tEnviar" src="_imagens/botao-enviar.png" /></p>

           </form>

    	 </div>

    	 <div class="col-md-3">
                <ul class="contact-info">
                    <li><i class="icon-map"></i>Av. Transnordestina - UEFS, Feira de Santana-BA</li>
                    <li><i class="icon-phone"></i>075 3161-8000</li>
                    <li><i class="icon-envelope"></i><a href="#">contato@ecomp.uefs.br</a></li>
                    <li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
                </ul>
                </div>
            </div>
        </body>
   </html>