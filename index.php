<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    
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
      <img class="d-block w-100 posicao" src="./assets/img/escola.jpg" alt="Primeiro Slide">
      <figcaption class="text-carousel">A <b>escola interessada em tornar-se um ponto de coleta</b> realiza o cadastro na plataforma, desse modo seus alunos e alunas podem realizar o cadastro de seus pedidos.</figcaption>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100 posicao" src="./assets/img/estudantes.png" alt="Segundo Slide">
      <p class="text-carousel">  Estudantes que <b>precisam de um item (um notebook, por exemplo)</b> fazem o <b>cadastro de seus pedidos</b> na plataforma e <b>informam de qual item precisam</b> e o nome da escola em que estudam.</p>
      <a href='https://br.freepik.com/vetores/escola'>Escola vetor criado por pikisuperstar - br.freepik.com</a>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100  posicao" src="./assets/img/meninocomnote.png" alt="Terceiro Slide">
      <p class="text-carousel">A <b>pessoa doadora se cadastra e encontra dentro da lista de pedidos algo que pode doar.</b> Seleciona o pedido de um estudante e <b>leva o item até a escola para a entrega.</b> <br> O aluno que fez o pedido é notificado da doação e <b>busca o aparelho em sua escola</b>.</p>
      <a href='https://br.freepik.com/fotos/escola'>Escola foto criado por jcomp - br.freepik.com</a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
    </div>

    <?php include_once('./footer.php')?>
</body>
</html>


