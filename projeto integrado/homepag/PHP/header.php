<?php session_start();
  $estaLogado = isset($_SESSION['usuario_nome']);
  $nomeUsuario = $estaLogado ? $_SESSION['usuario_nome'] : '';
  $primeiraLetra = $estaLogado ? strtoupper(substr($nomeUsuario, 0, 1)) : '';
   ?>

      <header id="header">
        <img id="header_sobreposto" src="../imagens/teste.png" alt="">
        <div id="informacao_sobreposto">
        <div id="div_header">
          <div id="titulo_container">
            <div id="logo_container">
              <a href="../homepag/home.html"
                ><img src="../homepag/imagens/logo_principal.png" id="logo" alt=""
              /></a>
            </div>
            <h1>Primeval Adventure Park</h1>
          </div>
          <div id="formulario">
            <div id="campo_busca">
              <input type="search" name="" id="" placeholder="Pesquisar..." />
              <input type="button" value="Lorem" />
            </div>
            
            <?php if($estaLogado): ?>
    
              <div class="user-bagde">
                <div class="avatar-letra"><?php echo $primeiraLetra; ?></div>
                <span class="user-name"> <?php echo htmlspecialchars($nomeUsuario);?> </span>
                <a href="/projeto integrado/homepag/PHP/logout.php" class="bnt-sair">Sair</a>
              </div>
              <?php else:  ?>
                <input type="button" id="bnt_login" data-bs-toggle="modal" data-bs-target="#meuModalBootstrap" value = "Cadastrar" />
                <?php endif; ?>
          </div>
        </div>

        <!-- area do usuario -->

        <nav id="nav">
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
          <button id="bnt_nav"><a href="">lorem</a></button>
        </nav>
</div>
      </header>

      <div class="modal fade" id="meuModalBootstrap" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="" id="form_cadastro">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Criar Conta</h5>
                <button type="button" class="bnt-close" data-bs-dismiss="modal" arial-label="Close"></button>
              </div>
              
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">Nome Completo</label>
                  <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">E-mail</label>
                  <input type="email" name="nome" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Senha</label>
                  <input type="password" name="nome" class="form-control" required>
                </div>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
              </div>
              
            </form>

          </div>
        </div>
      </div>