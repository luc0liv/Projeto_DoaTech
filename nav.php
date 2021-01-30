
<?php?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./nav.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg backg">
  <a class="navbar-brand" href="comofunciona.php"><img src="./assets/img/doatech.png" width="120" height="40"></a>
  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item links">
        <a class="nav-link text-white" href="comofunciona.php">Página Inicial <span class="sr-only">(página atual)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white links" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Cadastre-se
        </a>
        <div class="dropdown-menu links" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cadastroescola.php">Cadastro Escola</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cadastroaluno.php">Cadastro Aluno</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cadastrodoador.php">Cadastro Doador</a>
        </div>
      </li>
      <li class="nav-item links">
        <a class="nav-link text-white" href="faleConosco.php">Fale Conosco</a>
      </li>
    </ul>
    
      <button class="btn btn-outline-warning my-2 my-sm-0 botao" href="index.php">Login</button>
   
  </div>
</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>