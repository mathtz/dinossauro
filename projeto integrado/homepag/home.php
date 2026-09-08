<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="CSS/home.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  </head>
  <body>

  <!-- para o header coloque essa linha de codigo abaixo (ou copie do header.php sem o php) -->
<?php include __DIR__ . '/PHP/header.php'; ?>


    <article id="article">
      <div id="sobreposicao">
        
        <div
          id="carousel-principal"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="../homepag/imagens/teste.png"
                id="one_carrosel"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="../homepag/imagens/teste.png"
                id="one_carrosel"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="../homepag/imagens/teste.png"
                id="one_carrosel"
                class="d-block w-100"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carousel-principal"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carousel-principal"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <section>
        <div id="card_container">
          <div class="card" style="width: 18rem;">
            <img id="img_card" src="../homepag/imagens/teste.png" class="card-img-top" alt="...">
            <div  class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img id="img_card" src="../homepag/imagens/teste.png" class="card-img-top" alt="...">
            <div  class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img id="img_card" src="../homepag/imagens/teste.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img id="img_card" src="../homepag/imagens/teste.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
          </div>
        </div>
        <div id="banner_curiosidades">
            <img id="curiosidade_img" src="../homepag/imagens/teste.png" alt="">
            
            <div id="banner_informacao">
            <img id="img_sobreposicao" src="../homepag/imagens/logo_equipamentos.png" alt="">
            <div id="alinhamento_curiosidade">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis consequatur inventore nemo eos eveniet, sint fugiat, laborum perferendis deserunt provident delectus sed, harum optio deleniti aspernatur culpa nihil adipisci cumque.</p>
              <input type="button" value="lorem">
            </div>
          </div>
        </div>

        <div id="carouselCards" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div id="card_carrosel">
      <div class="card" style="width: 18rem;">
        <img id="img_card" src="../imagens/logo_principal.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img id="img_card" src="../homepag/imagens/teste.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img id="img_card" src="../homepag/imagens/teste.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
          </div>
    </div>
    <div class="carousel-item active">
      <div id="card_carrosel">
      <div class="card" style="width: 18rem;">
        <img id="img_card" src="../homepag/imagens/logo_principal.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img id="img_card" src="../homepag/imagens/teste.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img id="img_card" src="../homepag/imagens/teste.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
          </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselCards" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselCards" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </section>

      <section>

        <div id="banner_seguranca">
          <img id="seguranca_img" src="../homepag/imagens/teste.png" alt="">
          <div id="banner_seguinfo">
          <img id="img_sobreposicao" src="../homepag/imagens/logo_equipamentos.png" alt="">
          <div id="alinhamento_curiosidade">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis consequatur inventore nemo eos eveniet, sint fugiat, laborum perferendis deserunt provident delectus sed, harum optio deleniti aspernatur culpa nihil adipisci cumque.</p>
            <input type="button" value="lorem">
          </div>
        </div>
      </div>


      <div id="cards_sobrepostos">
        <img id="img_sobreposto" src="../homepag/imagens/teste.png" alt="">
        <div id="informacao">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deleniti officiis accusantium sed consequuntur sit officia distinctio ea at ipsum recusandae repellat dolorem nam, magnam repudiandae deserunt consectetur, impedit eius?</p>
          <a href="">lorem</a>
        </div>
      </div>

      <div id="cardsdireita_sobrepostos">
        <img id="imgdireita_sobreposto" src="../homepag/imagens/teste.png" alt="">
        <div id="direita_informacao">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deleniti officiis accusantium sed consequuntur sit officia distinctio ea at ipsum recusandae repellat dolorem nam, magnam repudiandae deserunt consectetur, impedit eius?</p>
          <a href="">lorem</a>
        </div>
      </div>
      
      <div id="cards_sobrepostos">
        <img id="img_sobreposto" src="../homepag/imagens/teste.png" alt="">
        <div id="informacao">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deleniti officiis accusantium sed consequuntur sit officia distinctio ea at ipsum recusandae repellat dolorem nam, magnam repudiandae deserunt consectetur, impedit eius?</p>
          <a href="">lorem</a>
        </div>
      </div>

      <div id="cardsdireita_sobrepostos">
        <img id="imgdireita_sobreposto" src="../homepag/imagens/teste.png" alt="">
        <div id="direita_informacao">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deleniti officiis accusantium sed consequuntur sit officia distinctio ea at ipsum recusandae repellat dolorem nam, magnam repudiandae deserunt consectetur, impedit eius?</p>
          <a href="">lorem</a>
        </div>
      </div>
      </section>
    </article>

    <footer id="footer">
      
      <div id="footer_container">
            <div id="footer_logo">
              <a href="home.html"
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
  <script src="JS/home.js"></script>
</html>
