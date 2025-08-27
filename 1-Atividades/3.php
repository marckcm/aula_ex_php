<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Verifique se você é maior de idade</h2>
    <form method="post">
        <input type="number" name="idade" placeholder="Sua idade">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if (isset($_POST['idade'])) {
        $idade = $_POST['idade'];
        if ($idade >= 18) {
            echo "<h1>Você tem $idade então você é maior de idade</h1>";
        } else {
            echo "<h1>Você tem $idade então você é menor de idade</h1>";
        }

    }
    ?>
</body>

</html>