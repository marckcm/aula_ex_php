<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
    <style>
        body { font-family: Arial; margin: 20px; }
    </style>
</head>
<body>
    <h2>Digite um número:</h2>
    <form method="post">
        <input type="number" name="num">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if (isset($_POST['num'])) {
        $n = $_POST['num']; 
        if ($n % 2 == 0) {
            echo "o numero $n é, PAR!";
        } else {
            echo "o numero $n é, IMPAR!";
        }  
    }
    ?>
</body>
</html>
