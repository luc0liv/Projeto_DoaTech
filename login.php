<?php
include_once('conexaobd.php');
session_start();


if(!isset($_SESSION['nome'])){

    if(isset($_POST['enviar'])){
        $login = 'fulano';
        $senha = "123456";
        $quemEsD = 'doador';
        $quemEsE = 'escola';
        $quemEsA = 'aluno';

        $loginForm = $_POST['nome'];
        $senhaForm = $_POST['senha'];

        $quemEsForm = $_POST['selectdes'];


            if(($login == $loginForm) && ($senha == $senhaForm) && ($quemEsD == $quemEsForm)){
                $_SESSION['nome'] = $login;
                header('location: acessodoador.php');
            }
            elseif(($login == $loginForm) && ($senha == $senhaForm) && ($quemEsA == $quemEsForm)){
                $_SESSION['nome'] = $login;
                header('location: logado3.php');
            }
            elseif(($login == $loginForm) && ($senha == $senhaForm) && ($quemEsE == $quemEsForm)){
                $_SESSION['nome'] = $login;
                header('location: logado2.php');
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