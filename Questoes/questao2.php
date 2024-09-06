<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exercicio 2</title>
</head>

<body>
    <?php
    $classNota = $_GET['nota'] ?? null;
    ?>

    <main>
        <h1>Classificação de Notas</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nota">Insira a sua nota</label>
            <input type="number" name="nota" value="<?= $classNota ?>"><br><br>
            <button type="submit">CONFIRMAR</button>

        </form><br>
    </main>

    <?php if ($classNota !== null): ?>

        <section>
            <h2>NOTA ATINGIDA</h2>

            <?php
            if ($classNota > 10) {
                echo "Digite uma nota de 0 a 10";
            }
            ?>

            <?php
            switch ($classNota) {
                case 0:
                    echo "<p>Sua nota foi <strong>E</strong>";
                    break;
                case 1:
                    echo "<p>Sua nota foi <strong>E</strong>";
                    break;
                case 2:
                    echo "<p>Sua nota foi <strong>E</strong>";
                    break;
                case 3:
                    echo "<p>Sua nota foi <strong>E</strong>";
                    break;
                case 4:
                    echo "<p>Sua nota foi <strong>E</strong>";
                    break;
                case 5:
                    echo "<p>Sua nota foi <strong>D</strong>";
                    break;
                case 6:
                    echo "<p>Sua nota foi <strong>D</strong>";
                    break;
                case 7:
                    echo "<p>Sua nota foi <strong>C</strong>";
                    break;
                case 8:
                    echo "<p>Sua nota foi <strong>C</strong>";
                    break;
                case 9:
                    echo "<p>Sua nota foi <strong>B</strong>";
                    break;
                case 10:
                    echo "<p>Sua nota foi <strong>A</strong>";
                    break;
            }
            ?>
        </section>

    <?php endif; ?>

</body>

</html>