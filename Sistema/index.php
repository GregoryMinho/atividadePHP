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

    <h1 style="font-family: Arial, Helvetica, sans-serif;">Sistemas de Funcionarios</h1>

    <table border="1px">
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>AÇÕES</td>
        </tr>

        <?php foreach ($lista as $dados) : ?>
            <tr>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['nome']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td>
                    <a href="editar.php?id=<?= $dados['id']; ?>">[Editar]</a>
                    <a href="excluir.php?id=<?= $dados['id']; ?>">[Excluir]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>