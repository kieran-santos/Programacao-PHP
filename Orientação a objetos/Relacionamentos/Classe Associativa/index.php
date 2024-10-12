<?php
    require_once "classe_atores.php";
    require_once "classe_filmes.php";
    require_once "classe_papeis.php";

    $ator = new Ator("Anthony Hopkins");
    $filme = new Filme("O Silêncio dos Inocentes");

    $papel = new Papel("Hannibal Lecter", $filme, $ator);

    /*echo"<pre>";
    var_dump($papel);
    echo"</pre>";*/

    echo "Nome do Papel: {$papel->getNome()}<br>";
    echo "Nome do Filme: {$papel->getFilme()->getTitulo()}<br>";
    echo "Nome do Ator: {$papel->getAtor()->getNome()}<br>";

?>