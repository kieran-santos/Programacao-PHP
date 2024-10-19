<?php

    class Telefone {
        public function __construct(
            private int $ddd = 0,
            private string $numero = "",
            private $pessoa = null
        ){}

        public function getDdd(){
            return $this->ddd;
        }

        public function setDdd($novo_ddd){
            $this->ddd = $novo_ddd;
        }

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($novo_numero){
            $this->numero = $novo_numero;
        }
        
        public function getPessoa(){
            return $this->pessoa;
        }

        public function setPessoa($nova_pessoa){
            $this->pessoa = $nova_pessoa;
        }

    }




?>