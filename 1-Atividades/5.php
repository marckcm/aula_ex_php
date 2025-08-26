<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
    <style>
        body { font-family: Arial; margin: 20px; }
    </style>
</head>
<body>
    <h2>Soma de Números (Array fixo)</h2>

    <?php

    $numeros = [10, 20, 30, 40, 50];
    $soma = 0;
    $soma2 = array_sum( $numeros );
    
    for ($i = 0; $i < count($numeros); $i++) {
        $soma += $numeros[$i];
    };

    echo "<p>Números: " . implode(", ", $numeros) . "</p>";
    echo "<p>Soma total: <b>$soma</b></p>";
    echo "<p>segundo modo de somar array_sum total: <b>$soma2</b></p>";
    ?>
</body>
</html>

