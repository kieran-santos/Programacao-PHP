<?php
	class Cliente
	{
		//Atributos
		
		public function __construct(
			public string $nome = "",
			public string $sobrenome = "",
			public string $cpf = ""){}
		
		//métodos
		public function inserir()
		{
			echo "Estou no inserir";
		}
	}//fim da classe
?>