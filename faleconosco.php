<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro de Escolas</title>
</head>
<body>


<?php include_once('./navbar.php')?>


<main>

<section class="container col-xl-4 mensagens">
<form method="post" action="">
  <div class="form-group">

  <label for="nomeContato">Nome</label>
    <input type="text" name="nome_contato" class="form-control" id="nomeContato" aria-describedby="name" placeholder="Seu nome">
    
    <label for="emailContato">Endereço de email</label>
    <input type="email" name="email_contato" class="form-control" id="emailContato" aria-describedby="emailHelp" placeholder="Seu email">
    
    <label for="msgContato">Mensagem</label>
    <textarea name="mensagem" class="form-control" id="mensagemContato" aria-describedby="msg" placeholder="Escreva aqui sua mensagem"></textarea>
     <button type="submit" class="btn btn-outline-warning">Enviar</button>
</form>
</section>


</main>


<?php include_once('./footer.php')?>

</body>
</html>