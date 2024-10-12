<?php
    class Conta {
        public function __construct(
            protected string $agencia = "",
            protected string $numero = "",
            protected string $titular = "",
            protected float $saldo = 0.00){}

        public function getAgencia(){
            return $this -> agencia;
        }

        public function setAgencia(string $nova_agencia){ //é possível tipar a variável do parâmetro
            $this -> agencia = $nova_agencia;
        }

        public function getNumero(){
            return $this -> numero;
        }

        public function setNumero($novo_numero){
            $this -> numero = $novo_numero;
        }

        public function Sacar(float $valor){
            $this -> saldo = $this->saldo - $valor;
            //$this -> saldo -=$valor
        }

        public function Depositar(float $valor){
            $this -> saldo += $valor;
        }
    }

?>