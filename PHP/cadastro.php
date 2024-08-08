<?php
    namespace PHP;

    require_once('./Modelo/DAO/inserir.php');
    require_once('./Modelo/DAO/conexao.php');
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;
    $inserir = new Inserir();
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
    <title>Cadastro</title>
</head>
<body style="background-image: url(./Imagens/fundoLivros.jpg)">
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-center"><!--precisa centralizar-->
        <a href="./login.php"><span class="navbar-brand mb-0 h1" style="font-weight: bold;">Sistema de Venda de Livro</span></a>
    </div>
    </nav>

    <div class="card position-absolute top-50 start-50 translate-middle container-fluid" style="width: 18rem;">
        <div class="card-body ">
            <h4 class="card-title" style="text-align: center; margin-bottom: 10%;">Venha fazer parte!!!</h4>
            <form class="text-center" method="POST">
                <label>CPF</label><br>
                <input style="margin-bottom: 10%;" type="text" name="cpf"> </input><br>
                <label >Nome</label>
                <input style="margin-bottom: 10%;" type="text" name="nome"> </input><br>
                <label>Endereço</label>
                <input style="margin-bottom: 10%;" type="text" name="endereco"> </input><br>
                <label>Telefone</label>
                <input style="margin-bottom: 10%;" type="number" name="telefone"> </input><br>
                <label>Data de Nascimento</label>
                <input style="margin-bottom: 10%;" type="date" name="dtNascimento"> </input><br>
                <label>Login</label>
                <input style="margin-bottom: 10%;" type="text" name="login"> </input><br>
                <label>Senha</label>
                <input style="margin-bottom: 10%;" type="password" name="senha"> </input>
                <button class="btn btn-primary">Cadastre-se
                    <?php
                        $cpf = $_POST['cpf'];
                        $nome = $_POST['nome'];
                        $endereco = $_POST['endereco'];
                        $telefone = $_POST['telefone'];
                        $dtNascimento = $_POST['dtNascimento'];
                        $login = $_POST['login'];
                        $senha = $_POST['senha'];

                        $inserir->cadastrar($conexao, $cpf, $nome, $endereco,
                                            $telefone, $login, $senha);
                    ?>
                </button>
            </form>
        </div>
    </div>
</body>
</html>