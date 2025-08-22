<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title> SISTEMA DE CLIENTES </title>
</head>

<body>
    <form action="./salvarCliente.php" method="post">
        <h1> Cadastrar Cliente </h1>

        NOME: <input type="text" name="nome"><br>
        E-MAIL: <input type="email" name="email"><br>
        TELEFONE: <input type="tel" name="telefone"><br>
        ENDEREÇO: <input type="text" name="endereco"><br>

        <input type="submit" value=" Salvar ">

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
    input[type="email"],
    input[type="tel"] {
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
        background-color: #050f6bff;
    }
    a {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #007bff;
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