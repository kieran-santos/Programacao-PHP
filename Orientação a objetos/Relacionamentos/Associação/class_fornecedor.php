<?php
    class Fornecedor {
        public function __construct(
            private string $razaoSocial = "",
            private string $cnpj = "",
            private string $telefone = "",
            private array $produto = array()){}
            
        public function getRazaoSocial(){
            return $this -> razaoSocial;
        }

        public function getCnpj(){
            return $this -> cnpj;
        }

        public function getTelefone(){
            return $this -> telefone;
        }

        public function getProduto(){
            return $this -> produto;
        }

        /*precisamos de um método que coloque mais produtos no array*/

        public function setProduto(Produto $novo_produto){  /*aqui precisamos definir a classe do novo objeto que será inserido*/
            $this->produto[] = $novo_produto;       /*ele segue a ordem da matriz, se as posições 0 e 1 já estão ocupadas então ele cria o 2, depois o 3 e etc.)*/
        }

    }



?>