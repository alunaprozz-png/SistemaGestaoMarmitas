<?php
include("conexao.php");

$id = $_GET['id'];
$resultado = $conexao->query("SELECT * FROM produtos WHERE id = $id");
$produtos = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title> EDITAR PRODUTOS DO ESTOQUE </title>
</head>

<body>
    <form action="./atualizar.php" method="post">
        <h2> Editar produto existente no estoque </h2>

        <input type="hidden" name="id" value="<?= $produtos['id']; ?>">

        NOME: <input type="text" name="nome" value="<?= $produtos['nome']; ?>"><br>
        DESCRIÇÃO: <input type="text" name="descricao" value="<?= $produtos['descricao']; ?>"><br>
        PREÇO: <input type="number" name="preco" value="<?= $produtos['preco']; ?>"><br>

        <input type="submit" value=" Atualizar ">
    </form>
</body>
</html>