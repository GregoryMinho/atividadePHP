<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exercicio 3</title>
</head>

<body>
    <?php
    $valor1 = $_GET['v1'] ?? null;
    $valor2 = $_GET['v2'] ?? null;
    $calcular = $_GET['calcular'] ?? null;
    ?>
    <main>
        <h1>Calculadora Simples</h1><br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>"><br><br>
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>"><br><br>

            <button type="submit" name=calcular value="somar">SOMAR</button>
            <button type="submit" name=calcular value="subtrair">SUBTRAIR</button>
            <button type="submit" name=calcular value="multiplicar">MULTIPLICAR</button>
            <button type="submit" name=calcular value="dividir">DIVIDIR</button>
        </form>
    </main>

    <?php if ($valor1 !== null && $valor2 !== null && $calcular !== null): ?>
        <section id="resultado">
            <h2>Resultado do Cálculo</h2>
            <?php
            switch ($calcular) {
                case 'somar':
                    $calculo = $valor1 + $valor2;
                    echo "<p>A soma entre o número $valor1 e o número $valor2 é igual a $calculo</p>";
                    break;
                case 'subtrair':
                    $calculo = $valor1 - $valor2;
                    echo "<p>A subtração entre o número $valor1 e o número $valor2 é igual a $calculo</p>";
                    break;
                case 'multiplicar':
                    $calculo = $valor1 * $valor2;
                    echo "<p>A multiplicação entre o número $valor1 e o número $valor2 é igual a $calculo</p>";
                    break;
                case 'dividir':
                    $calculo = $valor1 / $valor2;
                    echo "<p>A divisão entre o número $valor1 e o número $valor2 é igual a $calculo</p>";
                    break;
            }
            ?>
        </section>
    <?php endif; ?>

</body>

</html>