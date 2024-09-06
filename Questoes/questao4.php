<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ATIVIDADE 4</title>
</head>

<body>
    <?php
    define("login", "admin");
    define("senha", "1234");

    $loginV = $_GET['login'] ?? null;
    $senhaV = $_GET['senha'] ?? null;
    ?>
    <main>
        <h1>Verificação de Login</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="idade">Login</label>
            <input type="text" name="login" value="<?= $loginV ?>"><br><br>

            <label for="idade">Senha</label>
            <input type="password" name="senha" value="<?= $senhaV ?>"><br><br>

            <button type="submit">ENTRAR</button>

        </form><br>

    </main>

    <?php if ($loginV !== null && $senhaV !== null): ?>

        <section>
            <?php
            if ($loginV == login && $senhaV == senha) {
                echo "<p><strong>Login bem-sucedido</strong></p>";
            } elseif ($loginV !== login || $senhaV !== senha) {
                echo "<p><strong>Login ou senha incorretos</strong></p>";
            }
            ?>
        </section>

    <?php endif; ?>

</body>

</html>