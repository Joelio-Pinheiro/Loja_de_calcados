<?php
include('conexao.php');
$action = $_GET['action'];

if ($action == "remover"){
    $id = $_GET['id'];
    $produto = "DELETE FROM produtos WHERE id ='{$id}'";
    $result = mysqli_query($conexao, $produto) or die("ERRO TENTAR EXCLUIR O ARQUIVO");
} elseif ($action == "cadastrar") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];
    $oferta = 0;
    if ($desconto == null) {
        $desconto = 0;
    }
    if ($desconto > 0) {
        $oferta = 1;
    }


    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name']; 
    $_UP['pasta'] = "produtos/";
    $_UP['extensoes'] = array ('png', 'webp', 'WEBP');
    $tmp1 = explode('.', $_FILES['img1']['name']);
    $extensao1 = end($tmp1);

    $tmp2 = explode('.', $_FILES['img2']['name']);
    $extensao2 = end($tmp2);

    if (array_search($extensao1, $_UP['extensoes']) === false or array_search($extensao2, $_UP['extensoes']) === false) {
        echo"<script>alert('FORMATO DE ARQUIVO INVÁLIDO, ENVIE NOVAMENTE COM A EXTENSÃO .PNG');window.location.href='administrador.html';</script>";
    } else{
        if (move_uploaded_file($_FILES['img1']['tmp_name'], "produtos/". $img1) and move_uploaded_file($_FILES['img2']['tmp_name'], "produtos/". $img2)) {
            $produto = "INSERT INTO produtos(nome, preco, desconto, oferta, img1, img2) VALUES ('{$nome}', '{$preco}', '{$desconto}', '{$oferta}', 'produtos/{$img1}', 'produtos/{$img2}')";
            $result = mysqli_query($conexao, $produto) or die("ERRO AO TENTAR CADASTRAR O PRODUTO");
        } else{
            echo"<script>alert('ERRO AO CADASTRAR A IMAGEM!');window.location.href='administrador.html';</script>";
        }
    }
} elseif($action == "editar") {
    # code...
}
header('location: administrador.php');
exit;
?>