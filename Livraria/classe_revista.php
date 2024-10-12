<?php
    class Revista extends Publicacao {
        public function __construct(
            private string $numero = "",
            private string $issn = "",
            string $data_publi = "",
            string $titulo = ""
        )
        {
            parent:: __construct($data_publi, $titulo);
        }

        public function getNumero(){
            return $this - numero;
        }

        public function setNumero($novo_numero){
            $this -> numero = $novo_numero;
        }

        public function getIssn(){
            return $this-> issn;
        }

        public function setIssn($novo_issn){
            $this -> issn = $novo_issn;
        }



    }





?>