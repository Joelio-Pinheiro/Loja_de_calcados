<?php
include('conexao.php');
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$CPF = mysqli_real_escape_string($conexao, $_POST['CPF']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$confsenha = mysqli_real_escape_string($conexao, $_POST['confsenha']);

$query = "SELECT CPF FROM cliente WHERE CPF = '{$CPF}'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
$tamanhocpf = mb_strlen($CPF);

if($senha != $confsenha){
    echo"<script>alert('[ERRO] SUAS SENHAS NÃO ESTÃO COMPATIVEIS!');window.location.href='cadastro.php';</script>";
    die();
} else if($row != 0){
    echo"<script>alert('ESSE CPF JÁ FOI CADASTRADO, TENTE NOVAMENTE!');window.location.href='cadastro.php';</script>";
    die();
}else if($tamanhocpf != 14){
    echo"<script>alert('CPF INVÁLIDO!');window.location.href='cadastro.php';</script>";
    die();
}else{
    $sql = "INSERT INTO cliente (nome, email, CPF, senha) VALUES ";
    $sql .= "('$nome', '$email', '$CPF', '$senha')"; 
    mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($conexao);
    header('location: login.html');
    exit;
}
?>