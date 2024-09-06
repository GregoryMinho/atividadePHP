<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>

<body>
    <h1>Verificação de Idade para Cadastro</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="age">Idade:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Verificar Idade</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $age = $_POST["age"] ?? null;


        if (filter_var($age, FILTER_VALIDATE_INT) && $age > 0) {
            if ($age >= 18) {
                echo "Você pode se cadastrar!";
            } else {
                echo "Você não pode se cadastrar. Você deve ter pelo menos 18 anos.";
            }
        } else {
            echo "Idade inválida. Por favor, insira uma idade válida.";
        }
    }
    ?>

</body>

</html>