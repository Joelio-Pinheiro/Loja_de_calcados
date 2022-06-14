<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <title>LOGIN</title>
</head>
<body>
    <header>
        <container id="cab">
            <form action="" id="busca">
                <input type="text" style="margin-right: 10px;" id="inpbus" placeholder="Pesquisar">
                <input type="submit" value="Buscar" id="btnbus">
              </form>
                <div><button id="btncar"><img src="imgs/gv.png" width="30 px" height="30px"></button></div>
                <div><a href="login.html"><img src="imgs/s.png" width="30px" height="30px"></a></div>
                <div><a href="produtos.php?#ofertas">OFERTAS</a></div>
                <div><a href="produtos.php">PRODUTOS</a></div>
                <div><a href="index.php">HOME</a></div>
                <div id="icon" style="margin-right: 30%;"><a href="index.php"><img src="imgs/360x600.png" width="70 px" height="40px"></a></div>
            </container>
    </header>
    <main>
        <container id="login">
            <div><img src="imgs/p.png" id="log"></div>
            Faça seu login<br>
            <div>
                <form action="cadastrar.php" method="POST">
                    Nome:<br>
                    <input type="text" required name="nome"><br>
                    E-mail:<br>
                    <input type="email" name="email" id="" required><br>
                    CPF:<br>
                    <input type="text" name="CPF" required><br>
                    Senha:<br>
                    <input type="password" name="senha" required><br>
                    Confirme a Senha:<br>
                    <input type="password" name="confsenha" required><br>
                    <input type="submit" value="Continuar" id="continuar">
                </form>
            </div>
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
        </container>
        <script src="js/menu.js"></script>
    </main>
    <br><br><br>
    <footer id="rodape" style="position: relative;">
        <iframe src="footer.html" scrolling="no" name="myIFrame" frameborder="0" id="frame"></iframe>
        <div id="final"></div>
    </footer>
</body>
</html>