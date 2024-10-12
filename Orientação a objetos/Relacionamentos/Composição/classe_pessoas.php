<?php

    /*Pessoa é o todo pois Endereço saiu dele*/
    /*Na composição, a parte vem com todos os atributos e não como array*/ 
    /*Na composição eles tem um relacionamento forte, enquanto pessoa existir
    endereço também tem que existe e vice versa*/
    /*É o único relacionamento em que temos que criar o objeto dentro da classe*/

    class Pessoa {
        public function __construct(
            private string $nome = "",
            private string $cpf = "",
            string $logradouro = "",
            string $numero = "",
            string $cep = "",
            $pessoa = null)
            
            {$this->endereco[] = new Endereco($logradouro, $numero, $cep, $pessoa);}
            /*aqui ele está criando mais um atributo*/

        public function getNome(){
            return $this -> nome;
        }

        public function getCpf(){
            return $this -> cpf;
        }

        public function getEndereco(){
            return $this -> endereco;
        }

        public function setEndereco($novo_logradouro, $novo_numero, $novo_cep, $nova_pessoa){
            $this -> endereco[] = new Endereco($novo_logradouro, $novo_numero, $novo_cep, $nova_pessoa);
        }
    }
?>