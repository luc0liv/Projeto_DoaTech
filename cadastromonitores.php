<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "bancodosquad";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou: ". mysqli_connect_error());
}


if(isset($_POST['monnome']) && isset($_POST['monnasc']) && isset($_POST['monensino']) && isset($_POST['monmat']) && isset($_POST['moncpf']) && isset($_POST['monemail']) && isset($_POST['monotel']) && isset($_POST['monsenha'])){
    $monnome = $_POST['monnome'];
    $monnasc = $_POST['monnasc'];
    $monensino = $_POST['monensino'];
    $monmat = $_POST['monmat'];
    $moncpf = $_POST['moncpf'];
    $monemail = $_POST['monemail'];
    $montel = $_POST['montel'];
    $monsenha = $_POST['monsenha'];
    
    
    $sql = "insert into monitores (monnome, monnasc, monensino, monmat, moncpf, monemail, montel, monsenha) values ('$monnome','$monnasc', '$monensino','$monmat','$moncpf', '$monemail', '$montel', '$monsenha')";
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
            <input type="text" style="width: 400px;" name="monome"><br> 
            <h4>Data de Nascimento:
            </h4>
            <input type="date" style="width: 400px;" name="monnasc">
            <h4>Instituição de Ensino:</h4> 
            <input type="text" style="width: 400px;" name="monensino"><br> 
            <h4>Matrícula:</h4> 
            <input type="number" style="width: 400px;" name="monmat"><br> 
            <h4>
                CPF:
            </h4>
            <input type="number" style="width: 400px;" name="moncpf">
            <h4>
                E-mail:
            </h4>
            <input type="email" style="width: 400px;" name="monemail">
            <h4>
                Telefone:
            </h4>
            <input type="tel" style="width: 400px;" name="montel">
            <h4>
               Senha:
            </h4>
            <input type="password" style="width: 400px;" name="monsenha">

           
            <input type="submit" id="botao" value="cadastrar">
        </form></div>



</body>
</html>