<?php
    if($_GET){  //o if serve pra ele executar apenas se for passado algum dado via GET

        require_once "classes.php";     //com o require se ele não encontrar esse arquivo ele nem executa - com o 'include' ele continua executando mesmo que de erro depois
                                        //ele vai pegar aquele código da classe e colocar aqui
        $obj = new Cliente(0, $_GET["nome"], $_GET["sobrenome"], $_GET["cpf"]); //aqui preciso colocar o 0 para ocupar o lugar do ID
                                    //aqui temos que passar o name do formulário no html
        /*$obj->nome = $_GET["nome"];     //esse GET é pra ele pegar o dado inputado no formulário através do método GET
        $obj->sobrenome = $_GET["sobrenome"];
        $obj->cpf = $_GET["cpf"];*/

        //abrindo a conexão com o banco
        $conect = $obj->conexao();
        $msg = $obj->inserir($conect);
        header("location:index.php?msg=$msg");
        die();

       /*echo "<pre>"; //tag html pra formatar o que será printado
        var_dump($obj); //vai mostrar as características dos dados inputados no objeto
        echo "</pre>";*/
    }

    else{
        header("location:form_cliente.html");      //caso nada seja enviado via GET ele vai rodar o else
    }                                       //esse header é o código pra redirecionar pro index.html - ele troca o cabeçalho da URL

/*Posso criar um construtor para não precisar ficar escrevendo as atribuições
toda vez que eu declarar um objeto - isso nós fazemos dentro da classe
*/



?>
