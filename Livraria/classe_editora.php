<?php
    class Editora extends Pessoa {
        public function __construct(
            private string $cnpj = "",
            string $nome = ""
        )
        {
            parent:: __construct($nome);
        }

        public function getCnpj(){
            return $this -> cnpj;
        }

        public function setCnpj($novo_cnpj){
            $this -> cnpj = $novo_cnpj;
        }


    }






?>