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
    <form action="./atualizarProdutos.php" method="post">
        <h2> Editar produto existente no estoque </h2><br>

        <input type="hidden" name="id" value="<?= $produtos['id']; ?>">

        NOME: <input type="text" name="nome" value="<?= $produtos['nome']; ?>"><br>
        DESCRIÇÃO: <input type="text" name="descricao" value="<?= $produtos['descricao']; ?>"><br>
        PREÇO: <input type="number" name="preco" value="<?= $produtos['preco']; ?>"><br>

        <input type="submit" value=" Atualizar ">
    </form>
</body>
</html>

<style>
    body {
        width: 100%;
        margin: auto;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
    }

    form {
        padding: 25px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #004797ff;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #003366;
    }
    a {
        text-decoration: none;
        color: #004797ff;
        display: block;
        text-align: center;
        margin-top: 20px;
    }
    a:hover {
        text-decoration: underline;
    }
</style>