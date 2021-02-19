<!--Página após o doador escolher o item que vai doar -->
<?php include_once('./doacaobd.php')?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/acess.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Confirme sua doação</title>
</head>
<body>
<?php include_once('./navbar.php')?>

<section class="container col-xl-4  estiloEscola ">
  <div class="title">
  <h2>Confirme sua doação</h2>
  <hr>
  </div>
<form method="post" action="">
  <div class="form-group">

  <label for="doacao">Sua doação</label>
    <input type="text" name="doacao" class="form-control" id="donation" aria-describedby="name" placeholder="Item que você irá doar">

    <label for="descrição">Descrição</label>
    <textarea width= 200px name="descricao" class="form-control" id="description" aria-describedby="name" placeholder="Breve descrição do item doado (Ex: Notebook, Marca Samsung, Preto)"></textarea>

  </div>
  
  <button type="submit" class="btn btn-outline-warning">Enviar</button>
</form>
</section>

<?php include_once('./footer.php')?>
</body>
</html>