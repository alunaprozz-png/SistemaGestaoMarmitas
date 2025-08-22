<?php
include("conexao.php");
$result = $conexao->query("SELECT * FROM clientes");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LISTAR CLIENTES </title>
</head>

<body>
    <h2>Lista de Clientes</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
        <?php while ($c = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['nome'] ?></td>
                <td><?= $c['email'] ?></td>
                <td><?= $c['telefone'] ?></td>
                <td><?= $c['endereco'] ?></td>
                <td>
                    <a href="editarClientes.php?id=<?= $c['id'] ?>">Editar</a> |
                    <a href="excluirCliente.php?id=<?= $c['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
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
        background: center;
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
    a {
        color: #007bff;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    table tr:hover {
        background-color: #f1f1f1;
    }
    a {
        display: inline-block;
        margin-top: 20px;
        color: #004797ff;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>