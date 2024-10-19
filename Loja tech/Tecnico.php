<?php

    class Tecnico extends Pessoa {
        public function __construct(
            private string $especialidade = "",
            string $nome = "",
            int $ddd = 0,
            string $numero = "",
            $pessoa = null
        )
        {
            parent:: __construct($nome, $ddd, $numero, $pessoa);
        }

        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function setEspecialidade($nova_espec){
            $this->especialidade = $nova_espec;
        }
        
    }



?>