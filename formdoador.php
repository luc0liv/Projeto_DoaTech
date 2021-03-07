<!--Conexão com o BD funcionando-->
<?php
include_once('./doadorBD.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro Doador</title>
</head>
<body>
<?php include_once('./navbar.php')?>

<section class="container col-xl-4  estiloDoador ">
  <div class="title2">
  <h2>Realize seu cadastro</h2>
  <hr>
  </div>
<form method="post" action="">
  <div class="form-group">

  <label for="nomedoador">Nome completo</label>
    <input type="text" name="nomeDoador" class="form-control" id="emaildoador" aria-describedby="name" placeholder="Seu nome" required>

    <label for="emaildoador">Endereço de email</label>
    <input type="email" name="emailDoador" class="form-control" id="emaildoador" aria-describedby="emailHelp" placeholder="Seu email" required>
    
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senhaDoador" class="form-control" id="exampleInputPassword1" placeholder="Crie uma Senha com até 10 caracteres" required>
  </div>
  
  <button type="submit" class="btn btn-outline-info font-weight-bold">Enviar</button>
</form>
</section>


<?php include_once('./footer.php')?>

</body>
</html>