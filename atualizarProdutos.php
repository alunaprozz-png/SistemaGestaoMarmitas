<?php

include("conexao.php");

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    
    $stmt = $conexao->prepare("UPDATE  produtos SET nome=?, descricao=?, preco=? WHERE id=?");
    $stmt->bind_param("sssi", $nome, $descricao, $preco, $id);
    
    if ($stmt->execute()) {
    echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }
    $stmt->close();
    $conexao->close();
?>