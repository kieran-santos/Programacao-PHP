<?php

require_once "Pessoa.php";
require_once "Telefone.php";
require_once "Cliente.php";
require_once "Tecnico.php";
require_once "Aparelho.php";
require_once "Modelo.php";
require_once "Orcamento.php";

//Instanciando os objetos
$cliente = new Cliente("478.658.958-10", array(), "Felisbela Rosangela", 14, "99623-5478");
$modelo = new Modelo("Galaxy NOTE Pro", array());
$tecnico = new Tecnico("celulares", "Joaozinho da Silva Sauro", 14, "99954-8748");
$aparelho = new Aparelho("celular", $cliente, $modelo);
$orcamento = new Orcamento("20/10/2024", 100.00, "15/11/2024", $tecnico, $aparelho);

$cliente->setAparelho($aparelho);
$modelo->setAparelho($aparelho);

//Mostrando os dados de Orçamento
echo"<h3>Dados do Orçamento</h3>";
echo"Data do orçamento: {$orcamento->getDataOrc()}<br>";
echo"Preço: {$orcamento->getPreco()}<br>";
echo"Data de validade: {$orcamento->getDataVal()}<br>";

echo"<h4>Dados do Técnico</h4>";
echo"Especialidade: {$orcamento->getTecnico()->getEspecialidade()}<br>";
echo"Nome: {$orcamento->getTecnico()->getNome()}<br>";

echo"<h4>Dados do Aparelho</h4>";
echo"Descritivo: {$orcamento->getAparelho()->getDescritivo()}<br>";
echo"Nome do cliente: {$orcamento->getAparelho()->getCliente()->getNome()}<br>";
echo"Modelo do aparelho: {$orcamento->getAparelho()->getModelo()->getDescritivo()}<br>";


?>