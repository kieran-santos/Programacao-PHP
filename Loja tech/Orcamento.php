<?php

    class Orcamento{
        public function __construct(
            private string $data_orcamento = "",
            private float $preco = 0,
            private string $data_validade = "",
            private $tecnico = null,
            private $aparelho = null
        ){}

        public function getDataOrc(){
            return $this->data_orcamento;
        }

        public function setDataOrc($nova_data_orc){
            $this->data_orcamento = $nova_data_orc;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($novo_preco){
            $this->preco = $novo_preco;
        }

        public function getDataVal(){
            return $this->data_validade;
        }

        public function setDataVal($nova_data_val){
            $this->data_validade = $nova_data_val;
        }

        public function getTecnico(){
            return $this->tecnico;
        }

        public function setTecnico($novo_tecnico){
            $this->tecnico = $novo_tecnico;
        }

        public function getAparelho(){
            return $this->aparelho;
        }

        public function setAparelho($novo_aparelho){
            $this->aparelho = $novo_aparelho;
        }
    }




?>