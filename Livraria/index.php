<?php

    //Instanciar um objeto emprestimo e mostrar seus dados
    require_once "classe_pessoa.php";
    require_once "classe_publicacao.php";
    require_once "classe_aluno.php";
    require_once "classe_autor.php";
    require_once "classe_editora.php";
    require_once "classe_emprestimo.php";
    require_once "classe_genero.php";
    require_once "classe_item.php";
    require_once "classe_livro.php";
    require_once "classe_revista.php";
    
    $editora = new Editora("25.478.547/0001-85","Editora Descolonize");
    $genero = new Genero("História");
    $autor = new Autor("Moçambicano", "Noemia Andrade");
    $livro = new Livro("História da colonização e independência de Moçambique", "5845136954", array($autor), array($genero), "Livro de História", "02/10/2001", "A História Comtemporânea de Moçambique");
    $item = new Item("20/05/2024", array($livro));
    $aluna = new Aluno("004022356", "Joana da Silva");
    $emprestimo = new Emprestimo("12/05/2024", $aluna, array($item));

    echo "<h3>Empréstimo: </h3>";
    echo "Data do empréstimo: {$emprestimo->getDataEmp()}<br>";
    echo "RA: {$emprestimo->getAluno()->getRa()}<br>";
    echo "Nome: {$emprestimo->getAluno()->getNome()}<br>";

    foreach($emprestimo->getItem() as $item)
    {
        echo "Data devolução: {$item->getDataDevolucao()}<br>";
        foreach($item->getLivro() as $livro)
        {
            echo "Título: {$livro->getTitulo()}<br>";
            echo "ISBN: {$livro->getIsbn()}<br>";
        }
    }

?>