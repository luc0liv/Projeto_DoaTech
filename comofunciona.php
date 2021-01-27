<!--Conexao do banco de dados--> 
<?php include_once('conexaobd.php');?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/comoFunciona.css">
    <script defer type="text/javascript" src="./assets/scripts/index.js"></script>
    <title>Como Funciona</title>
</head>
<body >
    <header>
        <div class="header">
            <div class="logo">
                <a href="index.php"><img class="logoimg" src="./assets/img/doatech.png"></a>              
            </div>

            <div class="menu">
                <img class="menu-opener" src="./assets/img/menu.png"/>
                <nav>
                    <ul>
                        <li><a href="index.php">Página inicial</a></li>
                        <li><a href="comofunciona.php">Como Funciona</a></li>
                        <li><a href="faleConosco.php">Fale Conosco</a></li>
                    </ul>
                </nav>
              </div>
          </div>
    </header>

     <!-- Inicio do switch -->
     <div class="tema">
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round" ></div>
            </label>
        </div>
    </div>
    <!--fim do switch-->

    <div class="container">

      <article id="artigo">
          <span>Doatech</span>
          é uma plataforma <b>100% gratuita.</b> <br>
          Nossa principal missão é levar a tecnologia à quem mais precisa.<br>
        
      </article>

          <h2 id="Contitulo">Como funciona?</h2>  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

            <!-- Wrapper for slides -->

              <div class="carousel-inner">

                <div class="item active">
                  <h1 class="carousel_titulo">Escola</h1>
                  
                  <img src="./assets/img/escola.jpg"  alt="escola" style="width:100%;">
                  <div class="carousel-caption d-none d-md-block text-warning">
                  <p class="text-light bg-primary text-left school">A escola interessada em tornar-se um ponto de coleta realiza o cadastro na plataforma, desse modo seus alunos podem realizar o cadastro de seus pedidos.</p>
                  </div>
                </div>

                <div class="item">
                  <h1 class="carousel_titulo">Alunos</h1>
                  
                <img src="./assets/img/siteemconstrucao.jpeg" alt="aluno" style="width:100%;">
 

                </div>

                <div class="item">
                  <h1 class="carousel_titulo">Doadores</h1>
                  <img src="./assets/img/siteemconstrucao.jpeg" alt="doador" style="width:100%;">

                </div>

                <div class="item">
                  <h1 class="carousel_titulo">Doação</h1>
                  <img src="./assets/img/siteemconstrucao.jpeg" alt="doação" style="width:100%;">

                </div>


              </div>
          
      
          <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
      </div>
  </div>


      <!--Inicio do rodapé-->
    <footer>
      <div id="follow">Siga-nos em nossas redes sociais:</div>
      <div class="social">
          <a href="https://www.youtube.com/"><img src="./assets/img/ytb.png" class="iconSocial" alt="youtube"></a>

          <a href="https://twitter.com/home"><img src="./assets/img/twtr.png" class="iconSocial" alt="twitter"></a>

          <a href="https://www.instagram.com"><img src="./assets/img/insta.png" class="iconSocial" alt="insta"></a>

          <a href="https://www.facebook.com"><img src="./assets/img/fbk.png" class="iconSocial" alt="facebook"></a>
      </div>
  </footer>
  <!--Fim do rodapé-->

</body>
</html>