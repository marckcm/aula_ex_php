<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Calcular a Média de 3 Números</h2>
    <form method="post">
        <input type="number" name="n1" placeholder="Número 1">
        <input type="number" name="n2" placeholder="Número 2">
        <input type="number" name="n3" placeholder="Número 3">
        <input type="submit" value="Calcular">
    </form>

    <?php


    if (isset($_POST['n1'])) {
        $numeros = [$_POST['n1'], $_POST['n2'], $_POST['n3']];
        $media = array_sum($numeros) / count($numeros);
        $m = $media;
        echo "<p>A média é <b>" . number_format($m, 2) . "</b></p>";
    }
    ?>
</body>

</html>