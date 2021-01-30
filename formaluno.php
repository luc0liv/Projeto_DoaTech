<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro de Alunos</title>
</head>
<body>
<section class="container estiloAluno">
<form method="post" action="">
  <div class="form-group">

  <label for="nomealuno">Nome completo</label>
    <input type="text" name="nome_aluno" class="form-control" id="emaildoador" aria-describedby="name" placeholder="Seu nome">

    <label for="escolaAluno">Escola</label>
    <input type="text" name="aluno_escola" class="form-control" id="escola" aria-describedby="name" placeholder="Nome da sua escola">

    <label for="emailAluno">Endereço de email</label>
    <input type="email" name="email_aluno" class="form-control" id="emaildoador" aria-describedby="emailHelp" placeholder="Seu email">
    
    
    <label for="passAluno">Senha</label>
    <input type="password" name="senha_aluno" class="form-control" id="exampleInputPassword1" placeholder="Crie uma Senha com até 10 caracteres">
 

    <label for="pedido">Pedido</label>
    <input type="text" name="pedido" class="form-control" id="escola" aria-describedby="name" placeholder="Escreva aqui o seu pedido">
  </div>
  
  
  <button type="submit" class="btn btn-outline-warning">Enviar</button>
</form>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>