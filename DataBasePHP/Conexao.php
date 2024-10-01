<?php
    $pdo = new PDO ('mysql:dbname=BancoPHP;host=localhost:3306', 'root', 'cimatec');
    if ($pdo) {
        echo 'Banco conectado com sucesso';   
    }
?>