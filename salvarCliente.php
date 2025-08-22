<?php
include("conexao.php");

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$telefone = trim($_POST['telefone']);
$endereco = trim($_POST['endereco']);

if (strlen($nome) < 3) {
    die("Nome muito curto! (mínimo 3 caracteres)");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("E-mail inválido!");
}

if (!empty($telefone) && (strlen($telefone) < 10 || strlen($telefone) > 11)) {
    die("Telefone inválido! Deve ter 10 ou 11 dígitos.");
}

$stmt = $conexao->prepare("INSERT INTO clientes (nome, email, telefone, endereco) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $email, $telefone, $endereco);

if ($stmt->execute()) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar cliente: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
