<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $balance = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $choice = $_POST["choice"];

        switch ($choice) {
            case 1:

                echo "Seu saldo é: R$ $balance";
                break;
            case 2:
                $deposit = $_POST["deposit"];
                $balance += $deposit;
                echo "Depósito realizado com sucesso! Seu novo saldo é: R$ $balance";
                break;
            case 3:
                $withdrawal = $_POST["withdrawal"];
                if ($withdrawal <= $balance) {
                    $balance -= $withdrawal;
                    echo "Saque realizado com sucesso! Seu novo saldo é: R$ $balance";
                } else {
                    echo "Saldo insuficiente!";
                }
                break;
            case 4:
                echo "Saindo...";
                break;
            default:
                echo "Opção inválida!";
        }
    }
    ?>

    <form method="post">
        <h1>Menu de Opções</h1>
        <p>Escolha uma opção:</p>
        <input type="radio" name="choice" value="1"> Ver Saldo<br>
        <input type="radio" name="choice" value="2"> Depositar<br>
        <input type="radio" name="choice" value="3"> Sacar<br>
        <input type="radio" name="choice" value="4"> Sair<br>
        <br>
        <?php if ($choice == 2 || $choice == 3) { ?>
            <label for="amount">Valor:</label>
            <input type="number" name="<?php echo ($choice == 2) ? "deposit" : "withdrawal"; ?>" required><br>
        <?php } ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>