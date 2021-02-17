<!--Página de acesso da Escola -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/acess.css" type="text/css">
    <title>Bem-vinde</title>
</head>
<body>
<?php include_once('./navbar.php')?>
<div class="logout">
<?php /*

if(isset($_SESSION['nome'])){
    echo '<h2>Bem-vindo ' . $_SESSION['nome'] . " - escola" . '</h2>';
}
echo '<a href="?logout" class="logout">Fazer Logout!</a>';*/

?></div>
<main class="escolaPedidos">
<section class="container col-xl-4 infos">
  <small>Algumas dicas...</small>
  <h3>Certifique-se de que o aluno realmente necessita do item solicitado.</h3>
  <h3>Os pedidos são atendidos de acordo com a disponibilidade dos doadores. </h3>
  <h3>Confira erros de digitação antes de clicar em "Enviar".</h3>
  
</section>
<section class="container col-xl-4  formPedido">
  <div class="title">
  <h2>Qual o pedido do seu aluno?</h2>
  <hr>
  </div>
<form method="post" action="">
  <div class="form-group">

  <label for="pedido">Pedido do aluno</label>
    <input type="text" name="pedido" class="form-control" id="pedido" aria-describedby="pedidoAluno" placeholder="Escreva aqui o pedido do estudante (Exemplo: Um notebook)">

    <label for="adress">Endereço da escola</label>
    <input type="text" name="endereco" class="form-control" id="adress" aria-describedby="enderecoEscola" placeholder="Escreva aqui o endereço da escola que receberá o pedido">
    
    
  
  <button type="submit" class="btn btn-outline-warning">Enviar</button>
</form>
</section>

</main>
<?php include_once('./footer.php')?>
</body>
</html>