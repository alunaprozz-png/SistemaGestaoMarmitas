<?php
include("conexao.php");

$id = $_GET['id'];
$resultado = $conexao->query("SELECT * FROM clientes WHERE id = $id");
$clientes = $resultado->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EDITAR CADASTRO DE CLIENTES </title>
</head>

<body>
    <form action="./atualizarClientes.php" method="post">
        <h2> Editar cadastro de clientes </h2><br>

        <input type="hidden" name="id" value="<?= $clientes['id']; ?>">

        NOME: <input type="text" name="nome" value="<?= $clientes['nome']; ?>"><br>
        E-MAIL: <input type="text" name="email" value="<?= $clientes['email']; ?>"><br>
        TELEFONE: <input type="text" name="telefone" value="<?= $clientes['telefone']; ?>"><br>
        ENDEREÇO: <input type="text" name="endereco" value="<?= $clientes['endereco']; ?>"><br>

        <input type="submit" value=" Atualizar ">
    </form>
</body>
</html>


<style>
    body {
        width: 50%;
        margin: auto;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin-top: 55px;
    }

    form {
        padding: 25px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    h2 {
        text-align: center;
        color: black;
    }

    input[type="text"],
    input[type="number"] {
        width: 95%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #041c35ff;
        color: white; 
        border: none; 
        padding: 10px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #121e5fff;
    }

</style>