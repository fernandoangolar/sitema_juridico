<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Adicione as tags head conforme necessário -->
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Login</h1>

        <?php if (isset($erroLogin)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $erroLogin; ?>
            </div>
        <?php endif; ?>

        <form action="index.php?acao=login" method="post">
            <!-- Adicione outros campos do formulário conforme necessário -->
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>

    <!-- Inclua o script do Bootstrap no final do corpo conforme necessário -->
</body>
</html>