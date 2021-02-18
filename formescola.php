<?php
include_once('./escolaBD.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro de Escolas</title>
</head>
<body>

<?php include_once('./navbar.php')?>

<section class="container col-xl-4 estiloEscola">
<div class="title">
  <h2>Realize seu cadastro</h2>
  <hr>
  </div>
<form method="post" action="">
  <div class="form-group">

  <label for="nomeEscola">Nome da escola</label>
    <input type="text" name="nomeEscola" class="form-control" id="nomeEscola" aria-describedby="name" placeholder="Seu nome">
    
    <label for="emailEscola">Endereço de email</label>
    <input type="email" name="emailEscola" class="form-control" id="emailEscola" aria-describedby="emailHelp" placeholder="Seu email">
    
    <label for="passEscola">Senha</label>
    <input type="password" name="senhaEscola" class="form-control" id="escolaPass" placeholder="Crie uma Senha com até 10 caracteres">
 
    <label for="direcaoEscola">Direção</label>
    <input type="text" name="direcao" class="form-control" id="dirEscola" aria-describedby="name" placeholder="Direção da escola">
   
    <label for="endereco">Endereço </label>
    <input type="text" name="enderecoEscola" class="form-control" id="enderecoEscola" aria-describedby="name" placeholder="Escreva aqui o endereço da Escola">
  </div>
  <button type="submit" class="btn btn-outline-warning font-weight-bold">Enviar</button>
</form>
</section>


<?php include_once('./footer.php')?>


</body>
</html>