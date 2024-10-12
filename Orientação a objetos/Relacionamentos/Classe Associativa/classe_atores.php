<?php
    /*A classe associativa faz a conexão entre duas outras classes
    Exemplo: Ator e Filme, que se associaçam através da classe Papel*/

    class Ator {
        public function __construct(
            private string $nome = ""){}


        public function getNome(){
            return $this->nome;
        }

        
    }
?>