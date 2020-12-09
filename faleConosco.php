<!--Conexao do banco de dados--> 
<?php include_once('conexaobd.php');?> 



<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/faleConosco.css">
        <script defer type="text/javascript" src="./assets/scripts/index.js"></script>
        <title>Contatos</title>
    </head>
    <body>
	
        <header>
            <div class="header">
                <div class="logo">
                    <a href="index.php"><img class="logoimg" src="./assets/img/Asset 1.png"></a>
                </div>
    
                <div class="menu">
                    <img class="menu-opener" src="./assets/img/menu.png"/>
                    <nav>
                        <ul>
                            <li><a href="index.php">Página inicial</a></li>
                            <li><a href="comofunciona.php">Como Funciona</a></li>
                            <li><a href="faleConosco.php">Fale Conosco</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

    <!-- Inicio do switch -->
    <div class="tema">
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round" ></div>
            </label>
        </div>
    </div>
    <!--fim do switch-->

	    <div class="container">
		
			<h2>Contatos</h2>
		
		    <hr>
	
		    <section id="contatos">
					<div class="contato">
						<img src="./assets/img/new-email.png" alt="email">
						<p>contato@boraestudar.com</p>
					</div>
						
					
					<div class="contato">
						<img src="./assets/img/phone-call.png" alt="cel">
						<p>(21) 90000-1111</p>
					</div>				
		    </section>

		    <section id="formulario">
                <form name="contato" action="contatoFormBd.php" method="post">
                    <h4>Nome:</h4>
                    <input type="text" name="nome" id="TextA">
                    <h4>Mensagem:</h4>
                    <textarea  name="mensagem" id="TextArea"></textarea><br>
                    <input id="botao" type="submit" value="Enviar">
        
			    </form>
		    </section>

		

		    <!-- <?php

                    $sql = "select * from Contatos";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($rows = $result->fetch_assoc()){
                            // echo $rows[data] . "<br>";
                            // echo $rows[nome] . "<br>";
                            // echo $rows[mensagem] . "<br>" . "<hr>" . "<hr>";
                            // print_r($rows);
                    
                    
                ?> -->
			<table class="table table-striped table-dark">
				<thead>
					<tr>
					<th scope="col">Nome</th>
					<th scope="col">Mensagem</th>
					<th scope="col">Data</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td><?php echo $rows["nome"];?></td>
					<td><?php echo $rows["mensagem"];?></td>
					<td><?php echo $rows["data"];?></td>
					</tr>
				</tbody>
			</table>

            <!-- <?php
                    }
                }
                
            ?> -->
	    </div>
	
		

	 <!--Inicio do rodapé-->
     <footer>
        <div id="follow">Siga-nos em nossas redes sociais:</div>
        <div class="social">
            <a href="https://www.youtube.com/"><img src="./assets/img/ytb.png" class="iconSocial" alt="youtube"></a>

            <a href="https://twitter.com/home"><img src="./assets/img/twtr.png" class="iconSocial" alt="twitter"></a>

            <a href="https://www.instagram.com"><img src="./assets/img/insta.png" class="iconSocial" alt="insta"></a>

            <a href="https://www.facebook.com"><img src="./assets/img/fbk.png" class="iconSocial" alt="facebook"></a>
        </div>
    </footer>
    <!--Fim do rodapé-->
    </body>
</html>