<!--conexão com BD funcionando-->
<?php 
include_once('./faleconoscoBD.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/contato.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Fale Conosco</title>
</head>
<body class="body-cont">


<?php include_once('./navbar.php')?>


<main class="bdy">

<section class="container col-xl-4 mensagens">
<div class="title">
  <h2>Mande-nos uma mensagem</h2>
  <hr>
  </div>
<form method="post" action="">
  <div class="form-group">

  <label for="nomeContato">Nome</label>
    <input type="text" name="nome" class="form-control" id="nomeContato" aria-describedby="name" placeholder="Seu nome">
    
    <label for="emailContato">Endereço de email</label>
    <input type="email" name="email" class="form-control" id="emailContato" aria-describedby="emailHelp" placeholder="Seu email" required>
    
    <label for="msgContato">Mensagem</label>
    <textarea name="mensagem" class="form-control" id="mensagemContato" aria-describedby="msg" placeholder="Escreva aqui sua mensagem" required></textarea>
     <button type="submit" class="btn btn-outline-warning">Enviar</button>
</form>
</section>


</main>


<?php include_once('./footer.php')?>

</body>
</html>
