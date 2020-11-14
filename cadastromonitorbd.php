<?php

if(isset($_POST['monnome']) && isset($_POST['monnasc'])  && isset($_POST['moncpf']) && isset($_POST['monemail']) && isset($_POST['monsenha'])){
    $monnome = $_POST['monnome'];
    $monnasc = $_POST['monnasc'];
    $moncpf = $_POST['moncpf'];
    $monemail = $_POST['monemail'];
    $monsenha = $_POST['monsenha'];
    
    
    $sql = "insert into monitores (monnome, monnasc, moncpf, monemail, monsenha) values ('$monnome','$monnasc','$moncpf', '$monemail','$monsenha')";
    $result = $conn->query($sql);
}

?>