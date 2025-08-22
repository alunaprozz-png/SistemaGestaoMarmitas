<?php
include("conexao.php");

$cliente_id = intval($_POST['cliente_id']);
$produtos = $_POST['produtos'] ?? [];
$quantidades = $_POST['quantidade'] ?? [];

if (!$cliente_id || empty($produtos)) {
    die("Selecione um cliente e pelo menos um produto!");
}

$stmt = $conexao->prepare("INSERT INTO pedidos (cliente_id) VALUES (?)");
$stmt->bind_param("i", $cliente_id);
$stmt->execute();
$pedido_id = $stmt->insert_id;
$stmt->close();

foreach ($produtos as $produto_id) {
    $qtd = intval($quantidades[$produto_id] ?? 1);
    $stmt = $conexao->prepare("INSERT INTO itens_pedido (pedido_id, produto_id, quantidade) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $pedido_id, $produto_id, $qtd);
    $stmt->execute();
    $stmt->close();
}

echo "Pedido realizado com sucesso!";
?>
<br><a href="index.html">Voltar ao menu</a>