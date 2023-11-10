<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Listagem de produtos</title>
</head>
<body>

    <div class="container" style="margin-top: 45px;" >
        <h3>Lista de clientes</h3>    
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>

                <?php  foreach($model->rows as $item): ?>

                <tr>
                        <td> <?= $item->nome ?> </td>
                        <td> <?= $item->email ?> </td>
                        
                        <td> 
                            <a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_produto.php?id=<?php echo $id_cliente ?>" role="button">Editar</a> 
                            <a class="btn btn-danger btn-sm" style="color: #fff;" href="excluir_produto.php?id=<?php echo $id_cliente ?>" role="button">Deletar</a>
                        </td>
                </tr>
                    <?php endforeach  ?>  

            </tbody>
        </table>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>