<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "bancodosquad";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou: ". mysqli_connect_error());
}


if(isset($_POST['alunonome']) && isset($_POST['alunonasc']) && isset($_POST['alunocpf']) && isset($_POST['alunoemail']) && isset($_POST['alunotel']) && isset($_POST['alunosenha'])){
    $alunonome = $_POST['alunonome'];
    $alunonasc = $_POST['alunonasc'];
    $alunocpf = $_POST['alunocpf'];
    $alunoemail = $_POST['alunoemail'];
    $alunotel = $_POST['alunotel'];
    $alunosenha = $_POST['alunosenha'];
    
    
    $sql = "insert into alunos (alunonome, alunonasc, alunocpf, alunoemail, alunotel, alunosenha) values ('$alunonome','$alunonasc', '$alunocpf', '$alunoemail', '$alunotel', '$alunosenha')";
    $result = $conn->query($sql);
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Quicksand:wght@300;400;500;600;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
   

</head>

<body>
<div class="container">
        <form method="post" action="">
            <h4>Nome:</h4> 
            <input type="text" style="width: 400px;" name="alunonome"><br> 
            <h4>Data de Nascimento:
            </h4>
            <input type="date" style="width: 400px;" name="alunonasc">
            <h4>
                CPF:
            </h4>
            <input type="number" style="width: 400px;" name="alunocpf">
            <h4>
                E-mail:
            </h4>
            <input type="email" style="width: 400px;" name="alunoemail">
            <h4>
                Telefone:
            </h4>
            <input type="tel" style="width: 400px;" name="alunotel">
            <h4>
               Senha:
            </h4>
            <input type="password" style="width: 400px;" name="alunosenha">

           
            <input type="submit" id="botao" value="cadastrar">
        </form></div>



</body>
</html>