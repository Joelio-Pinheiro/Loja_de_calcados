<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
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
                <div><a href="file:///C:/Users/joeli/Desktop/JO%C3%89LIO/Infor3/Loja_de_calcados/produtos.php#ofertas">OFERTAS</a></div>
                <div><a href="produtos.php">PRODUTOS</a></div>
                <div><a href="index.php">HOME</a></div>
                <div id="icon" style="margin-right: 30%;"><a href="index.php"><img src="imgs/360x600.png" width="70 px" height="40px"></a></div>
            </container>
    </header>
    <main>
        <container id="produto" class="pdt">
            <div id="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-530" src="https://images.lojanike.com.br/1024x1024/produto/tenis-nike-air-jordan-i-mid-unissex-554724-113-1.png" alt="Primeiro Slide" width="530 px" height="530px">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-530" src="https://images.lojanike.com.br/1200x630/produto/tenis-air-jordan-i-mid-edicao-especial-masculino-852542-800-1.png" alt="Segundo Slide" width="530 px" height="530px">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-530" src="https://images.lojanike.com.br/1024x1024/produto/tenis-nike-air-jordan-i-mid-unissex-554724-113-1.png" alt="Terceiro Slide" width="530 px" height="530px">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span style="background-color: black; border-radius: 50%; width: 35px; height: 35px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      </span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="color: black;">
                      <span style="background-color: black; border-radius: 50%; width: 35px; height: 35px;">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="color: black;"></span>
                      </span>
                      <span class="sr-only" style="color: black;">Próximo</span>
                    </a>
                  </div>
            </div>
            <div>
                Basquete/Casual
                <h1 id="canome">Tênis Air Jordan <br>
                    1 Mid Se Masculino
                    <nav style="font-size: 20pt; margin-top: 5px;">
                      R$999,99
                      <button id="adicionar"><img src="imgs/gv.png" width="40px" height="40px" alt="Adicionar ao Carrinho"></button>
                    </nav>
                </h1>
                <a href="#">
                    <input type="button" value="COMPRE AGORA" id="compra" class="cmp" style="margin-left: 0; margin-top: 7%; margin-bottom: 0; width: 80%;">
                </a>
            </div>
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
      <div class="modal-1" style="width: 23%; height: 36%;">
          <button id="btnfechar">x</button>
          <div><img src="imgs/p.png" width="150px" height="150px"></div>
          <?php
            echo"<div><hr><h2 style='font-size: 20pt; margin: 10px; font-weight: bold; font-family: 'Times New Roman', Times, serif;'>{$_SESSION['nome']}</h2></div>";
            echo"<div><hr><h2 style='font-size: 13pt; margin: 15px; font-weight: bold; font-family: 'Times New Roman', Times, serif;'>{$_SESSION['email']}</h2><hr></div>";
          ?>
          <a href="logout.php" id="btnpro" style="display: flex; text-align: center;text-decoration: none; align-items: center;justify-content: center;">SAIR</a>
      </div>
  </div>
    <br><br><br>
    <footer id="rodape" style="position: relative;">
      <iframe src="footer.html" scrolling="no" name="myIFrame" frameborder="0" id="frame"></iframe>
      <div id="final"></div>
  </footer>
    <script src="js/menu.js"></script>
    <script src="js/carrinho.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>