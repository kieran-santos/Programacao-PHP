<?php
    
    require_once "classe_paciente.php"; 

    class Consulta {
        public function __construct(
            private string $historico = ""
        ){}

        public function getHistorico(){
            return $this -> historico;
        }

        public function setHistorico($novo_historico){
            $this -> historico = $novo_historico;
        }

        public function registrarConsulta($conexao){
            $sql = "INSERT INTO consulta (historico)
                    VALUE(?)";
            $stm = $conexao->prepare($sql);
            $stm->bindValue(1,$this->historico);
            return "Registrado";
        }
        
        public function getRecuperarHistorico(){
            return $this -> $historico;
        }

    }


?>