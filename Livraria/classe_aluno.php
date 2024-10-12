<?php
    class Aluno extends Pessoa {
        public function __construct(
            private string $ra = "",
            string $nome = "")
        {
            parent:: __construct($nome);
        }

        public function getRa(){
            return $this -> ra;
        }

        public function setRa($novo_ra){
            $this -> ra = $novo_ra;
        }

        public function getNome(){
            return $this -> nome;
        }

        public function setNome($novo_nome){
            $this -> nome = $novo_nome;
        }
    }

?>