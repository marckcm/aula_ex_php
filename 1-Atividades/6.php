<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        ul {
            color: green;
        }
    </style>
</head>

<body>
    <h2>Lista de Frutas</h2>

    <?php
    $frutas = ["Maçã", "Banana", "Laranja", "Jabuticaba", "Pessego"];
    echo "<ul>";
    foreach ($frutas as $i => $fruta) {
        echo "<li>$fruta</li>";
    }
    ;
    echo "</ul>";
    ?>

</body>

</html>