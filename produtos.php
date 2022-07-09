<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .car{
            position: relative;
        }
        #calcados > div:hover{
            background-color: rgb(231 226 226 / 77%);
            -webkit-transform: scale(1.07);
            -ms-transform: scale(1.07);
            transform: scale(1.07);

            -webkit-animation: swing 1s ease;
            animation: swing 1s ease;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
        }
    </style>
    <title>SHOES</title>
</head>
<body>
    <header>
        <container id="cab">
            <form action="" id="busca">
                <input type="text" style="margin-right: 10px;" id="inpbus" placeholder="Pesquisar">
                <input type="submit" value="Buscar" id="btnbus">
              </form>
                <div><button id="btncar"><img src="imgs/gv.png" width="30 px" height="30px"></button></div>
                <?php
                    session_start();
                    if($_SESSION['logado'] == true){
                        echo"<div id='perfil'><img src='imgs/s.png' width='30px' height='30px'></div>";
                    } else{
                        echo"<div><a href='login.html'><img src='imgs/s.png' width='30px' height='30px'></a></div>";
                    }
                ?>
                <div><a href="#ofertas">OFERTAS</a></div>
                <div><a href="produtos.php">PRODUTOS</a></div>
                <div><a href="index.php">HOME</a></div>
                <div id="icon" style="margin-right: 30%;"><a href="index.php"><img src="imgs/360x600.png" width="70 px" height="40px"></a></div>
            </container>
    </header>
    <main>
        <!--produtos-->
        <h1 class="prod">PRODUTOS<hr></h1>
        <container id="calcados" style="max-height: none;">
        <?php
                $produto = "SELECT * FROM produtos";
                $result = mysqli_query($conexao, $produto);
                $linha = mysqli_fetch_assoc($result);
                $total = mysqli_num_rows($result);
                if($total > 0){
                    do{
                ?>
                <div>
                    <a href= "compra.php?id=<?=$linha['id']?>">
                        <img src="<?=$linha['img1']?>">
                        <h4><?=$linha['nome']?></h4>
                        <p>R$<?=number_format($linha['preco'], 2, ',', '.')?>
                        <?php 
                        if($linha['oferta'] == 1){?>
                            (-<?=$linha['desconto']?>%)
                        <?php
                        }
                        ?>
                    </p>
                    </a>
                </div>
                <?php
                    }while($linha = mysqli_fetch_assoc($result));
                }
                ?>
        </container>
        <!--ofertas-->
        <h1 class="prod" id="ofertas">OFERTAS<hr></h1>
        <container id="calcados" style="max-height: none;">
            <?php
                $produto = "SELECT * FROM produtos where oferta = 1";
                $result = mysqli_query($conexao, $produto);
                $linha = mysqli_fetch_assoc($result);
                $total = mysqli_num_rows($result);
                if($total > 0){
                    do{
                ?>
                <div>
                    <a href= "compra.php?id=<?=$linha['id']?>">
                        <img src="<?=$linha['img1']?>">
                        <h4><?=$linha['nome']?></h4>
                        <p>R$ R$<?=number_format($linha['preco'], 2, ',', '.')?> (-<?=$linha['desconto']?>%)</p>
                    </a>
                </div>
                <?php
                    }while($linha = mysqli_fetch_assoc($result));
                }
                ?>
        </container>
        <div id="menu" class="menu effect">
            <nav>
                <div class = "car">
                    <span id="namecar">SEU CARRINHO</span>
                    <button id="btnclose">X</button>
                </div>
                <ul>
                    <li><a href="#">Frutas</a></li>
                    <li><a href="#">Link aqui</a></li>
                    <li><a href="#">Link aqui</a></li>
                    <li><a href="#">Link aqui</a></li>
                    <li><a href="#">Link aqui</a></li>
                    <li><a href="#">Link aqui</a></li>
                </ul>
            </nav>
        </div>
    </main>
    <div id="modal-perfil" class="modal-container">
    <div class="modal">
        <?php
            if($_SESSION['logado'] == true){
                echo'<button id="btnfechar">x</button>';
                echo'<div><img src="imgs/p.png" width="150px" height="150px"></div>';
                echo"<div><hr><h2 style='font-size: 20pt; margin: 10px;'>{$_SESSION['nome']}</h2></div>";
                echo"<div><hr><h2 style='font-size: 15pt; margin: 15px;'>{$_SESSION['email']}</h2><hr></div>";
                echo'<a href="logout.php" id="btnpro" style="display: flex; text-align: center;text-decoration: none; align-items: center;
                justify-content: center;">SAIR</a>';
            }
        ?>
    </div>
    </div>
    <br><br><br>
    <footer id="rodape" style="position: relative;">
        <iframe src="footer.html" scrolling="no" name="myIFrame" frameborder="0" id="frame"></iframe>
        <div id="final"></div>
    </footer>
    <script src="js/menu.js"></script>
</body>
</html>