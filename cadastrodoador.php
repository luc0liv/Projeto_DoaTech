<!--Conexao do banco de dados-->
<?php
include_once('conexaobd.php');
include_once('cadastrodoadorBD.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/faleConosco.css">
    <script defer type="text/javascript" src="./assets/scripts/index.js"></script>
    <title>Contatos</title>
</head>

<body>

    <!-- Inicio do switch -->
    <div class="tema">
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
        </div>
    </div>
    <!--fim do switch-->

    <header>
        <div class="header">
            <div class="logo">
                <a href="comofunciona.php"><img class="logoimg" src="./assets/img/doatech.png"></a>              
            </div>

            <div class="menu">
                <img class="menu-opener" src="./assets/img/menu.png"/>
                <nav>
                    <ul>
                        <li><a href="comofunciona.php">Página inicial</a></li>
    <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastre-se</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="cadastroescola.php">Escola</a>
          <a class="dropdown-item " href="cadastroaluno.php">Aluno</a>
          <a class="dropdown-item " href="cadastrodoador.php">Doador</a>     
        </div>
    </li>
                        <li><a href="faleConosco.php">Fale Conosco</a></li>
                        <li><a class="bg-white" href="index.php">Login</a></li>
                    </ul>
                </nav>
              </div>
          </div>
    </header>


    <main>

        <div class="space">
            <div class="container">
                <section id="formulario" style="height:90%">
                    <form method="post" action="" class="monitorando" >

                    <h4>Nome:</h4>
                    <input type="text" name="nome" id="TextA" placeholder="Seu Nome">

                    <h4>E-Mail:</h4>
                    <input type="email_doador" id="TextA" name="email" placeholder="Ex.:fulando@gmail.com">

                    <h4>Senha:</h4>
                    <input  type="password" id="TextA" name="senha_doador" placeholder="Sua senha">

                    <input style="margin-top:15px;"type="submit" id="botao" value="Cadastrar">

                    </form>
                </section>
                
            </div>
        </div>


    </main>

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