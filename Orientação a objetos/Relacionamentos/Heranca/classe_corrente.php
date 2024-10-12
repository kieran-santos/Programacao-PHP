<?php

    //Não precisa fazer require nas classes pois o require no objeto já vai conectar tudo
    class Corrente extends Conta { //o extends indica a herança
        public function __construct(
            private float $limite = 0.00,
            string $agencia = "",   //é assim que chamamos o atributos de Conta para esta classe
            string $numero = "",    //não é obrigado tipar
            string $titular = "",   //podemos passar o valor pra garantir que vai ter algo ali, mas não é obrigatório
            string $saldo = 0.00)
            {
                parent:: __construct($agencia, $numero, $titular, $saldo);
            }


        public function getLimite(){
            return $this -> limite;
        }
            
        public function setLimite($novo_limite){
            $this -> limite = $novo_limite;
        }
    }



?>