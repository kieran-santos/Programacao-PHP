<?php
    /*Adicionei minhas dúvidas em comentários*/
    class Paciente {
        public function __construct(
            private int $id_pac = 0,
            private string $nome = "",
            private string $rg = "",
            private string $endereco = "",
            private string $telefone = "",
            private string $data_nasc = "",
            private string $profissao = ""
        ){}

        public function getNome(){      //Os get setters servem pra acessar os atributos privados fora da classe, se o atributo for público não precisa
            return $this -> nome;
        }

        public function setNome($novo_nome){
            $this -> nome = $novo_nome;
        }

        public function getRg(){
            return $this -> rg;
        }

        public function setRg($novo_rg){
            $this -> rg = $novo_rg;
        }

        public function getEndereco(){
            return $this -> endereco;
        }

        public function setEndereco($novo_endereco){
            $this -> endereco = $novo_endereco;
        }

        public function getTelefone(){
            return $this -> telefone;
        }

        public function setTelefone($novo_telefone){
            $this -> telefone = $novo_telefone;
        }

        public function getDataNasc(){
            return $this -> data_nasc;
        }

        public function setDataNasc($nova_data){
            $this -> data_nasc = $nova_data;
        }

        public function getProfissao(){
            return $this -> profissao;
        }

        public function setProfissao($nova_profissao){
            $this -> profissao = $nova_profissao;
        }

        public function conexao(){
            $parametros= "mysql:host=localhost;dbname=clinica_php;charset=utf8mb4"
            $conexao = new PDO($parametros, root, "");
            return $conexao;
        }

        public function verificarPaciente ($conexao){
            $sql = "SELECT * FROM pacientes";
            $stm = $conexao -> prepare($sql);
            $stm -> execute();
            return $stm -> fetchAll(PDO::FETCH_OBJ);
        }

        public function AdicionarPaciente($conexao){
            $sql = "INSERT INTO pacientes (nome_pac, rg_pac, endereco_pac, telefone_pac, data_nasc_pac, profissao_pac)
                    VALUE(?,?,?,?,?,?)";
            $stm = $conexao->prepare($sql);
            $stm->bindValue(1,$this->nome_pac);
            $stm->bindValue(2,$this->rg_pac);
            $stm->bindValue(3,$this->endereco_pac);
            $stm->bindValue(4,$this->telefone_pac);
            $stm->bindValue(5,$this->data_nasc_pac);
            $stm->bindValue(6,$this->profissao_pac);
            return "Paciente inserido";
        }

        public function ObterPaciente(){
            /*Não entendi a diferença entre Verificar Paciente e Obter Paciente*/
        }

        public function getObterConsulta(){
            return $this -> $historico;
            /*Aqui não sei como fazer uma função que vai pegar
            um valor que está em outra tabela (como conectar
            as tables???)*/
        }
    
        public function AdicionarConsulta(){
            /*Ainda não aprendi a adicionar algo na tabela pacientes que depende da tabela consulta*/
        }

        public function getLocalizarPaciente(){
            /*Não entendi, localizar o ID do paciente??*/
        }
    
        public function CadastrarPaciente(){
            /*Não é a mesma coisa que adicionar paciente?*/
        }
    }
?>