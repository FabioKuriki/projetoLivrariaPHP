<?php
    namespace PHP\Modelo;

    require_once("Usuario.php");

    $usuario1 = new Usuario("546.875.687-45", "Yasmin", "Rua Javi",
                            "(11)4646-8965", "20/07/2000", "yasmin123", "123");

    echo $usuario1->imprimir();



?>