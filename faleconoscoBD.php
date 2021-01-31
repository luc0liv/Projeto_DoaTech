<?php 
include_once('./conexaobd.php');


if(isset($_POST['nome']) && isset($_POST['mensagem']) && isset($_POST['email'])){
  $nome = $_POST['nome'];
  $mensagem = $_POST['mensagem'];
  $email = $_POST['email'];
  
  
  $sql = "insert into faleconosco (nome, mensagem, email) values ('$nome','$mensagem', '$email')";
  $result = $conn->query($sql);

}
?>