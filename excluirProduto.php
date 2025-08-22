<?php
include("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$stmt = $conexao->prepare("DELETE FROM produtos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: listarProdutos.php");

?>