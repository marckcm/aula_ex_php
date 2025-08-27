<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Sorteio de Número (1 a 100)</h2>
    <form method="post">
        <input type="submit" value="Sortear">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $numeroSorteado = rand(1, 100);
        echo "<br>O número sorteado é: <strong>" . $numeroSorteado . "</strong>";

    }
    ?>
</body>

</html>