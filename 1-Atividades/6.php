<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css">
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