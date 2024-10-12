<?php
    class Livro extends Publicacao{
        public function __construct(
            private string $sinopse = "",
            private string $isbn = "",
            private array $autor = array(),
            private array $genero = array(),
            string $data_publi = "",
            string $titulo = "",
            string $cnpj = "",
            string $nome = ""         
        )
        {
            parent:: __construct($data_publi, $titulo, $cnpj, $nome);
        }

        public function getSinopse(){
            return $this -> sinopse;
        }

        public function setSinopse($nova_sinopse){
            $this -> sinopse = $nova_sinopse;
        }

        public function getIsbn(){
            return $this -> isbn;
        }

        public function setIsbn($novo_isbn){
            $this -> isbn = $novo_isbn;
        }

        public function getAutor(){
            return $this -> autor;
        }

        public function setAutor(Autor $novo_autor){
            $this -> autor[] = $novo_autor;
        }

        public function getGenero(){
            return $this -> genero;
        }

        public function setGenero(Genero $novo_genero){
            $this -> genero = $novo_genero;
        }

        public function getTitulo(){
            return $this -> titulo;
        }

        public function setTitulo($novo_titulo){
            $this -> titulo = $novo_titulo;
        }
    }

?>