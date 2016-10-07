<!DOCTYPE html>

<html lang="pt-br">

  <head>
    <meta charset="UTF-8"/>
    <title> Editar Perfil - Prestador</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
  </head>

  <body>
    <!-- CONECTAR COM O BANCO DE DADOS E PEGAR AS INFORMAÇÕES DO USUÁRIO -->
    <!-- *************************************************************** -->
    <?php

    require('../_DAO/CRUD/Config.inc.php');
    echo "DEBUGANDO:";
    $read = new Read;
    $read->ExeRead('homer', 'WHERE nome = :nome AND cpf = :cpf LIMIT :limit', "nome=Homer Primeiro&cpf=00000000000&limit=1");

    if ($read->getNumRegistros() == 1):
      var_dump($read->getResultado()); //DEBUGANDO!!
      $array = $read->getResultado();
      //extract($array);
      $id = $array[0]['nome'];
      $idUsuario = $array[0]['idUsuario'];
      $nome = $array[0]['nome'];
      $cpf = $array[0]['cpf'];
      $telefone = $array[0]['telefone'];

      echo "id = " . $id;
      echo " idUsuario = " . $idUsuario;
      echo " Nome = " . $nome;
      echo " cpf = " . $cpf;
      echo " telefone = " . $telefone;
      echo '<hr>';
    endif;
    ?>
    <!-- *************************************************************** -->

    <div id="interface">
      <header id="cabecalho">
        <hgroup>
          <h1 class="fontzero">Editar Perfil:</h1>
          <p>
          Edite seus dados cadastrais no sistema.
          </p>
        </hgroup>
      </header>

      <form method="post"  id="fContato">
        <article>                    
              
          <!-- FOTO DO USUÁRIO -->
          <h2>
            <legend>Alterar Foto:</legend>
            <div class="dashboard-avatar-avatar">
              <img title="Nome Sobrenome" alt="Nome Sobrenome" src="_imagens/foto_perfil.png">
              <br>
              <input type="file" accept="image/*" name="fotoPerfil"></input>
            </div>
          </h2>
                
          <h2>
            <legend>Seu Nome:
              <!-- NOME DO USUÁRIO -->
              <label>
                  <input type="text" name="nome" value="<?php echo $nome;?>" placeholder="Nome:"/>
              </label>
            </legend>
          </h2>

          <!-- CPF DO USUÁRIO -->
          <h2><legend>CPF:
            <label>
              <input type="text" name="cpf" disabled value="" placeholder="CPF:"/>
            </label>
          </legend></h2>

          <!-- SEXO DO USUÁRIO -->
          <h2><legend>Sexo:
            <label><input type="radio" name="sexo"  value="f"> Feminino</label>
            <label><input type="radio" name="sexo" checked value="m"> Masculino</label>
          </legend></h2>

          <!-- DATA DE NASCIMENTO DO USUÁRIO -->
          <h2><legend>Data de Nascimento:
            <label>
                <input type="text" name="nascimento" value="" placeholder="Nascimento:"/>
            </label>
          </legend></h2>

          <!-- E-MAIL DO USUÁRIO -->
          <h2><legend>E-mail:
            <label>
                <input type="email" name="email"  value="" placeholder="E-mail: nome@exemplo.com.br"/>
            </label>
          </legend></h2>

          <!-- TELEFONE DO USUÁRIO -->
          <h2><legend>Telefones:                
            <label>
                <input type="text"  name="telefone" value="" placeholder="Telefone:"/>
            </label>

            <!-- CELULAR DO USUÁRIO -->
            <label class="right">
                <input type="text" name="celular" value="" placeholder="Celular:"/>
            </label>    
          </legend></h2>

          <!-- LINK DO FACEBOOK DO USUÁRIO -->
          <h2><legend>Link do Facebook: 
            <label class="right">
                <input type="text" name="facebookLink" value="" placeholder="Link do seu Facebook:"/>
            </label>  
          </legend></h2>

          <!-- ENDEREÇO DO USUÁRIO -->  
          <h2><legend>Meu Endereço:
            <br>
            <label>
                <input type="text" name="cep" value="" placeholder="Cep:"/>
            </label>

            <label class="right">
                <input type="text"  name="rua" value="" placeholder="Nome da Rua:"/>
            </label>

            <label>
                <input type="text" name="alunoNumero" value="" placeholder="Número:"/>
            </label>

            <label class="right">
                <input type="text" name="complemento" value="" placeholder="Complemento:"/>
            </label>

            <label>
                <input type="text"  name="bairro" value="" placeholder="Bairro:"/>
            </label>

            <label class="right">
                <input type="text" list="cidades" name="cidade" value="" placeholder="Cidade:"/>
            </label>

            <label>
                <input type="text" list="estados" name="uf" value="" placeholder="UF do Estado:"/>
            </label> 
          </legend></h2>

          <!-- ALTERAR ÁREA DE ATUAÇÃO -->
          <h2><legend>Alterar Área de Atuação:</legend> </h2>
          <p>
            <form action="">
              <input type="checkbox" name="pedreido" value="1P" checked> Pedreiro 
              <input type="checkbox" name="jardineiro" value="1J"> Jardineiro<br>
              <input type="checkbox" name="pintor" value="2P" checked> Pintor 
              <input type="checkbox" name="encanador" value="1E"> Encanador<br>
              <input type="checkbox" name="fazineiro" value="1F"> Faxineiro 
              <input type="checkbox" name="cozinheiro" value="1C"> Cozinheiro<br>
              <input type="checkbox" name="carpinteiro" value="2C"> Carpinteiro 
              <input type="checkbox" name="lavandeira" value="1L" checked> Lavandeira<br>
              <input type="checkbox" name="baba" value="1B"> Babá <br>
              <input type="checkbox" name="outros" value="OT"> Outros (informar)

              <input type="text" name="OutrosArea" value="" placeholder="Informar Área"/>
            </form>
          </p>
          
          <!-- ALTERAR SENHA -->
          <h2><legend>Alterar Minha Senha:</legend> 
          <label>
              <input type="password" name="senha" value="" placeholder="Nova Senha:"/>
          </label>

          <br>

          <label class="right">
              <input type="password" name="confirmarSenha" value="" placeholder="Confirmar Nova Senha:"/>
          </label></h2>

        </article>

        <br>

        <!-- BOTÃO SALVAR ALTERAÇÕES -->
        <p>
          <input type="button" name="botaoEnviar" value="SALVAR" onclick="window.open('perfil_prestador.html', '_parent')"/>
        </p>

      </form>
    </div>

  </body>
</html>