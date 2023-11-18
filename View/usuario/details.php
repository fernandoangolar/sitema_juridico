<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Usuário</title>
    <!-- Adicione links para folhas de estilo, se necessário -->
</head>
<body>
    <h1>Detalhes do Usuário</h1>
    <p><strong>ID:</strong> <?php echo $user['id']; ?></p>
    <p><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <!-- Adicione outros campos conforme necessário -->

    <!-- Links para as páginas de atualização e exclusão -->
    <a href="/usuario/update/<?php echo $user['id']; ?>">Atualizar</a>
    <a href="/usuario/delete/<?php echo $user['id']; ?>">Excluir</a>

    <!-- Adicione links de navegação, botões de voltar, etc., conforme necessário -->
</body>
</html>