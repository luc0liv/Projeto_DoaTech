<!--Conexao do banco de dados--> 
<?php 
include_once('conexaobd.php');
include_once('cadastroalunobd.php');
?> 

<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/nav.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/faleConosco.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/forms.css">
        <script defer type="text/javascript" src="./assets/scripts/index.js"></script>
        <title>Cadastro de aluno</title>
    </head>
    <body>
	
    <header>
    <?php include_once('nav.php');?>
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




<main>

<div class="space">
            <div class="container">
                <section id="formAluno" style="height:100%">
                    <form method="post" action="" class="monitorando" >

                    <h4>Nome:</h4>
                    <input type="text" name="nomealuno" id="TextA" placeholder="Seu Nome">

                    <h4>Escola:</h4>
                    <input type="text" name="aluno_escola" id="TextA" placeholder="O nome da sua escola">       

                    <h4>E-Mail:</h4>
                    <input type="email" id="TextA" name="email_aluno" placeholder="Ex.:fulando@gmail.com">

                    <h4>Senha:</h4>
                    <input  type="password" id="TextA" name="senha_aluno" placeholder="Sua senha"> 

                    <h4>Escreva aqui o seu pedido:</h4>
                    <input type="text" name="pedido" id="TextA" placeholder="Do que você precisa?">

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
    