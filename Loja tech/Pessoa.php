<?php

    class Pessoa {
        public function __construct(
            protected string $nome = "",
            int $ddd = 0,
            string $numero = "",
            $pessoa = null
        )
        {
            $this->telefone[] = new Telefone($ddd, $numero, $pessoa);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($novo_nome){
            $this->nome = $novo_nome;
        }
        
        public function getTelefone(){
			return $this->telefone;
		}
		
		public function setTelefone(int $ddd = 0, string $numero = "", $pessoa = null){
			$this->telefone[] = new Telefone($ddd, $numero, $pessoa);
		}

    }






?>