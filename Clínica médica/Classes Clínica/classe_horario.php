<?php
    class Horario {
        public function __construct(
            private string $data = "",
            private string $hora = ""
        ){}

        public function getData(){
            return $this -> data;
        }
    
        public function setData($nova_data){
            $this -> data = $nova_data;
        }

        public function getHora(){
            return $this -> hora;
        }
    
        public function setHora($nova_hora){
            $this -> hora = $nova_hora;
        }

        public function getHorariosDisponiveis(){
            /*Eu sei pegar os horários cadastrados,
            mas não os que ainda estão vazios, teria
            que usar um if??
            Sei fazer usando sql com select, mas não
            com método*/
        }

        public function setAlterarDisponibilidadeHorario($novo_horario){
            $this -> horario = $novo_horario;
        }
    }
?>