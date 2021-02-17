<?php
include_once('conexaobd.php');
session_start();


if(!isset($_SESSION['nome'])){

    if(isset($_POST['enviar'])){

       
        $quemEsD = 'doador';
        $quemEsE = 'escola';
        $quemEsA = 'aluno';

        $loginForm = $_POST['nome'];
        $senhaForm = $_POST['senha'];

    

        $quemEsForm = $_POST['selectdes'];

        if(($quemEsD == $quemEsForm)){

            $nome = "SELECT nomeDoador from doador where nomeDoador LIKE '$loginForm'";
            $result1 = $conn->query($nome);
           
            $exmjson = array();	
            $exmjson2 = array();	
            while($row = $result1->fetch_array(MYSQLI_ASSOC))
            {
                array_push($exmjson, $row);
                //var_dump($row);
            }
    
          
            $pwd = "SELECT senhaDoador from doador where senhaDoador LIKE '$senhaForm'";
            $result2 = $conn->query($pwd);
            while($row = $result2->fetch_array(MYSQLI_ASSOC))
            {
                array_push($exmjson2, $row);
                //var_dump($row);
            }
    
            $login = $exmjson[0]['nomeDoador'];
            $senha = $exmjson2[0]['senhaDoador'];

            if(($login == $loginForm) && ($senha == $senhaForm) ){
                $_SESSION['nome'] = $login;
                header('location: acessodoador.php');
            }
        }
            
        elseif(($quemEsE == $quemEsForm)){

            $nome = "SELECT emailEscola from escola where emailEscola LIKE '$loginForm'";
            $result1 = $conn->query($nome);
           
            $exmjson = array();	
            $exmjson2 = array();	
            while($row = $result1->fetch_array(MYSQLI_ASSOC))
            {
                array_push($exmjson, $row);
                //var_dump($row);
            }
    
          
            $pwd = "SELECT senhaEscola from escola where senhaEscola LIKE '$senhaForm'";
            $result2 = $conn->query($pwd);
            while($row = $result2->fetch_array(MYSQLI_ASSOC))
            {
                array_push($exmjson2, $row);
                //var_dump($row);
            }
    
            $login = $exmjson[0]['nomeEscola'];
            $senha = $exmjson2[0]['senhaEscola'];

            if(($login == $loginForm) && ($senha == $senhaForm)){
                $_SESSION['nome'] = $login;
                header('location: logado2.php');
            }
        }
            


            else{
                echo("Dados inválidos !");
            }
    }

    include('index.php');
}else{
   
    $quemEsForm = $_POST['selectdes'];

    if(isset($_GET['logout'])){
        unset($_SESSION['nome']);
        session_destroy();
        header('Location:index.php');
        
    }

   
    
        if($_POST['selectdes'] == 'doador'){
        
            include('acessodoador.php');
        }

        if($_POST['selectdes'] == 'aluno'){
        
            include('logado3.php');
        }

        if($_POST['selectdes'] == 'escola'){
          
            include('logado2.php');
        }
       
    }
    





?>