<?php

    class Modelo{
        public function __construct(
            private string $descritivo = "",
            private array $aparelho = array()
        ){}

        public function getDescritivo(){
            return $this->descritivo;
        }

        public function setDescritivo($novo_desc){
            $this->descritivo = $novo_desc;
        }

        public function getAparelho(){
			return $this->aparelho;
		}
		
		public function setAparelho(Aparelho $novo_aparelho){
			$this->aparelho[] = $novo_aparelho;
		}


    }

?>