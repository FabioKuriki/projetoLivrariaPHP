<?php
    namespace PHP;

    require_once('../Modelo/DAO/inserir.php');
    require_once('../Modelo/DAO/conexao.php');

    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;

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
                <img src="../Imagens/livro5.jpg" class="card-img-top img-fluid" alt="...">
            </div>
            <div class="col">
                <h5 class="card-title fw-bold">Obras Revolucionárias de George Orwell</h5>
                <p style="text-align: justify" class="card-text">George Orwell é um dos escritores mais 
                    importantes do século XX. Foi autor de romances, ensaios, críticas e artigos 
                    jornalísticos, com textos de fácil compreensão, inteligentes e críticos, apontando 
                    as injustiças sociais. Suas obras trazem oposição ao totalitarismo, o que as tornaram 
                    influentes na cultura popular, mas também na política. Conheça a essência de Orwell 
                    em 1984, A revolução dos bichos e Dentro da baleia e outros ensaios.</p>
            </div>
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="card-text" style="font-size: 200%; font-weight: bold;">
                        R$25,90
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
                        $inserir->realizarCompra($conexao, $cartao, '23165', 5);
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