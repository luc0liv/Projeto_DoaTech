<?php
include_once('conexaobd.php');
session_start();




    if(isset($_POST['enviar'])){

        $quemEsD = 'doador';
        $quemEsE = 'escola';
        $loginForm = $_POST['nome'];
        $senhaForm = $_POST['senha'];
        $quemEsForm = $_POST['selectdes'];

        if($quemEsD == $quemEsForm){
            $nome1 = "SELECT nomeDoador from doador where nomeDoador LIKE '$loginForm'";
            $result1 = $conn->query($nome1);
           
            $exmjson1 = array();	
            $exmjson2 = array();	
            while($row = $result1->fetch_array(MYSQLI_ASSOC))
            {
                array_push($exmjson1, $row);
                //var_dump($row);
            }
    
          
            $pwd1 = "SELECT senhaDoador from doador where senhaDoador LIKE '$senhaForm'";
            $result2 = $conn->query($pwd1);
            while($row = $result2->fetch_array(MYSQLI_ASSOC))
            {
                array_push($exmjson2, $row);
                //var_dump($row);
            }
    
            $login = $exmjson1[0]['nomeDoador'];
            $senha = $exmjson2[0]['senhaDoador'];

            if(($login == $loginForm) && ($senha == $senhaForm) ){
                $_SESSION['nome'] = $login;
                header('location: acessodoador.php');
            }
        
        }
        elseif($quemEsE == $quemEsForm) {
            $nome2 = "SELECT emailEscola from escola where emailEscola LIKE '$loginForm'";
            $result1 = $conn->query($nome2);
           
            $exmjson3 = array();	
            $exmjson4 = array();

            while($row = $result1->fetch_array(MYSQLI_ASSOC))
            {
                array_push($exmjson3, $row);
                //var_dump($row);
            }
    
          
            $pwd2 = "SELECT senhaEscola from escola where senhaEscola LIKE '$senhaForm'";
            $result2 = $conn->query($pwd2);
            while($row = $result2->fetch_array(MYSQLI_ASSOC))
            {
                array_push($exmjson4, $row);
                //var_dump($row);
            }

            $login = $exmjson3[0]['emailEscola'];
            $senha = $exmjson4[0]['senhaEscola'];

            if(($login == $loginForm) && ($senha == $senhaForm)){
                $_SESSION['nome'] = $login;
                header('location: logado2.php');
            }

        } else {
            echo("Dados inválidos !");
        }
        
         
    }

else{
    $quemEsForm = $_POST['selectdes'];

    if(isset($_GET['logout'])){
        unset($_SESSION['nome']);
        session_destroy();
        header('Location:index.php');
        
    }

   
    
        if($_POST['selectdes'] == 'doador'){
        
            include('acessodoador.php');
        }

        if($_POST['selectdes'] == 'escola'){
          
            include('logado2.php');
        }
       
    }
    





?>