<?php
    namespace PHP\Modelo;

    require_once("Usuario.php");
    require_once("Livro.php");
    require_once("Compra.php");
    require_once("Reserva.php");

    $usuario1 = new Usuario("546.875.687-45", "Yasmin", "Rua Javi",
                            "(11)4646-8965", "20/07/2000", "fabio", "123");

    $livro1 = new Livro(1, "Aventura nas Estrelas", "Joseph Joestar", 5);

    $compra1 = new Compra(1, "1456-d4a5-433g", "546.875.687-45","29/07/2024", 1500, 2, 1);

    $reserva1 = new Reserva(1, "546.875.687-45", "28/07/2024", 2, "(11)4646-8965", 1);

    echo $usuario1->realizarLogin() . "<br>";
    if($usuario1->realizarLogin() == "Login Validado"){
        echo $livro1->consultarLivro() . "<br>";
        echo $livro1->realizarCompra() . "<br>";
        echo $livro1->decisao("sim") . "<br>";
    }

    echo "<br>Usuário: <br>" . $usuario1->imprimir() . 
         "<br>--------------------------------------";

    echo "<br>Livro: <br>" . $livro1->imprimir() . 
        "<br>--------------------------------------";

    echo "<br>Compra: <br>" . $compra1->imprimir() . 
        "<br>--------------------------------------";

    echo "<br>Reserva: <br>" . $reserva1->imprimir() . 
        "<br>--------------------------------------";

?>