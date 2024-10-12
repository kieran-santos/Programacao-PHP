<?php

    require_once "class_categoria.php";
    require_once "class_produto.php";

    $categoria = new Categoria("Material Escolar");
    
    $produto1 = new Produto("Caderno", "100 folhas", 25.90, 50, $categoria);
    $produto2 = new Produto("Apontador", "Metal", 5.50, 500, $categoria); 
    /*Categoria não precisa ser array pq um produto só pode ter uma categoria*/
    /*Ter uma relação fraca significa que se um produto que tem uma categoria
    deixar de existir a categoria continua lá, ou seja, relação forte
    é uma relação depentende, um não existem sem o outro*/
    /*Aqui categoria é a parte e produto é o todo, pois na diagramação
    nós tiramos o atributo categoria de produto e colocamos como uma
    nova tabela*/

    echo "<h3>Produto 1</h3>";
    echo "Nome: {$produto1->getNome()}<br>";
    echo "Descrição: {$produto1->getDescricao()}<br>";
    echo "Preço: {$produto1->getPreco()}<br>";
    echo "Estoque: {$produto1->getEstoque()}<br>";
    echo "Categoria: {$produto1->getCategoria()->getDescritivo()}<br>";

    /*Instanciar uma categoria e associar a objetos produto*/

    $produto1 = new Produto("Grampeador", "Tamanho médio", 10.90, 200);
    $produto2 = new Produto("Caneta", "Esferográfica", 2.90, 1000);

    $categoria1 = new Categoria("Escritório", array($produto1));

    $categoria1->setProduto($produto2);

    echo "<h3>Categoria</h3>";
    echo "Descrição: {$categoria1->getDescritivo()}<br>";
    echo "<h4>Produtos</h4><br>";
    foreach($categoria1->getProduto() as $dados){
        echo "Nome: {$dados->getNome()}<br>";
        echo "Descrição: {$dados->getDescricao()}<br>";
        echo "Preço: {$dados->getPreco()}<br>";
        echo "Estoque: {$dados->getEstoque()}<br><br>";
    }

?>