<?php

    namespace Classes;

    class Triangulo extends Figura
    {
        public function mostraArea()
        {
            echo(($this->x * $this->y)/2);
        }
    }
?>