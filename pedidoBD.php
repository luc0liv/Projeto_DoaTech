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
  include('logado2.php');
}


if (isset($_GET['id']) && isset($_GET['pedido']) && isset($_GET['nomeEscola']) && isset($_GET['enderecoEscola'])){
  $pedido = $_GET['pedido'];
  $nomeEscola = $_GET['nomeEscola'];
  $enderecoEscola = $_GET['enderecoEscola'];
  $idPedidos = $_GET['id'];
//   UPDATE nome_tabela
// SET CAMPO = "novo_valor"
// WHERE CONDIÇÃO

  $sql = "UPDATE from pedidos SET pedido = $pedido, nomeEscola = $nomeEscola, enderecoEscola = $enderecoEscola  where idPedidos=$idPedidos";
  $result = $conn->query($sql);
  include('logado2.php');
}

?>