<?php
    //É preciso adicionar um novo atributo para fazer a ligação 
    // - como uma chave estrangeira
    //Se for bilateral nós colocamos o atributo nas duas tabelas
    //No diagrama/modelo não vai ter esse atributo
    //Neste atributo são salvos objetos
    //Este atributo é um array para poder guardar vários objetos

    class Produto {
        public function __construct(
            private string $nome = "",
            private string $descricao = "",
            private float $preco = 0.00,
            private int $estoque = 0,
            private array $fornecedor = array()){}


        public function getNome(){
            return $this -> nome;
        }    

        public function setNome($novo_nome){
            $this -> nome = $novo_nome;
        }
        
        public function getDescricao(){
            return $this -> descricao;
        }  

        public function setDescricao($nova_descricao){
            $this -> descricao = $nova_descricao;
        }

        public function getPreco(){
            return $this -> preco;
        }  

        public function setPreco($novo_preco){
            $this -> preco = $novo_preco;
        }

        public function getEstoque(){
            return $this -> estoque;
        }  

        public function setEstoque($novo_estoque){
            $this -> estoque = $novo_estoque;
        }

        public function getFornecedor(){
            return $this -> fornecedor;
        }  

        public function setFornecedor(Fornecedor $novo_fornecedor){
            $this -> fornecedor[] = $novo_fornecedor;
        }


        


        }




?>