<?php

    require_once 'classes/Cadastro.php';

    // 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
    $servidor = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

    $tabela = $servidor->query("SELECT codigo, nome, telefone, email FROM cadastro");

    if($tabela) {
        echo "
        <table border='1'>
            <tr>
                <td>NOME</td>
                <td>TELEFONE</td>
                <td>E-MAIL</td>
            </tr>
        ";
        foreach($tabela as $linha) {
            $cadastro = new Cadastro($linha['nome'], $linha['telefone'], $linha['email']);
            $cadastro->exibir();
        }
        echo "</table>";
    }

    echo "
    <br/>
    <a href='index.html'>Cadastrar novo</a>
    ";

    $servidor = null;

?>