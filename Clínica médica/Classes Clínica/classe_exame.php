<?php
    class Exame extends Servico {
        public function __construct(
            private int $id_exame = 0,
            private string $medidaPreventiva = "",
            private string $tipo = "",
            float $preco = 0.00,
            string $descricao = "")
            {
                parent:: __construct($preco, $descricao);
            }
        
        public function getMedida(){
            return $this -> medidaPreventiva;
        }
    
        public function setMedida($nova_medida){
            $this -> medidaPreventiva = $nova_medida;
        }
        
        public function getTipo(){
            return $this -> tipo;
        }
    
        public function setTipo($novo_tipo){
            $this -> tipo = $novo_tipo;
        }
    }
?>