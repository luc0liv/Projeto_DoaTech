<!--Conexao do banco de dados--> 
<?php 
include_once('conexaobd.php');
include_once('cadastroalunobd.php');
?> 

<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/faleConosco.css">
        <script defer type="text/javascript" src="./assets/scripts/index.js"></script>
        <title>Contatos</title>
    </head>
    <body>
	
        <header>
            <div class="header">
                <div class="logo">
                    <a href="index.php"><img class="logoimg" src="./assets/img/Asset 1.png"></a>
                </div>
    
                <div class="menu">
                    <img class="menu-opener" src="./assets/img/menu.png"/>
                    <nav>
                        <ul>
                            <li><a href="index.php">Página inicial</a></li>
                            <li><a href="comoFunciona.php">Como Funciona</a></li>
                            <li><a href="faleConosco.php">Fale Conosco</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
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


        <form method="post" action="" class="cadastrando" id="formulario">
            <h4>Nome:</h4> 
            <input type="text" style="width: 400px;" name="alunonome"><br> 
            <h4>Data de Nascimento:
            </h4>
            <input type="date" style="width: 400px;" name="alunonasc">
            <h4>
                CPF:
            </h4>
            <input type="text" style="width: 400px;" name="alunocpf">
            <h4>
                E-mail:
            </h4>
            <input type="email" style="width: 400px;" name="alunoemail">       
            <h4>
               Senha:
            </h4>
            <input type="password" style="width: 400px;" name="alunosenha"><br><br>

            <button type="button" class="btn btn-info">Cadastrar</button>
        
            
        </form>
        
    </div>
    </div>
    
</main>
        
        <footer>
        


        </footer>



</body>
</html>
?>