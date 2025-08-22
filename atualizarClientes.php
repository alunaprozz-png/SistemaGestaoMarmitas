<?php
include("conexao.php");

$id = intval($_POST['id']);
$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$telefone = trim($_POST['telefone']);
$endereco = trim($_POST['endereco']);

$stmt = $conexao->prepare("UPDATE clientes SET nome=?, email=?, telefone=?, endereco=? WHERE id=?");
$stmt->bind_param("ssssi", $nome, $email, $telefone, $endereco, $id);

if ($stmt->execute()) {
    echo "Cliente atualizado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}
$stmt->close();
$conexao->close();
?>