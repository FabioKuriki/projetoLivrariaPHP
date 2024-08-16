<?php
    namespace PHP;
    session_start();
    require_once('../Modelo/DAO/consultar.php');
    require_once('../Modelo/DAO/conexao.php');
    
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;

    $consultar = new Consultar();
    $conexao = new Conexao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Livros</title>
</head>
<body style="background-color: black">
    <nav class="navbar bg-body-tertiary">
        <div class="row container-fluid">
        <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col justify-content-center"> 
                <a href="./login.php" style="text-decoration: none"><span class="navbar-brand mb-0 h1" style="font-weight: bold;">
                <?php
                echo "Bem vindo " . $consultar->pegarNome($conexao, $_SESSION['login'], "usuario"); ;
                ?>
                </span></a>
            </div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
            <!--<div  class="justify-content-end">TESTE</div>-->
            </div>
        </div>
    </nav>
    <br>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col"></div>
            <div class="col mb-3 ">
                <div class="card" style="width: 18rem;">
                    <img src="../Imagens/livro1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Memórias Póstumas de Brás Cubas</h5>
                        <p class="card-text">R$50,00</p>
                        <a href="./livroEscolhido.php" class="btn btn-primary">COMPRAR
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img style="padding-bottom: 26%; padding-top: 26%" src="../Imagens/livro2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Clássicos Góticos</h5>
                        <p class="card-text">R$55,00</p>
                        <a href="./livroEscolhido2.php" class="btn btn-primary">COMPRAR
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img style="padding-bottom: 8%; padding-top: 16%" src="../Imagens/livro3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">A Revolução dos Bichos</h5>
                        <p class="card-text">R$20,00</p>
                        <a href="./livroEscolhido3.php" class="btn btn-primary">COMPRAR</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img style="padding-bottom: 6%; padding-top: 16%" src="../Imagens/livro4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">O menino que tinha medo de ERRRAR</h5>
                        <p class="card-text">R$15,00</p>
                        <a href="./livroEscolhido4.php" class="btn btn-primary">COMPRAR</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img style="padding-bottom: 1%;"src="../Imagens/livro5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Obras Revolucionárias de George Orwell</h5>
                        <p class="card-text">R$25,90</p>
                        <a href="./livroEscolhido5.php" class="btn btn-primary">COMPRAR</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../Imagens/livro6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Caminho Suave</h5>
                        <p class="card-text">R$30,00</p>
                        <a href="./livroEscolhido6.php" class="btn btn-primary">COMPRAR</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <br>
    </div>
    
</body>
</html>


?>