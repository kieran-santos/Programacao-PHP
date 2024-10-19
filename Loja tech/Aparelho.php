<?php

    class Aparelho{
        public function __construct(
            private string $descritivo = "",
            private $cliente = null,
            private $modelo = null
        ){}

        public function getDescritivo(){
            return $this->descritivo;
        }

        public function setDescritivo($novo_desc){
            $this->descritivo = $novo_desc;
        }

        public function getCliente(){
            return $this->cliente;
        }

        public function setCliente($novo_cliente){
            $this->cliente = $novo_cliente;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($novo_modelo){
            $this->modelo = $novo_modelo;
        }
        

    }

?>