<?php
include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

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