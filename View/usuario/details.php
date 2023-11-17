<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Usuário</title>
    <!-- Inclua o link para a biblioteca do Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Remover bordas da tabela */
        .table-bordered {
            border: 0;
        }
        
        /* Ajustar espaçamento dos botões */
        .btn {
            margin-right: 5px; /* Ajuste conforme necessário */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalhes do Usuário</h1>
        <?php if ($usuarios): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       
                        <th>Nome</th>
                        <th>Email</th>
                        <!-- Adicione outros campos conforme necessário -->
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    
                        <td><?php echo $usuarios->getNome(); ?></td>
                        <td><?php echo $usuarios->getEmail(); ?></td>
                        <!-- Adicione outros campos conforme necessário -->
                    
                        <td>
                            <a href="./update.php?id=<?php echo $usuarios->getId(); ?>" class="btn btn-primary">Editar</a>
                            <a href="delete.php?id=<?php echo $usuarios->getId(); ?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>Usuário não encontrado!</p>
        <?php endif; ?>
    </div>

    <script>
    // Adicione um ouvinte de evento ao botão "Editar"
    document.getElementById('editarUsuario').addEventListener('click', function() {
        // Obtém o ID do usuário dos detalhes (substitua com o valor real)
        var userId = <?php echo $userId; ?>;

        // Redireciona para o formulário de atualização com o ID do usuário
        window.location.href = 'update.php?id=' + userId;
    });
</script>

    <!-- Inclua o script do Bootstrap no final do corpo -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>