<?php
include("conexao.php");

$nome = trim($_POST['nome']);
$descricao = trim($_POST['descricao']);
$preco = floatval($_POST['preco']);

if (strlen($nome) < 3) {
    die("Nome do produto muito curto! (mínimo 3 caracteres)");
}

if ($preco <= 0) {
    die("Preço inválido! Deve ser maior que zero.");
}

$stmt = $conexao->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $nome, $descricao, $preco);

if ($stmt->execute()) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
