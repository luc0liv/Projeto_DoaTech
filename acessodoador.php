<!--Essa é a página que o doador tem acesso após o Login, 
aqui ficam os pedidos dos alunos para que o doador escolha aquilo que vai doar.-->

<?php include_once('./conexaobd.php')?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/acess.css" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pedidos dos alunos</title>
</head>
<body>
<?php include_once('./navbar.php')?>

<main>
<div class="intro"><h4>Pedidos dos alunos</h4></div>

<section class="container margens">

<?php
            $sql = "select * from pedidos";
            $result = $conn-> query($sql);
            
            if ($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                     ?>
        
           
<div class="list-group">

  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start shadow">
    <div class="d-flex w-100 justify-content-between pedidos">
      <h5 class="mb-1"><?php echo $rows["pedido"];?></h5> 
      <p class="mb-1"><?php echo $rows["nomeEscola"];?></p>    
      <p class="mb-1"><?php echo $rows["enderecoEscola"];?></p>
    </div>
   
   
  </a>
  
</div>

           
           <?php 
                } 
            } else {
                echo "nenhum produto cadastrado";
            }
            ?>

</section>
</main>

<?php include_once('./footer.php')?>


</body>
</html>