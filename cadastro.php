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
            <h6 style="font-size: 20px; margin-top:0;">Faça seu login</h6>
            <div>
                <form action="cadastrar.php" method="POST">

                    <h6 style="font-size: 20px; margin: 8px;">Nome:</h6>
                    <input type="text" required name="nome" style="outline: unset; border: 1px solid #646f83; border-radius: 26px;font-size: inherit; height: 40px; width: 250px; font-size: 17px;"><br>
                    <h6 style="font-size: 20px; margin: 8px;">Email:</h6>
                    <input type="email" name="email" id="" required style="outline: unset; border: 1px solid #646f83; border-radius: 26px;font-size: inherit; height: 40px; width: 250px; font-size: 17px;"><br>
                    <h6 style="font-size: 20px; margin: 8px;">CPF:</h6>
                    <input type="text" name="CPF" required style="outline: unset; border: 1px solid #646f83; border-radius: 26px;font-size: inherit; height: 40px; width: 250px; font-size: 17px;"><br>
                    <h6 style="font-size: 20px; margin: 8px;">Senha:</h6>
                    <input type="password" name="senha" placeholder="Senha" required style="outline: unset; border: 1px solid #646f83; border-radius: 26px;font-size: inherit; height: 40px; width: 250px; font-size: 17px;"><br>
                    <h6 style="font-size: 20px; margin: 8px;">Confirmar Senha:</h6>
                    <input type="password" name="confsenha" placeholder="Confirme a Senha" required style="outline: unset; border: 1px solid #646f83; border-radius: 26px;font-size: inherit; height: 40px; width: 250px; font-size: 17px;"><br>
                    <input type="submit" value="Continuar" id="continuar" style="outline: unset; border: 1px solid #646f83; border-radius: 26px;font-size: inherit; background-color: black; color: white; height: 45px; width: 100px; font-size: 17px;">
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