<?php
    require_once "classes.php";
    $cliente = new Cliente();
    $conect = $cliente -> conexao();
    $resultado = $cliente -> buscar_clientes($conect);
    if($_GET){
        echo $_GET["msg"];
    }
    /*echo "<pre>";
    var_dump($resultado);
    echo "</pre>";*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>Lista de Clientes</title>
    </head>
    <body>
        <h1>Clientes</h1>
        <a href="form_cliente.html">Novo Cliente</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php       //usamos o foreach como estrutura de repetição no php para matriz
                    foreach(/*nome da matriz*/$resultado as $dado){
                        //para colocar um comando html dentro do php tem que usar o echo
                        echo    "<tr>
                                 <td>{$dado->nome_cli}&nbsp{$dado->sobrenome_cli}</td>
                                 <td>{$dado->cpf_cli}</td>
                                 </tr>";         
                    }
                    //dentro de $resultado temos a matriz inteira
                    //o $dado pega a primeira linha e coloca na matriz
                    //&nbsp é o caracter de espaço no php
                ?>
            </tbody>
        </table>
</html>