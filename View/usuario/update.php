<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <!-- Inclua o link para a biblioteca do Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Usuário</h1>
        <?php
        // Lógica para obter dados do usuário a ser editado (use o ID fornecido na URL)
        // Exemplo: $id = $_GET['id'];
        //          $usuario = obterUsuarioPorId($id);

        use App\Model\DAO\UsuarioDAO;

        $usuarioDAO = new UsuarioDAO;
        $userID = $_GET['id'];
        $usuario = $usuarioDAO->getById($id); // Substitua com a lógica real
        ?>

        <?php if ($usuario): ?>
            <form action="atualizar_usuario.php" method="post">
                <input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>">

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $usuario->getNome(); ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario->getEmail(); ?>">
                </div>

                <!-- Adicione outros campos conforme necessário -->

                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        <?php else: ?>
            <p>Usuário não encontrado!</p>
        <?php endif; ?>
    </div>

    <!-- Inclua o script do Bootstrap no final do corpo -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>