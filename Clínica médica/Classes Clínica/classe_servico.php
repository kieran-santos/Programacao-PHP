<?php 

    class Servico {
        public function __construct(
            protected float $preco = 0.00,
            protected string $descricao = ""){}

        public function getPreco(){
            return $this -> preco;
        }
        
        public function setPreco($novo_preco){
            $this -> preco = $novo_preco;
        }
    
        public function getDescricao(){
            return $this -> descricao;
        }
        
        public function setDescricao($nova_descricao){
            $this -> descricao = $nova_descricao;
        }

        public function conexao(){
            $parametros= "mysql:host=localhost;dbname=clinica_php;charset=utf8mb4"
            $conexao = new PDO($parametros, root, "");
            return $conexao;
        }

        public function registrarServico($conexao)
        {
            $sql = "INSERT INTO servicos (preco, descricao)
            VALUES(?,?)";
            $stm = $conexao->prepare($sql);
            $stm->bindValue(1,$this->preco);
            $stm->bindValue(2,$this->descricao);
            $stm->execute();
            return "Serviço registrado";
        }

        public function getRecuperarServiço(){
            return $this -> $historico;
        }
    }
?>