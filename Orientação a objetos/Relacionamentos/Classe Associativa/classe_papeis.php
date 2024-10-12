<?php

    class Papel {
        public function __construct(
            private string $nome = "",
            private $filme = null,
            private $ator = null){}


        public function getNome(){
            return $this->nome;
        }

        public function getFilme(){
            return $this->filme;
        }

        public function getAtor(){
            return $this->ator;
        }

        
    }
?>