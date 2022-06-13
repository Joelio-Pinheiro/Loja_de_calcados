<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM produtos";
    $result = mysqli_query($conexao, $sql);
    $json_array = array();
    //$arquivo = fopen('teste.json','w'); if ($arquivo == false) die('Não foi possível criar o arquivo.');
    while ($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
        print_r($json_array);
        echo'<br>';
    }
    //fwrite($arquivo, json_($json_array));
    //fclose($arquivo);
    ?>
    <script></script>
</body>
</html>