<?php
include("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id) {

    $stmt = $conexao->prepare("DELETE FROM itens_pedido WHERE pedido_id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    $stmt = $conexao->prepare("DELETE FROM pedidos WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: listarPedidos.php");
?>