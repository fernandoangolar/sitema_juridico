<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWLgyA8d6NT5lZ+qhrq0LsUd8t5I9aP" crossorigin="anonymous">

    <title>Formulário de Login</title>
</head>
<body>
    <?php
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-sqQrGBGo9sAQF9T3x2EByXuJdZIbPTrpZC94FJ+3DEr0L+8rXZ2u5pG70/HiiEAg" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWLgyA8d6NT5lZ+qhrq0LsUd8t5I9aP" crossorigin="anonymous"></script>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <!-- Adicione os links para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWLgyA8d6NT5lZ+qhrq0LsUd8t5I9aP" crossorigin="anonymous">
    <!-- Adicione seu próprio arquivo de estilo CSS -->
    <link rel="stylesheet" type="text/css" href="/caminho/para/seu/arquivo/styles.css">
    <style>
        body {
            background-color: #e6f7ff; /* Cor de fundo azul claro */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        .card-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 20px; /* Borda arredondada */
        }

        .btn-primary,
        .btn-secondary {
            border-radius: 20px; /* Borda arredondada */
        }

        .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #004080;
            border-color: #004080;
        }

        .btn-secondary {
            color: #007bff;
            transition: color 0.3s;
        }

        .btn-secondary:hover {
            color: #004080;
        }

        .links {
            margin-top: 1.5rem;
            text-align: center;
        }

        .links a {
            color: #007bff;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .links a:hover {
            color: #004080;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <div class="card-body">
                <!-- Formulário de Login -->
                <form action="/apps/doLogin" method="post">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </form>
                <!-- Links para Redefinir Senha e Registrar -->
                <div class="links">
                    <a href="/apps/resetarSenha" class="btn btn-secondary">Esqueceu a senha?</a>
                    <a href="/apps/showform" class="btn btn-secondary">Registrar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Adicione os scripts do Bootstrap (jQuery, Popper.js e Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-sqQrGBGo9sAQF9T3x2EByXuJdZIbPTrpZC94FJ+3DEr0L+8rXZ2u5pG70/HiiEAg" crossorigin="anonymous"></script>
    <script src=""> </script>
</body>
</html>

