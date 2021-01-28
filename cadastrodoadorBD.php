<?php

if(isset($_POST['nomedoador']) && isset($_POST['email_doador'])  && isset($_POST['senha_doador']) && isset($_POST['doacao'])) {
    $nomedoador = $_POST['nomedoador'];
    $email_doador = $_POST['email_doador'];
    $senha_doador = $_POST['senha_doador'];
    $doacao = $_POST['doacao'];
    
    
    
    $sql = "insert into doador (nomedoador, email_doador, senha_doador, doacao) values ('$nomedoador','$email_doador','$senha_doador', '$doacao')";
    $result = $conn->query($sql);
}

?>