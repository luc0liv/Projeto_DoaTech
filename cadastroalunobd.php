<?php

if(isset($_POST['alunonome']) && isset($_POST['alunonasc']) && isset($_POST['alunocpf']) && isset($_POST['alunoemail']) && isset($_POST['alunosenha'])){
    $alunonome = $_POST['alunonome'];
    $alunonasc = $_POST['alunonasc'];
    $alunocpf = $_POST['alunocpf'];
    $alunoemail = $_POST['alunoemail'];
    $alunosenha = $_POST['alunosenha'];
    
    
    $sql = "insert into alunos (alunonome, alunonasc, alunocpf, alunoemail, alunosenha) values ('$alunonome','$alunonasc', '$alunocpf', '$alunoemail','$alunosenha')";
    $result = $conn->query($sql);
}
?>

