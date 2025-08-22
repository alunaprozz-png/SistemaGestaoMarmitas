<?php
include("conexao.php");

$sql = "SELECT pedidos.id AS pedido_id, clientes.nome AS cliente_nome, pedidos.data_pedido
        FROM pedidos
        INNER JOIN clientes ON pedidos.cliente_id = clientes.id
        ORDER BY pedidos.data_pedido DESC";

$pedidos = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LISTAR PEDIDOS </title>
</head>
<body>
    <h2>Lista de Pedidos</h2>
<?php while ($p = $pedidos->fetch_assoc()): ?>
    <h3>Pedido #<?= $p['pedido_id'] ?> - <?= $p['cliente_nome'] ?> - <?= $p['data_pedido'] ?></h3>
    <ul>
        <?php
        $sql_itens = "SELECT produtos.nome, itens_pedido.quantidade 
                    FROM itens_pedido 
                    INNER JOIN produtos ON itens_pedido.produto_id = produtos.id
                    WHERE itens_pedido.pedido_id = " . $p['pedido_id'];
        $itens = $conexao->query($sql_itens);
        while ($i = $itens->fetch_assoc()):
            ?>
            <li><?= $i['nome'] ?> - Quantidade: <?= $i['quantidade'] ?></li>
        <?php endwhile; ?>
    </ul>
    <a href="excluirPedido.php?id=<?= $p['pedido_id'] ?>" onclick="return confirm('Tem certeza?')">Excluir Pedido</a>
<?php endwhile; ?>

<br><a href="index.html">Voltar ao inicio</a>
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
    h3 {
        color: #555;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        background: #fff;
        margin: 5px 0;
        padding: 10px;
        border-radius: 5px;
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
    }
    a:hover {
        text-decoration: underline;
    }
</style>