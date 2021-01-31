<!--Essa é a página que o doador tem acesso após o Login, 
aqui ficam os pedidos dos alunos para que o doador escolha aquilo que vai doar.-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/acess.css" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pedidos dos alunos</title>
</head>
<body>
<?php include_once('./navbar.php')?>

<main>
<div class="intro"><h4>Pedidos dos alunos</h4></div>

<section class="container">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start shadow border border-primary">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Item pedido</h5>
      <small>3 dias atrás</small>
    </div>
    <p class="mb-1">Nome da escola e endereço</small>
  </a>
  
</div>
</section>

</main>

<?php include_once('./footer.php')?>


</body>
</html>