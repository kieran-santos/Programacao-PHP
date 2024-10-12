<?php
    class Ano {
        public function __construct(
            private int $ano = 0){}

        public function getAno(){
            return $this -> ano;
        }

        public function setAno($novo_ano){
            $this -> ano = $novo_ano;
        }

        public function AbrirAgenda(){
            /*Acredito que ainda não aprendi*/
        }

        public function ResgatarAgendaDia(){
            /*Acredito que ainda não aprendi
            Tem que conectar com a tabela horário?*/
        }

        public function ResgatarAgenda2dias(){
            /*Acredito que ainda não aprendi
            Tem que conectar com a tabela horário?*/
        }

        public function ResgatarAgendaSemana(){
            /*Acredito que ainda não aprendi
            Tem que conectar com a tabela horário?*/
        }
    }
?>