<?php
    //A associação é uma relação bilateral, dos dois lados
    //É preciso encontrar a multiplicidade do relacionamento - através da cardinalidade
    //A relação entre as classes é feita pelo objeto - um objeto produto é relacionado a quantos objetos fornecedores? (1-1, n-1, n-n e etc.)
    //São de tipos diferentes

    require_once "class_fornecedor.php";
    require_once "class_produto.php";

    $produto1 = new Produto("Lápis Preto",
    "Lápis preto nº 6",
    3.20,
    1000);

    $produto2 = new Produto("Caixa de Lápis de Cor",
    "Caixa com 12 unidades",
    20,
    100);

    /*$produto3 = new Produto("Borracha", "Borracha macia", 3.1, 2000);*/
    /*Da pra colocar antes NESSE caso, mas as vezes na aplicação você não 
    vai conseguir colocar assim e vai precisar do método*/

    $fornecedor = new Fornecedor("Faber Castell",
    "00.000.0001/000-01",
    "(14)36261514",
    array($produto1, $produto2));

    $produto3 = new Produto("Borracha", "Borracha macia", 3.1, 2000);

    $fornecedor->setProduto($produto3);

    /*echo "<pre>";
    var_dump ($fornecedor);
    echo "</pre";*/

    echo "<h3>Fornecedor</h3>";
    echo"Razão Social: {$fornecedor->getRazaoSocial()}<br>";
    echo"CNPJ: {$fornecedor->getCnpj()}<br>";
    echo"Telefone: {$fornecedor->getTelefone()}<br>";
    echo"<h4>Produtos</h4>";
    foreach($fornecedor->getProduto() as $produto){     /*o primeiro parâmetro de um foreach é sempre uma matriz*/
        /*aqui precisamos usar os métodos gets que fizemos para produtos*/
        echo"Nome: {$produto->getNome()}<br>";
        echo"Descricao: {$produto->getDescricao()}<br>";

        $precoFormatado = number_format($produto->getPreco(), 2, ",", "."); /*primeiro parâmetro: qual número; segundo parâmetro: quantas casas decimais; terceiro: o que vai separar as decimais (aqui no caso é a vírgula); quarto: o que vai separar as casas de milhar (o ponto)*/
   
        echo"Preco: R$ $precoFormatado <br>";/*ele identifica a variável de formatação do número que criamos antes*/
        echo"Estoque: {$produto->getEstoque()}<br><br>";    
    } 

    /*Instanciar um objeto produto e associar pelo menos 2 fornecedores e mostrar os dados a
    partir do objeto produto*/

    $fornecedor1 = new Fornecedor ("Tilibra", "12.548.055/0001-56", "(14)8896-8745");

    $fornecedor2 = new Fornecedor ("Pilot", "78.231.547/0001-74", "(14)9987-4521");

    $produto4 = new Produto("Caderno", "100 folhas", 25.90, 50, array($fornecedor1)); /*poderia colocar aqui direto*/

    $produto4->setFornecedor($fornecedor2);

    echo"<h3>Produtos</h3>";
    echo"Nome: {$produto4->getNome()}<br>";
    echo"Descricao: {$produto4->getDescricao()}<br>";
    echo"Preço: " . number_format($produto4->getPreco(), 2, ",", ".") . "<br>";
    echo"Estoque: {$produto4->getEstoque()}<br>";
    echo"<h4>Fornecedores</h4>";
    foreach($produto4->getFornecedor() as $dados){
        echo"Razão Social: {$dados->getRazaoSocial()}<br>";
        echo"CNPJ: {$dados->getCnpj()}<br>";
        echo"Telefone: {$dados->getTelefone()}<br><br>";
    };


?>