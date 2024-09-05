<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>
<body>

<?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's age from the form
    $age = $_POST["age"];

    // Check if the age is valid (i.e., a positive integer)
    if (filter_var($age, FILTER_VALIDATE_INT) && $age > 0) {
      // Check if the user is 18 years old or older
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

<!-- HTML Form -->
<form method="post">
  <label for="age">Idade:</label>
  <input type="number" id="age" name="age" required>
  <button type="submit">Verificar Idade</button>
</form>

</body>
</html>