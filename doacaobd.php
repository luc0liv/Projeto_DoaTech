<?php
include_once('./conexaobd.php');

if(isset($_POST['doacao']) && isset($_POST['descricao'])){

 $doacao = $_POST['doacao'];
 $descricao = $_POST['descricao'];
 
  
  

  $sql = "insert into doacao (doacao, descricao) values ('$doacao','$descricao')";
  $result = $conn->query($sql);

}