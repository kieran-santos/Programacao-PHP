<?php

    /*Quando temos em uma associação um atributo que não tem como
    colocar em nenhuma das classes ele precisa ser criado separadamente
    como outra classe*/
    
    require_once "classe_enderecos.php";
    require_once "classe_pessoas.php";

    //De endereço vamos saber a quem ele pertence (pessoa)

    $pessoa1 = new Pessoa("Maria da Silva", "125.475.485-32");
    $endereco1 = new Endereco("Rua XV de Novembro", "123", "17854001", $pessoa1);

    /*echo"<pre>";
    var_dump($endereco1);
    echo"</pre>";*/

    echo"<h3>Endereço</h3>";
    echo"Logradouro: {$endereco1->getLogradouro()}<br>";
    echo"Número: {$endereco1->getNumero()}<br>";
    echo"CEP: {$endereco1->getCep()}<br>";
    echo"<h4>O endereço pertence a</h4>";
        echo"Nome: {$endereco1->getPessoa()->getNome()}<br>";
        echo"CPF: {$endereco1->getPessoa()->getCpf()}<br>";



    //De pessoa vamos saber quais são os endereços

    $pessoa2 = new Pessoa("João da Silva", "478.215.879-95", "Rua Ramos", "954", "17245895");
    /*Em uma composição não tem como colocar um objeto já criado dentro de outro
    então não teria como por por exemplo $endereco1 dentro de $pessoa2*/

    $pessoa2 -> setEndereco("Rua Pedro Alcantara", "74", "17485774", null);

    /*echo"<pre>";
    var_dump($pessoa2);
    echo"</pre>";*/

    echo "<h3>Dados da Pessoa</h3>";
    echo "Nome: {$pessoa2->getNome()}<br>";
    echo "CPF: {$pessoa2->getCpf()}<br>";
    echo "<h4>Endereços</h4>";
        /*Endereço é um array, então podemos fazer um loop*/    
        foreach($pessoa2->getEndereco() as $endereco)   //a variável $endereco acaba de ser criada
        {
            echo "Logradouro: {$endereco->getLogradouro()} - 
            {$endereco->getNumero()}<br>";
            echo "CEP: {$endereco->getCep()}<br><br>";
        }
        /*Lembrando que para atributos privados nós precisamos usar métodos gets*/
        /*Ele está pegando o primeiro elemento do array encontrado por getEndereco
        e colocando na variável $endereco*/
        /*O foreach percorre do índice 0 até o último automaticamente*/

?>