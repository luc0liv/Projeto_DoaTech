<?php 
include_once('./conexaobd.php');


if(isset($_POST['nomeAluno']) && isset($_POST['emailAluno']) && isset($_POST['senhaAluno']) && isset($_POST['escolaAluno']) && isset($_POST['pedido'])){
  $nomeAluno = $_POST['nomeAluno'];
  $emailAluno = $_POST['emailAluno'];
  $senhaAluno = $_POST['senhaAluno'];
  $escolaAluno = $_POST['escolaAluno'];
  $pedido = $_POST['pedido'];
  
  
  $sql = "insert into aluno (nomeAluno, emailAluno, senhaAluno, escolaAluno, pedido) values ('$nomeAluno','$emailAluno', '$senhaAluno', '$escolaAluno', '$pedido')";
  $result = $conn->query($sql);

}
?>