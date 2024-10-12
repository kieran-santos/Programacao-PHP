<?php

    class Poupanca extends Conta {
        public function __construct(
            private int $aniversario = 0,
            string $agencia = "",
            string $numero = "",
            string $titular = "",
            float $saldo = 0.00)
            {
                parent:: __construct($agencia, $numero, $titular, $saldo);
            }  //é só o dia, php não tem DATE tem que ser string
        
        public function getAniversario(){
            return $this -> aniversario;
        }
    
        public function setAniversario($novo_aniversario){
            $this -> aniversario = $novo_aniversario;
        }
    }
?>