<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Usuário</title>
   
</head>
<body>
    <h1>Inserir Usuário</h1>
   
    <form action="/apps/create" method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Inserir Usuário</button>
    </form>

    
</body>
</html>