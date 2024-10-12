<?php
    //Criando uma classe

    class Cliente {
       /* //Atributos
        public string $nome;            //public é a visibilidade do atributo - em qualquer lugar da aplicação você pode acessar
        public string $sobrenome;
        public string $cpf;

        //Métodos
        public function inserir(){
            echo "Estou no inserir"
        }*/
        
        public function __construct(
            public INT $id_cli = 0,
            public string $nome_cli = "",
            public string $sobrenome_cli = "",
            public string $cpf_cli = ""){}

        public function inserir($conexao){
            $sql = "INSERT INTO cliente (nome_cli, sobrenome_cli, cpf_cli)
                VALUES(?,?,?)";
            $stm = $conexao->prepare($sql); //é preciso preparar a frase sql, caso contrário ela será lida coo string
            $stm->bindValue(1,$this->nome_cli); //isso serve pra não ter injeção de SQL,
            $stm->bindValue(2,$this->sobrenome_cli); //$this faz referência a esse objeto
            $stm->bindValue(3,$this->cpf_cli);
            $stm->execute();
            return "Cliente inserido com sucesso";
        }   

        public function conexao(){
            //parametros para abrir conexão com o banco, utilizando a classe PDO
            $parametros = "mysql:host=localhost;dbname=exemplo_php;charset=utf8mb4";
            //instanciando um objeto da classe PDO, que é uma classe que vem com o PHP
            $conexao = new PDO($parametros, /*usuario do banco*/ "root", /*senha do banco (se tiver)*/"");
            return $conexao; //retornando a conexão aberta
        }

        public function buscar_clientes ($conexao){
            $sql = "SELECT * FROM cliente";
            $stm = $conexao -> prepare($sql);
            $stm -> execute();
            return $stm -> fetchAll(PDO::FETCH_OBJ); //no formato de objeto
        }
    }
?>