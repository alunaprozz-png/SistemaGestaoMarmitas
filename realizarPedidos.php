<?php
include("conexao.php");

$clientes = $conexao->query("SELECT * FROM clientes");
$produtos = $conexao->query("SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> REALIZAR PEDIDO </title>
</head>

<body>
    <form action="./salvarPedido.php" method="post">
        <h2>Realizar Pedido</h2>
        <label>Cliente:</label>
        <select name="cliente_id" required>
            <option value="">Selecione um cliente</option>
            <?php while ($c = $clientes->fetch_assoc()): ?>
                <option value="<?= $c['id'] ?>"><?= $c['nome'] ?></option>
            <?php endwhile; ?>
        </select><br><br>

        <label>Produtos:</label><br>
        <?php while ($p = $produtos->fetch_assoc()): ?>
            <input type="checkbox" name="produtos[]" value="<?= $p['id'] ?>"> <?= $p['nome'] ?> - R$
            <?= number_format($p['preco'], 2, ',', '.') ?>
            <input type="number" name="quantidade[<?= $p['id'] ?>]" value="1" min="1"><br>
        <?php endwhile; ?>
        <br>
        <input type="submit" value="Realizar Pedido">
    </form>
    <a href="index.html">Voltar ao inicio</a>
</body>
</html>

<style>
    body {
        width: 400px;
        margin: auto;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
        margin-top: 100px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        background-color: #fff;  
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    select, input[type="text"], input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    input[type="submit"] {
        background-color: #010974ff;
        color: white;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #100058ff;
    }
    a {
        display: inline-block;
        margin-top: 20px;
        color: #380350ff;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>