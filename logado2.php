<?php include_once('./pedidobd.php')?>
<?php include_once('./doacaobd.php')?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/acess.css" type="text/css">
    <title>Bem-vindo</title>
</head>
<body>
<?php include_once('./navbar.php')?>
<div class="logout">
<?php /*

if(isset($_SESSION['nome'])){
    echo '<h2>Bem-vindo ' . $_SESSION['nome'] . " - escola" . '</h2>';
}
echo '<a href="?logout" class="logout">Fazer Logout!</a>';*/

?></div>
<main>
<section class="escolaPedidos">
<section class="container col-xl-4 infos">
  <small>Algumas dicas...</small>
  <h3>Certifique-se de que o aluno realmente necessita do item solicitado.</h3>
  <h3>Os pedidos são atendidos de acordo com a disponibilidade dos doadores. </h3>
  <h3>Confira erros de digitação antes de clicar em "Enviar".</h3>
  
</section>
<section class="container col-xl-4  formPedido">
  <div class="title">
  <h2>Qual o pedido do seu aluno?</h2>
  <hr>
  </div>
<form method="post" action="">
  <div class="form-group">

  <label for="pedido">Pedido do aluno</label>
    <input type="text" name="pedido" class="form-control" id="pedido" aria-describedby="pedido" placeholder="Escreva aqui o pedido do estudante (Exemplo: Um notebook)">

    <label for="adress">Nome da Escola</label>
    <input type="text" name="nomeEscola" class="form-control" id="adress" aria-describedby="enderecoEscola" placeholder="Escreva aqui o nome da que receberá o pedido">

    <label for="adress">Endereço da escola</label>
    <input type="text" name="enderecoEscola" class="form-control" id="adress" aria-describedby="enderecoEscola" placeholder="Escreva aqui o endereço da escola que receberá o pedido">
    
    
  
  <button type="submit" class="btn btn-outline-warning">Enviar</button>
</form>
</section>
</section>

<hr class="divider">

<section class="d-lg-flex flex-row justify-content-around mb-5">
<section class="container col-xl-6 p-5 mb-auto rounded margens">
  
<h2>Lista de Pedidos </h2>
<hr class="divider2">

<?php
            $sql = "select * from pedidos";
            $result = $conn-> query($sql);
            
            if ($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                     ?>
        
           


  <div class="listaPedidos">
  
      <h5><?php echo $rows["pedido"];?></h5> 
      
      <p><?php echo $rows["nomeEscola"];?></p>
          
      <p><?php echo $rows["enderecoEscola"];?></p>
      <div class="editDelete">
     
      <a class="btn btn-warning" name="editar" href="edit.php?editar=<?php echo $rows['idPedidos'];?>" >Editar</a>
      <a class="btn btn-danger" name="delete" href="pedidoBD.php?delete=<?php echo$rows['idPedidos']?>">Apagar</a>
    </div>
  </div>

 
  </div>

           
<?php 
     } 
 } else {
     echo "nenhum pedido cadastrado";
 }
 ?>

</section>

<section class="donation container col-xl-4 p-4  mb-auto rounded margens">
<h2>Pedidos atendidos</h2>
<hr class="divider2">
<?php
            $sql = "select * from doacao";
            $result = $conn-> query($sql);
            
            if ($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                     ?>

<div class="listaPedidos">
  
  <h5><?php echo $rows["doacao"];?></h5> 
  
  <p><?php echo $rows["descricao"];?></p>
      
</div>
<?php 
     } 
 } else {
     echo "nenhum pedido cadastrado";
 }
 ?>
</section>
</section>
</main>
<?php include_once('./footer.php')?>
</body>
</html>