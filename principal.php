<?php

    require_once "Produto.php";

    $produto = new Produto("001", "camisa", 10);

    $produto->imprimeProduto();

    $produto = null;
?>