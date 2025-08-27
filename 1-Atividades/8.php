<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Login Simples</h2>
    <form method="post">
        <input type="text" name="user" placeholder="Usuário">
        <input type="password" name="pass" placeholder="Senha">
        <input type="submit" value="Entrar">
    </form>

    <?php
    include("8_usuarios.php");

    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == $usuario_correto && $pass == $senha_correta) {
            echo "<strong>Acesso Permitido!</strong>";
        } else {
            echo "<strong>Acesso Negado!</strong>";
        }
    }
    ?>
</body>

</html>