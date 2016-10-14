    <div id="interface">
      <header id="cabecalho">
        <hgroup>
          <h1 class="fontzero">Bem vindo, Nome!</h1>
          <p>
          
          </p>
        </hgroup>
      </header>
        <form method="get"  id="fContato">
          <article>                    
            <!-- FOTO DO USUÁRIO -->
            <h3>
              <div class="dashboard-avatar-perfil">
                <img title="Nome Sobrenome" alt="Nome Sobrenome" src="_imagens/foto_perfil.png">
                
                <br>
                <!-- NOME DO USUÁRIO (COMO UMA VARIÁVEL) -->
                <legend>Nome</legend>
                <legend>Avaliações</legend>
              </div>
            </h3>


            <h3>
              <!-- BOTÕES: -->
              <input type="button" name="botaoNotificacao" value="Notificações" onclick="window.open('notificacao.html', '_parent')"><br/>
              <input type="button" name="botaoCriarAnuncios" value="Criar Anúncios" onclick="window.open('criar_anuncio.html', '_parent')"><br/>
              <input type="button" name="botaoPublicar" value="Publicar Serviços" onclick="window.open('publicar.html', '_parent')"><br/>
              <input type="button" name="botaoHistórico" value="Histórico" onclick="window.open('historico.html', '_parent')"><br/>
              <input type="button" name="botaoFavoritos" value="Favoritos" onclick="window.open('favoritos.html', '_parent')"><br/>
            </h3>

            <h2>
              <fieldset>
                <legend>Fotos de Serviços</legend>
                <div class="dashboard-avatar-perfil">
                  <img title="Nome Sobrenome" alt="Nome Sobrenome" src="_imagens/foto_perfil.png">
                  <img title="Nome Sobrenome" alt="Nome Sobrenome" src="_imagens/foto_perfil.png">
                </div>
              </fieldset>
            </h2>

            <h2>
              <fieldset>
                <legend>Mural de anúncios</legend>
              </fieldset>
            </h2>

            <h2>
              <fieldset>
                <legend>Comentários</legend>
              </fieldset>
            </h2>

          </article>
        </form>