<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "boraestudar";

//criando a conexão 
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
	die("A conexão ao BD falhou " . mysqli_connect_error());
}
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['estado']) && isset($_POST['subject'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $subject = $_POST['subject'];
    
    $sql = "insert into contato (firstname, lastname, email, estado, subject) values ('$firstname','$lastname', '$email', '$estado', '$subject')";
    $result = $conn->query($sql);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Fale conosco</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&family=Raleway&family=Source+Sans+Pro&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/style/index.css">
    <link rel="stylesheet" type="text/css" href="./assets/style/faleConosco.css">
    <script defer type="text/javascript" src="./assets/scripts/index.js"></script>
</head>

<body>
    <!--Menu-->
    <nav class="menu">
        <a href="homepage.html"><img src="./assets/img/Asset 1.png" alt="logo" width="110px" class="logo"></a>       
        <a href="cadastrologin.html" class="link">Cadastre-se/Login </a>
        <a href="monitoria.html" class="link">Página de Monitorias</a>
        <a href="faleconosco.php" class="link">Fale conosco</a>
    </nav>
    <!--fim do menu-->

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

    <main class="contatos">
        <div id="email"><img src="./assets/img/new-email.png" alt="email" width="40px">Email: boraestudar@boraestudar.com</div>
        <div id="tel"><img src="./assets/img/phone-call.png" alt="telefone" width="40px">Telefone: (21) 23232323</div>

      

    </main>


    <div class="mensagemContato">
        <form method="post" action="">
            <h4>Nome</h4>
            <input type="text" name="firstname" placeholder="Seu nome...">

            <h4>Sobrenome:</h4>
            <input type="text"  name="lastname" placeholder="Seu sobrenome...">

           <h4> E-mail:</h4>
            <input type="email" name="email" placeholder="Coloque seu e-email">

           <h4>Estado:</h4>
            <select  name="estado">
      <option value="riodeJaneiro">Rio de Janeiro</option>
      <option value="saoPaulo">São Paulo</option>
      <option value="minasGerais">Minas Gerais</option>
      <option value="espiritoS">Espírito Santo</option>
    </select>

          <h4> Mensagem:</h4>
            <textarea  name="subject" placeholder="Escreva algo..." style="height:200px"></textarea>

            <input type="submit" id="botao" value="Enviar">
        </form>
    </div>

    <!--Inicio do rodapé-->
    <footer>
        <div id="follow">Siga-nos em nossas redes sociais:</div>
        <div class="social">
            <a href="https://www.youtube.com/"><img src="./assets/img/ytb.png" class="iconSocial" alt="youtube"></a>

            <a href="https://twitter.com/home"><img src="./assets/img/twtr.png" class="iconSocial" alt="twitter"></a>

            <a href="https://www.instagram.com"><img src="./assets/img/insta.png" class="iconSocial" alt="insta"></a>

            <a href="https://www.facebook.com"><img src="./assets/img/fbk.png" class="iconSocial" alt="facebook"></a>
        </div>
    </footer>
    <!--Fim do rodapé-->
</body>

</html>