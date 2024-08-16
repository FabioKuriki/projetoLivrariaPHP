<?php
    namespace PHP;
    session_start();

    require_once('../Modelo/DAO/inserir.php');
    require_once('../Modelo/DAO/conexao.php');
    require_once('../Modelo/DAO/consultar.php');

    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;

    $consultar = new Consultar();
    $inserir = new Inserir();
    $conexao = new Conexao();
    $cartao = "";
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
    <title>Livro Escolhido</title>
</head>
<body style="background-color: black">
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-center"><!--precisa centralizar-->
        <a href="./livros.php" style="text-decoration: none"><span class="navbar-brand mb-0 h1" style="font-weight: bold;">Sistema de Venda de Livro</span></a>
    </div>
    </nav>

    <div class="card container-fluid" style="width: 80rem; margin-top: 2%; padding: 2%">
        <div class="row">
            <div class="col">
                <img src="../Imagens/livro1.jpg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="col">
                <h5 class="card-title fw-bold">Memórias Póstumas de Brás Cubas</h5>
                <p style="text-align: justify" class="card-text">Não tive filhos, não transmiti a nenhuma criatura o legado da nossa miséria. 
                    Com essas palavras, o narrador de Memórias Póstumas de Brás Cubas resume a sua vida.
                    O tom assumido na obra, bem como as técnicas empregadas na composição romanesca, 
                    são alguns dos fatores que justificam o lugar de Machado de Assis entre os maiores escritores do século XIX. 
                    Neste romance repleto de digressões filosóficas, o escritor se vale da posição privilegiada de Brás Cubas, 
                    que, como defunto autor, narra as suas desventuras e revela as contradições da sociedade brasileira do século XIX, 
                    por meio de uma análise aprofundada de seus personagens.</p>
            </div>
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="card-text" style="font-size: 200%; font-weight: bold;">
                            R$50,00
                        </div>
                    </div>
                </div>
                <br><br>
                <a href="#" class="btn btn-primary" style="font-size: 200%" data-bs-toggle="modal" data-bs-target="#modalRealizarCompra">
                    COMPRAR
                </a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalRealizarCompra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Informe o número do seu cartão de crédito </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <input type="text" name="cartao"></input>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCompraRealizada" onclick="compraRealizada()">Inserir
                <?php
                    if(isset($_POST["cartao"])){
                        $cartao = $_POST["cartao"];
                        $cpf = $consultar->pegarCpf($conexao, $_SESSION['login'], "usuario");
                        $inserir->realizarCompra($conexao, $cartao, $cpf, date("Y-m-d"), 1);
                    }
                ?>
                </button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>   
        </div>
        </div>
    </div>
    </div>
</body>
</html>

<script>
    function compraRealizada()
    {
        alert("Compra realizada com sucesso!!!");
    }
</script>