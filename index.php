<?php

require_once "src/Cliente.php";

$clienteA = new Cliente();
$clienteB = new Cliente();

$clienteA->nome = "Paula Tejando";
$clienteA->idade = 24;
$clienteA->email = "paulatejando@gmail.com";
?>

<!DOCTYPE html>
<html lang="PT_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>
    
    <h1>Exemplos de PHP com POO</h1>
    <hr>

    <h2>Trabalhando com Classes e Objetos</h2>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>