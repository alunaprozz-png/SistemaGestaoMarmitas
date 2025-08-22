<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title> SISTEMA DE CADASTRO DE PRODUTOS </title>
</head>

<body>
    <form action="./salvarProduto.php" method="post">
        <h1>Cadastrar Produto</h1>
        NOME: <input type="text" name="nome"><br>
        DESCRIÇÃO: <input type="text" name="descricao"><br>
        PREÇO: <input type="number" name="preco" step="0.01"><br>
        <input type="submit" value="Salvar">

        <a href="./index.html"> Voltar para o inicio </a>
    </form>

</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
    }

    form {
        width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #004797ff;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #003366;
    }
    a {
        display: block;
        margin-top: 20px;
        text-align: center;
        color: #004797ff;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    h1 {
        text-align: center;
        color: black;
    }
</style>