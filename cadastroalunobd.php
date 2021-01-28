<?php
//Precisa criar um GET tbm, pra exibir os pedidos dos alunos na página de pedidos. 

if(isset($_POST['nomealuno']) && isset($_POST['email_aluno']) && isset($_POST['senha_aluno']) && isset($_POST['aluno_escola']) && isset($_POST['pedido'])){
    $nomealuno = $_POST['nomealuno'];
    $email_aluno = $_POST['email_aluno'];
    $senha_aluno = $_POST['senha_aluno'];
    $aluno_escola = $_POST['aluno_escola'];
    $pedido = $_POST['pedido'];
    
    $sql = "insert into aluno (nomealuno, email_aluno, senha_aluno, aluno_escola, pedido) values ('$nomealuno','$email_aluno', '$senha_aluno', '$aluno_escola', '$pedido')";
    $result = $conn->query($sql);
}
?>

