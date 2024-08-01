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
        <span class="navbar-brand mb-0 h1" style="font-weight: bold;">Sistema de Venda de Livro</span>
    </div>
    </nav>

    <div class="card position-absolute top-50 start-50 translate-middle container-fluid justify-content-center" style="width: 18rem;">
        <div class="card-body ">
            <h4 class="card-title" style="text-align: center; margin-bottom: 10%;">Venha fazer parte!!!</h4>
            <form>
                <label >Nome</label>
                <input style="margin-bottom: 10%;" type="text" name="nome"> </input>
                <label>Endereço</label>
                <input style="margin-bottom: 10%;" type="text" name="endereco"> </input>
                <label>Telefone</label>
                <input style="margin-bottom: 10%;" type="number" name="telefone"> </input>
                <label>Data de Nascimento</label>
                <input style="margin-bottom: 10%;" type="date" name="dtNascimento"> </input>
                <label>Senha</label>
                <input style="margin-bottom: 10%;" type="password" name="senha"> </input>
                <button type="button" class="btn btn-primary">Cadastre-se</button>
            </form>
        </div>
    </div>
</body>
</html>