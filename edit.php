<?php include_once('./pedidoBD.php')?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/acess.css" type="text/css">
    <title>Editar</title>
</head>
<body>

<?php
            $sql = "select * from pedidos";
            $result = $conn-> query($sql);
            
            if ($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                     ?>


<form style=" background-color: #03989E;
    border: solid 2px #FCCE5D;
    border-radius: 5px;
    box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.56);
    color: white;
    font-family: 'Montserrat', sans-serif;
    padding: 20px;" method="get" action="pedidoBD.php">
  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo$rows['idPedidos']?>?>"  >
    <label for="pedido">Pedido do aluno</label>
    <input type="text" name="pedido" class="form-control" id="pedido" aria-describedby="pedido" placeholder="Escreva aqui o pedido do estudante (Exemplo: Um notebook)">

    <label for="adress">Nome da Escola</label>
    <input type="text" name="nomeEscola" class="form-control" id="adress" aria-describedby="enderecoEscola" placeholder="Escreva aqui o nome da que receberá o pedido">

    <label for="adress">Endereço da escola</label>
    <input type="text" name="enderecoEscola" class="form-control" id="adress" aria-describedby="enderecoEscola" placeholder="Escreva aqui o endereço da escola que receberá o pedido">
    
    
  
  <button style="margin-top:5px" type="submit" class="btn btn-outline-warning">Enviar</button>
</form>

<?php 
     } 
 } else {
     echo "nenhum pedido cadastrado";
 }
 ?>
</body>
</html>