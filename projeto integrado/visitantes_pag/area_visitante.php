<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../visitantes_pag/CSS/visitante.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
    
  <?php include __DIR__ . '/../homepag/PHP/header.php'; ?>

    <article>
      <div id="container_article">
        <aside>
          <h2>Áreas dos visitantes</h2>
          <div id="container_aside">
            <button class="bnt_selecao" type="button" data-area="1">
              <h3>lorem</h3>
            </button>
            <button class="bnt_selecao" type="button" data-area="2">
              <h3>lorem</h3>
            </button>
            <button class="bnt_selecao" type="button" data-area="3">
              <h3>lorem</h3>
            </button>
            <button class="bnt_selecao" type="button" data-area="4">
              <h3>lorem</h3>
            </button>
            <button class="bnt_selecao" type="button" data-area="5">
              <h3>lorem</h3>
            </button>
          </div>
        </aside>
        <div id="container_informacao">
          <img id="img_informacao" src="../homepag/imagens/teste.png" alt="" />
          <div id="alinhamento_informacao">
            <h1 id="titulo">lorem</h1>
            <p id="descricao_area">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et iste
              eius eaque distinctio at. Excepturi nostrum, molestias quisquam,
              quibusdam hic autem ipsum repudiandae vel corporis assumenda,
              quidem sunt unde aliquam!
            </p>
            <div id="tipo_informacao">
              <h5 id="info1">lorem</h5>
              <h5 id="info2">lorem</h5>
              <h5 id="info3">lorem</h5>
              <h5 id="info4">lorem</h5>
            </div>
          </div>
        </div>
      </div>
    </article>

    <footer id="footer">
      <div id="footer_container">
        <div id="footer_logo">
          <a href="../homepag/home.html"
            ><img src="../homepag/imagens/logo_principal.png" id="logo" alt=""
          /></a>
        </div>
        <h1 id="titulo_footer">Primeval Adventure Park</h1>
        <div id="icones">
          <a href=""><i class="bi bi-github"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-youtube"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>

      <div id="footer_info">
        <div id="footer_links">
          <h2>lorem</h2>
          <h5>
            <a href="">lorem</a>
            <a href="">lorem</a>
            <a href="">lorem</a>
          </h5>
        </div>

        <div id="footer_links">
          <h2>lorem</h2>
          <h5>
            <a href="">lorem</a>
            <a href="">lorem</a>
            <a href="">lorem</a>
            <a href="">lorem</a>
          </h5>
        </div>

        <div id="footer_links">
          <h2>lorem</h2>
          <h5>
            <a href="">lorem</a>
            <a href="">lorem</a>
            <a href="">lorem</a>
          </h5>
        </div>
      </div>
    </footer>
  </body>
  <script src="../visitantes_pag/JS/visitantes.js"></script>
</html>
