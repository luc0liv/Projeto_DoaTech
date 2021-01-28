<?php

if(isset($_POST['nomeescola']) && isset($_POST['email_escola'])  && isset($_POST['senha_escola']) && isset($_POST['direcao'])&& isset($_POST['endereco'])) {
    $nomeescola = $_POST['nomeescola'];
    $email_escola = $_POST['email_escola'];
    $senha_escola = $_POST['senha_escola'];
    $direcao = $_POST['direcao'];
    $endereco = $_POST['endereco'];
    
    
    
    $sql = "insert into escola (nomeescola, email_escola, senha_escola, direcao, endereco) values ('$nomeescola','$email_escola','$senha_escola', '$direcao', '$endereco')";
    $result = $conn->query($sql);
}

?>