<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <?php
        // Exibir mensagem de erro, se houver
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<p style='color: red;'>Credenciais inválidas. Tente novamente.</p>";
        }
    ?>

    <h1>Login</h1>

    <form action="/apps/doLogin" method="post">
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>