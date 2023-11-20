<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>

    <!-- Incluir o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Usuários</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>Nome</th>
                    <th>E-mail</th>
                    <!-- Adicione outras colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaUsuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario['name']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <!-- Adicione outras colunas conforme necessário -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Incluir o JavaScript do Bootstrap (opcional, mas necessário para alguns recursos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>