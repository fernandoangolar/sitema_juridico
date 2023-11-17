<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <!-- Adicione links para folhas de estilo, se necessário -->
</head>
<body>
    <h1>Excluir Usuário</h1>
    <p>Tem certeza de que deseja excluir o usuário "<?php echo $user['nome']; ?>"?</p>

    <!-- Formulário de confirmação de exclusão do usuário -->
    <form action="/usuario/delete/<?php echo $user['id']; ?>" method="post">
        <button type="submit">Sim, Excluir</button>
    </form>

    <!-- Adicione links de navegação, botões de voltar, etc., conforme necessário -->
</body>
</html>