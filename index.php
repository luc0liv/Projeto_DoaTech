<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página inicial</title>
    
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/index.css" type="text/css">
</head>
<body>
    <?php include_once('./navbar.php')?>
    <div class="container">
    <article id="artigo">
    <span>Doatech</span>
    é uma plataforma <b>100% gratuita.</b> <br>
    Nossa principal missão é levar a tecnologia à quem mais precisa.<br>
    </article>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./assets/img/escola.jpg" alt="Primeiro Slide">
      <p class="text-carousel">A escola interessada em tornar-se um ponto de coleta realiza o cadastro na plataforma, desse modo seus alunos podem realizar o cadastro de seus pedidos.</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/escola.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/escola.jpg" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
    </div>
</body>
</html>


