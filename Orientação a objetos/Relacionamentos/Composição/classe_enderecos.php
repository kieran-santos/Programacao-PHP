<?php

    /*Temos uma relação bilateral então precisamos criar pessoa
    dentro de endereço e endereço dentro de pessoa
    */

    /*Apenas a última versão do php permite que seja fortemente tipado
    private Pessoa $pessoa =  new Pessoa()*/


    class Endereco {
        public function __construct(
            private string $logradouro = "",
            private string $numero = "",
            private string $cep = "",
            private $pessoa = null){}   
                                                        
        public function getLogradouro(){
            return $this -> logradouro;
        }

        public function getNumero(){
            return $this -> numero;
        }

        public function getCep(){
            return $this -> cep;
        }

        public function getPessoa(){
            return $this -> pessoa;
        }


    }




?>