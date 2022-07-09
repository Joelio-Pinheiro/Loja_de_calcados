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
        /*#produto > div:nth-child(n+2):hover{
            -webkit-transform: rotateZ(-12deg);
            -ms-transform: rotateZ(-12deg);
            transform: rotateZ(-12deg);
        }*/
        #btnmais:hover{
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
                    $_SESSION['logado'] = $_SESSION['logado'] or false;
                    if($_SESSION['logado'] == true){
                        echo"<div id='perfil'><img src='imgs/s.png' width='30px' height='30px'></div>";
                    } else{
                        echo"<div><a href='login.html'><img src='imgs/s.png' width='30px' height='30px'></a></div>";
                    }
                ?>
                <div><a href="produtos.php?#ofertas">OFERTAS</a></div>
                <div><a href="produtos.php">PRODUTOS</a></div>
                <div><a href="index.php">HOME</a></div>
                <div id="icon" style="margin-right: 30%;"><a href="index.php"><img src="imgs/360x600.png" width="70 px" height="40px"></a></div>
            </container>
    </header>
    <main>
        <container id="produto">
            <div>
                Basquete/Casual
                <h1 id="canome">Tênis Air Jordan 1<br>
                    Mid Se Masculino</h1>
                <a href="compra.php?id=1">
                    <input type="button" value="COMPRE AGORA &rarr;" id="compra">
                </a>
            </div>
            <div>
                <img src="https://images.lojanike.com.br/1024x1024/produto/tenis-nike-air-jordan-i-mid-unissex-554724-113-1.png" width="530 px" height="530px">
            </div>
        </container>
        <h1 class="prod" id="ofertas">Destaque: <hr></h1>
        <container id="calcados" style="grid-template-columns: repeat(5, 1fr);">
        <?php
                $produto = "SELECT * FROM produtos where oferta = 1";
                $result = mysqli_query($conexao, $produto);
                $linha = mysqli_fetch_assoc($result);
                $total = mysqli_num_rows($result);
                $cont = 0;
                if($total > 0){
                    do{
                ?>
                <div>
                    <a href= "compra.php?id=<?=$linha['id']?>">
                        <img src="<?=$linha['img1']?>">
                        <h4><?=$linha['nome']?></h4>
                        <p>R$<?=number_format($linha['preco'], 2, ',', '.')?> (-<?=$linha['desconto']?>%)</p>
                    </a>
                </div>
                <?php
                    $cont++;
                    if($cont >= 4){
                        break;
                    }
                    }while($linha = mysqli_fetch_assoc($result));
                }
                ?>
            <button id="btnmais"><a href="produtos.php">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill= "black" x="0px" y="0px"
	 width="55px" height="55px" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve">
	<g id="keyboard-arrow-right">
		<polygon points="58.65,267.75 175.95,153 58.65,35.7 94.35,0 247.35,153 94.35,306"/>
	</g>
                </svg>
            </a>
            </button>
        </container>
    </main>
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