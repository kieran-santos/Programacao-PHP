<?php
    class Emprestimo {
        public function __construct(
            private string $data_emprestimo = "",
            private $aluno = null,     
            private array $item = array()               
        ){}

        public function getDataEmp(){
            return $this -> data_emprestimo;
        }

        public function setDataEmp($nova_data){
            $this -> data_emprestimo = $nova_data;
        }

        public function getAluno(){
            return $this -> aluno;
        }

        public function setAluno(Aluno $novo_aluno){
            $this -> aluno = $novo_aluno;
        }

        public function getItem(){
            return $this -> item;
        }

        public function setItem(Item $novo_item){
            $this -> item[] = $novo_item;
        }

    }




?>