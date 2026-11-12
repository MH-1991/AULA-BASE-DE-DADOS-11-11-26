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
</head>
<body>
    <h1>Relatorio de Alunos</h1>
<?php
include 'conexao.php';

$sql = "SELECT id, Nome, Idade FROM Aluno";
$result = $conn->query($sql);


?>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>idade</th>
    </tr>
<?php
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Nome']; ?></td>
            <td><?php echo $row['Idade']; ?></td>
</tr>
<?php

    }
}
else{
    echo "<tr>
        <td colspan='3'>Nehum Aluno Cadastrado</td>
    </tr>";
}
$conn->close();
?>
</table>
</body>
</html>