<?php 

if(isset($_SESSION['nome'])){
    echo '<h2>Bem-vindo ' . $_SESSION['nome'] . " - aluno" . '</h2>';
}

echo '<a href="?logout">Fazer Logout!</a>';

?>