<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

    <?php
    require 'conexao.php'
    ?>

    <?php
    $sql = $pdo->query("SELECT * FROM funcionarios");

    $lista = [];
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="id">ID:</label>
        <input type="number" id="id" name="id"><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        <button type="button" onclick="editRecord()">Edit</button>
        <button type="button" onclick="deleteRecord()">Delete</button>
    </form>

    <br><br>

    <h1 style="font-family: Arial, Helvetica, sans-serif;">Sistemas de Funcionarios</h1>

    <table border="1px">
        <tr>
            <td><?php  echo $dados['id']; ?></td>
            <td><?php  echo $dados['nome']; ?></td>
            <td><?php  echo $dados['email']; ?></td>
            <td>
                <a href="editar.php?id=<?=  $dados['id']; ?>">[Editar]</a>
                <a href="editar.php?id=<?=  $dados['id']; ?>">[Excluir]</a>
            </td>

        </tr>
    </table>
        
        <?php foreach ($lista as $dados): ?>
            <tr>
                <td>id 1</td>
                <td>nome 1</td>
                <td>email 1</td>
                <td>ações 1</td>
            </tr>
        <?php endforeach; ?>

</body>

</html>