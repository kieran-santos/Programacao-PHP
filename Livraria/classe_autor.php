<?php
    class Autor extends Pessoa {
        public function __construct(
            private string $nacionalidade = "",
            string $nome = "",
            private array $livro = array())
        {
            parent:: __construct($nome);
        }

        public function getNacionalidade(){
            return $this -> nacionalidade;
        }

        public function setNacionalidade($nova_nac){
            $this -> nacionalidade = $nova_nac;
        }

        public function getLivro(){
            return $this -> $livro;
        }

        public function setLivro(Livro $novo_livro){
            $this -> livro[] = $novo_livro;
        }
        
    }

?>