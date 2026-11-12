<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial;
            background: #1b1ebbd5
        }
        .grupo-imput label{
            display: block;
            margin-bottom: 5px;
        }
        .grupo-imput label{
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Adicionar Aluno</h1>
    <form action="#" method="post">
    <div class="grupo-input">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
    </div>
    <div>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" required>
    </div>
    <button type="submit" ckass="botao">Adicionar</button>
</body>
</html>
<?php
include 'conexao.php';
if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];

    $sql="INSERT INTO Aluno(Nome, Idade) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $nome, $idade);
    $stmt->execute();
    $stmt->close();
}
$conn->close();
?>