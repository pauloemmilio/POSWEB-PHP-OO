<?php

    class Cadastro
    {
        private $nome;
        private $telefone;
        private $email;

        public function __construct($nome, $telefone, $email)
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function inserir()
        {
            $servidor = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

            $consultaPrep = $servidor->prepare("INSERT INTO cadastro (nome, telefone, email) VALUES (:nome, :telefone, :email)");
            $consultaPrep->bindParam(':nome', $this->nome);
            $consultaPrep->bindParam(':telefone', $this->telefone);
            $consultaPrep->bindParam(':email', $this->email);

            $consultaPrep->execute();

            $servidor = null;
        }

        public function exibir()
        {
            echo "
            <tr>
                <td>" . $this->nome . "</td>
                <td>" . $this->telefone . "</td>
                <td>" . $this->email . "</td>
            </tr>";
        }
    }
?>