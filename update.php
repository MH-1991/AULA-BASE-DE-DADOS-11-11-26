<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
            <style>
        body{
            font-family: Arial;
            background: #e01649d5
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
    <script>
    </script>
</head>
<body>
    <h1>Atualizado Alunos</h1>
    <form action= "#" method="post">
        <label>Nome:</Label><br>
        <input type="text" name="nome" required><br>
        <label>Nome:</Label><br>
        <input type="number" name="idade" required><br>
</body>
</html>
<?php
if(isset($_POST['nome'])){
    $id = $conn->real_escape_string($_POST['id']);
    $nome = $conn->real_escape_string($_POST['nome']);
    $idade = $conn->real_escape_string($_POST['idade']);

    $sql="UPDATE Aluno SET Nome='$nome', Idade=$idade WHERE id=$id";
}
?>