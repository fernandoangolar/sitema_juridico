<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    
</head>
<body>
    <h1>Excluir Usuário</h1>
    <p>Tem certeza de que deseja excluir o usuário "<?php echo $user['nome']; ?>"?</p>

    <form action="/usuario/delete/<?php echo $user['id']; ?>" method="post">
        <button type="submit">Sim, Excluir</button>
    </form>

</body>
</html>