<?php
include_once('./conexaobd.php');

if(isset($_POST['pedido']) && isset($_POST['nomeEscola']) && isset($_POST['enderecoEscola'])){

 $pedido = $_POST['pedido'];
 $nomeEscola = $_POST['nomeEscola'];
 $enderecoEscola = $_POST['enderecoEscola'];
  
  

  $sql = "insert into pedidos (pedido, nomeEscola, enderecoEscola) values ('$pedido','$nomeEscola', '$enderecoEscola')";
  $result = $conn->query($sql);

}

if (isset($_GET['delete'])){
  $idPedidos = $_GET['delete'];

  $sql = "delete from pedidos where idPedidos=$idPedidos";
  $result = $conn->query($sql);
}
?>