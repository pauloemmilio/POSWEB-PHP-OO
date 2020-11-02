<?php

    class Produto
    {
        private $codigo;
        private $nome;
        private $preco;

        public function __construct($codigo, $nome, $preco) 
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->preco = $nome;
        }
        
        public function imprimeProduto() 
        {
            echo "cod: {$this->codigo}<br>";
        }

        public function __destruct() 
        {
            echo "destruct <br>";
        }
    }
?>