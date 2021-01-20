<?php
include_once('conexaobd.php');
session_start();



if(!isset($_SESSION['nome'])){

    if(isset($_POST['enviar'])){
        $login = 'fulano';
        $senha = "123456";

        $loginForm = $_POST['nome'];
        $senhaForm = $_POST['senha'];

        if($login == $loginForm && $senha == $senhaForm){
            $_SESSION['nome'] = $login;
            header('location: index.php');
        }else{
            echo("Dados inválidos !");
        }
    }


    include('index.php');
}else{
    if(isset($_GET['logout'])){
        unset($_SESSION['nome']);
        session_destroy();
        header('Location:index.php');
    }
    include('logado.php');
}



?>