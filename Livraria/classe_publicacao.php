<?php
    class Publicacao{
        public function __construct(
            protected string $data_publi = "",
            protected string $titulo = "",
            string $cnpj = "",
            string $nome = ""
        )
        {
            $this->editora = new Editora($cnpj, $nome);
        }

        public function getDataPub(){
            return $this -> data_publi;
        }

        public function setDataPub($nova_data){
            $this -> data_publi = $nova_data;
        }

        public function getTitulo(){
            return $this -> titulo;
        }

        public function setTitulo($novo_titulo){
            $this -> titulo = $novo_titulo;
        }

        public function getEditora(){
            return $this -> editora;
        }

        public function setEditora(Editora $novo_cnpj, $novo_nome){
            $this -> editora = new Editora($novo_cnpj, $novo_nome);
        }

    }





?>