<?php
include_once('./conexaobd.php');

if(isset($_POST['nomeEscola']) && isset($_POST['emailEscola']) && isset($_POST['senhaEscola']) && isset($_POST['direcao']) && isset($_POST['enderecoEscola'])){
  $nomeEscola = $_POST['nomeEscola'];
  $emailEscola = $_POST['emailEscola'];
  $senhaEscola = $_POST['senhaEscola'];
  $direcao = $_POST['direcao'];
  $enderecoEscola = $_POST['enderecoEscola'];
  
  
  
  
  // $sql = "insert into escola (nomeEscola, emailEscola, senhaEscola, direcao, enderecoEscola) values ('$nomeEscola','$emailEscola', '$senhaEscola', '$direcao', '$enderecoEscola')";
 
 

  
  // $result = $conn->query($sql);

  $sql = "insert into escola (nomeEscola, direcao, enderecoEscola, pedidoEscola, emailEscola, senhaEscola) values ('$nomeEscola','$direcao', '$enderecoEscola', ' ', '$emailEscola',  '$senhaEscola')";
  $result = $conn->query($sql);

}
?>