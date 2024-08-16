<?php
    namespace PHP;
    session_start();

    require_once('../Modelo/DAO/consultar.php');
    require_once('../Modelo/DAO/conexao.php');

    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;

    $conexao = new Conexao;
    $consultar = new Consultar;

    $login = "";
    $senha = "";

    class Login{
        public $login = "";
    }

    
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
    <title>Login</title>
</head>
<body style="background-image: url(../Imagens/fundoLivros.jpg)">
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-center"><!--precisa centralizar-->
        <span class="navbar-brand mb-0 h1" style="font-weight: bold;">Sistema de Venda de Livro</span>
    </div>
    </nav>

    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body text-center">
            <h4 class="card-title" style="margin-bottom: 10%;">BEM VINDO</h4>
            <form method="POST">
                <label>Login</label>
                <input style="margin-bottom: 10%;" type="text" name="login"> </input>
                <label>Senha</label>
                <input style="margin-bottom: 10%;" type="password" name="senha"> </input>
                    <?php
                        echo "<button style='margin-bottom: 5%;' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalLogin'>
                                ENTRAR
                              </button>";
                        
                        
                        //isset serve para retornar um valor true caso
                        // a variável tenha sido definida
                        if (isset($_POST['login']) && isset($_POST['senha']))
                        {
                            $login = $_POST['login'];
                            $senha = $_POST['senha'];

                            if($consultar->realizarLogin($conexao, $login, $senha, "usuario") == true){
                                $_SESSION['login'] = $login;
                                header("Location: livros.php"); //Vai para página iniciada
                            }
                            else{
                                echo "<br><text style='color: red; font-size: 200%'>Login Inválido!</text>";
                            }
                        }
                    ?>
            </form>
            <a href="./cadastro.php" style="text-decoration: none;"><text >Novo por aqui? Cadastre-se</text></a>
        </div>
    </div>
</body>
</html>