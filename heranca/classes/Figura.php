<?php

    namespace Classes;

    class Figura
    {
        protected $x;
        protected $y;

        public function mostraArea()
        {
            echo ($this->x * $this->y);
        }
    }
?>