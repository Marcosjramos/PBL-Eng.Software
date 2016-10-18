<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8"/>
    <title> Editar Perfil - Cliente</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
  </head>

  <body>
    <div id="interface">
      <header id="cabecalho">
        <hgroup>
          <h1 class="fontzero">Editar Perfil:</h1>
          <p>
          
          </p>
        </hgroup>
      </header>
        <form method="get"  id="fContato">
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
              <legend>Seu Nome/Sobrenome:</legend>
              <!-- NOME DO USUÁRIO -->
              <label>
                  <input type="text" name="nome" value="" placeholder="Nome:"/>
              </label>

              <!-- SOBRENOME DO USUÁRIO -->
              <label class="right">
                  <input type="text" name="sobrenome" value="" placeholder="Sobrenome:"/>
              </label>
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
            <input type="button" name="botaoEnviar" value="SALVAR" onclick="window.open('perfil_cliente.html', '_parent')"/>
          </p>

        </form>
    </div>
  </body>
</html>
