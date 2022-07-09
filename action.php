<?php
include('conexao.php');
$id = $_GET['id'];
$action = $_GET['action'];

if ($action == "remover"){
    $produto = "DELETE FROM produtos WHERE id ='{$id}'";
    $result = mysqli_query($conexao, $produto) or die("ERRO TENTAR EXCLUIR O ARQUIVO");
}
header('location: administrador.php');
exit;
?>