<?php
    class Genero {
        public function __construct(
            private string $descritivo = "",
            private array $livro = array()){}

        public function getDescritivo(){
            return $this -> descritivo;
        }

        public function setDescritivo($novo_descritivo){
            $this -> descritivo = $novo_descritivo;
        }

        public function getLivro(){
            return $this -> livro;
        }

        public function setLivro(Livro $novo_livro){
            $this -> livro[] = $novo_livro;
        }
    }

?>