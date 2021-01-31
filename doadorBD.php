<?php 
include_once('./conexaobd.php');


if(isset($_POST['nomeDoador']) && isset($_POST['emailDoador']) && isset($_POST['senhaDoador'])){
  $nomeDoador = $_POST['nomeDoador'];
  $emailDoador = $_POST['emailDoador'];
  $senhaDoador = $_POST['senhaDoador'];
  
  
  $sql = "insert into doador (nomeDoador, emailDoador, senhaDoador) values ('$nomeDoador','$emailDoador', '$senhaDoador')";
  $result = $conn->query($sql);

}
?>