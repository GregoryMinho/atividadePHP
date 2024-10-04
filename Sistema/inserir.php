<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BANCO PRÁTICA</title>
</head>

<body>
    <main>
        <h1>BANCO</h1><br>

        <form action="banco.php" method="post">
            <label for="nome">Insira o seu nome</label>
            <input type="text" name="nome"><br><br>
            <label for="email">Insira o seu email</label>
            <input type="text" name="email"><br><br>
            <button type="submit">ENVIAR</button>
        </form><br>

    </main>
    <?php
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['email'] ?? null;

    if (isset($_POST['ENVIAR'])) {
        $nome = $_POST['nome'] ?? null;
        $email = $_POST['email'] ?? null;
    }
    ?>
</body>

</html>