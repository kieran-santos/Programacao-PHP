<?php
    //Relação de composição: item deve conter emprestimo e não pode existir sem ele
    class Item{
        public function __construct(
            private string $data_devolucao = "",
            private $livro = null, 
            string $data_emprestimo = ""     
        )
        {
            $this->emprestimo = new Emprestimo ($data_emprestimo);
        }

        public function getDataDevolucao(){
            return $this -> data_devolucao;
        }

        public function setDataDevolucao($nova_dd){
            $this -> data_devolucao = $nova_dd;
        }

        public function getLivro(){
            return $this -> livro;
        }

        public function setLivro(Livro $novo_livro){
            $this -> livro = $novo_livro;
        }

        public function getEmprestimo(){
            return $this -> emprestimo;
        }

        public function setEmprestimo($novo_de){
            $this -> emprestimo = new Emprestimo($novo_de);
        }

    }

?>