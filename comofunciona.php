<!--Conexao do banco de dados--> 
<?php include_once('conexaobd.php');?> 
php
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
    <title>Como Funciona</title>
</head>
<body class="gradiente">
    <header>
        <div class="header">
            <div class="logo">
                <a href="index.php"><img class="logoimg" src="./assets/img/Asset 1.png"></a>              
            </div>

            <div class="menu">
                <img class="menu-opener" src="./assets/img/menu.png"/>
                <nav>
                    <ul>
                        <li><a href="index.php">Página inicial</a></li>
                        <li><a href="comoFunciona.php">Como Funciona</a></li>
                        <li><a href="faleConosco.php">Fale Conosco</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="container">

      <article id="artigo">
        <span>Bora Estudar</span>
        é uma plataforma de monitorias <b>100% gratuita.</b> <br>
        Nossa principal missão é levar o conhecimento à quem mais precisa.<br>
        O que nos move é a vontade de ver todos crescendo com as mesmas oportunidades.<br>
        Foi criada pensando em alunos que não podem arcar com os custos de monitorias particulares.<br>
        Os nossos monitores são alunos do ensino superior em busca de experiência profissional.<br>
        É um espaço para troca de conhecimento!
      </article>

        <h2 id="Contitulo">Algumas de nossas modalidades:</h2>  
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
               <h1 class="carousel_titulo">Legislação</h1>
               <img src="./assets/img/legislacao.png"  alt="Legislação" style="width:100%;">
              <span>Imagem de <a href="https://pixabay.com/pt/users/artsybeekids-392631/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5665879">Venita Oberholster</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5665879">Pixabay</a></span>
            </div>

            <div class="item">
              <h1 class="carousel_titulo">Assistência em trabalhos escolares</h1>
              <img src="./assets/img/deverdecasa.jpg" alt="Dever de casa" style="width:100%;">
              <span>Imagem de <a href="https://pixabay.com/pt/users/tjevans-5937713/">TJ Evans</a> por <a href="https://pixabay.com/pt/photos/lição-de-casa-escola-problema-2521144/">Pixabay</a></span>
            </div>

            <div class="item">
              <h1 class="carousel_titulo">Empreendedorismo</h1>
              <img src="./assets/img/Empreendedorismo.png" alt="Empreendedorismo" style="width:100%;">
              <span>Imagem de <a href="https://pixabay.com/pt/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3189797">Gerd Altmann</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3189797">Pixabay</a></span>
            </div>
          
            <div class="item">
              <h1 class="carousel_titulo">Informática e Tecnologia</h1>
              <img src="./assets/img/Informática_e_Tecnologia.jpg" alt="Informática e Tecnologia" style="width:100%;">
              <span>Imagem de <a href="https://pixabay.com/pt/users/joffi-1229850/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1685092">joffi</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1685092">Pixabay</a></span>
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