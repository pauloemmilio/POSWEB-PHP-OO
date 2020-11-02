<?php

    require_once 'autoload.php';

    use Classes\Funcionario;
    use Classes\Gerente;
    use Classes\Programador;

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $cargo = $_POST['cargo'];
    $obs = $_POST['obs'];

    if($cargo == 1) {
        $funcionario = new Gerente($nome, $salario, $obs);
    }
    else {
        $funcionario = new Programador($nome, $salario, $obs);
    }

    $funcionario->relatorioFunc(); 
?>