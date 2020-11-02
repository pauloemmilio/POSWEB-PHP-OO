<?php

    require_once 'classes/Funcionario.php';
    require_once 'classes/Gerente.php';
    require_once 'classes/Programador.php';

    $gerente = new Gerente("Ger", "10", "Proj");
    $gerente->relatorioFunc();

    $programador = new Programador("Dev", "10", "Java");
    $programador->relatorioFunc();
?>