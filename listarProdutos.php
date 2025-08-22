<?php
include("conexao.php");
$result = $conexao->query("SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LISTAR PRODUTOS </title>
</head>

<body>
    <h2>Lista de Produtos</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php while ($p = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nome'] ?></td>
                <td><?= $p['descricao'] ?></td>
                <td><?= number_format($p['preco'], 2, ',', '.') ?></td>
                <td>
                    <a href="editarProdutos.php?id=<?= $p['id'] ?>">Editar</a> |
                    <a href="excluirProduto.php?id=<?= $p['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="index.html">Voltar ao menu</a>
</body>
</html>

<style>
    body {
        width: 50%;
        font-family: Arial, sans-serif;
        margin: auto;
        background: #f4f4f4;
    }
    h2 {
        text-align: center;
        color: #333;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
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
        margin-top: 20px;
        text-align: center;
        color: #004797ff;
        text-decoration: none;
        display: inline-block;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    table tr:hover {
        background-color: #5d6cecff;
    }
</style>