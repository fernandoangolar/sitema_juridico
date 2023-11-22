<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
 
</head>
<body>
    <h1>Atualizar Usuário</h1>
    <form action="/usuario/update/<?php echo $user['id']; ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $user['nome']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" value="<?php echo $user['senha']; ?>" required><br>

        <button type="submit">Atualizar Usuário</button>
    </form>
</body>
</html>