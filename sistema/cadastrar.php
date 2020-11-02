<?php

    require_once 'classes/Cadastro.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $cadastro = new Cadastro($nome, $telefone, $email);
    $cadastro->inserir();
    $cadastro->exibir();

    header("Location: lista_usuarios.php");
?>