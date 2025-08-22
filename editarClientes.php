<?php
include("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$result = $conexao->query("SELECT * FROM clientes WHERE id=$id");
$cliente = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title> EDITAR CADASTRO DE CLIENTES </title>
</head>

<body>
    <form action="./atualizar.php" method="post">
        <h2> Editar cadastro de clientes </h2>

        <input type="hidden" name="id" value="<?= $clientes['id']; ?>">

        NOME: <input type="text" name="nome" value="<?= $clientes['nome']; ?>"><br>
        E-MAIL: <input type="text" name="email" value="<?= $clientes['email']; ?>"><br>
        TELEFONE: <input type="number" name="preco" value="<?= $clientes['telefone']; ?>"><br>
        ENDEREÇO: <input type="text" name="endereco" value="<?= $clientes['endereco']; ?>"><br>

        <input type="submit" value=" Atualizar ">
    </form>
</body>
</html>