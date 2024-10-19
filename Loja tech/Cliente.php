<?php

    class Cliente extends Pessoa {
        public function __construct(
            private string $cpf = "",
            private array $aparelho = array(),
            string $nome = "",
            int $ddd = 0,
            string $numero = "",
            $pessoa = null
        )
        {
            parent:: __construct($nome, $ddd, $numero, $pessoa);
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($novo_cpf){
            $this->cpf = $novo_cpf;
        }
        
        public function getAparelho(){
			return $this->aparelho;
		}
		
		public function setAparelho(Aparelho $novo_aparelho){
			$this->aparelho[] = $novo_aparelho;
		}

    }

?>