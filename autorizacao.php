<?php
session_start();
include('conexao.php');
/*if(empty($_POST['email']) || empty([$_POST('senha')])) {
    header('location: login.html');
    exit~~;
}*/
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$query = "SELECT CPF FROM cliente where email = '{$email}' and senha = '{$senha}'";
$nome = "SELECT * FROM cliente where email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
$nome1 = mysqli_query($conexao, $nome);

$row = mysqli_num_rows($result);
echo $row;
if($row == 1){
    $_SESSION['email'] = $email;
    $fetch = mysqli_fetch_object($nome1);
    $_SESSION['nome'] = $fetch->nome;
    header('location: index.php');
    $_SESSION['logado'] = true;
    exit;
} else{
    echo "<script>alert('[ERRO] CREDENCIAIS INVÁLIDAS!');window.location.href='login.html';</script>";
    exit;
}
?>