<?php
    class Limpeza extends Servico {
        public function __construct(
            private int $id = 0,
            private string $material = "",
            private string $dente = "",
            float $preco = 0.00,
            string $descricao = "")
            {
                parent:: __construct($preco, $descricao);
            }

        public function getMaterial(){
            return $this -> material;
        }
        
        public function setMaterial($novo_material){
            $this -> material = $novo_material;
        }        

        public function getDente(){
            return $this -> dente;
        }
        
        public function setDente($novo_dente){
            $this -> dente = $novo_dente;
        }  
    }
?>
