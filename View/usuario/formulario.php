<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Usuário</title>
    <!-- Adicione o link para o Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWLgyA8d6NT5lZ+qhrq0LsUd8t5I9aP" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo */
        }

        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background-color: #ffffff; /* Cor de fundo do formulário */
            padding: 20px;
            border-radius: 10px; /* Borda arredondada */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Sombra suave */
            width: 100%;
            max-width: 400px; /* Largura máxima do formulário */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ced4da; /* Cor da borda */
            border-radius: 5px; /* Borda arredondada */
        }

        .btn-primary {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-12 form-container">
            <h1 class="mb-4 text-center">Inserir Usuário</h1>
       
            <form action="/apps/create" method="post">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" name="senha" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Inserir Usuário</button>
            </form>
        </div>
    </div>

    <!-- Adicione os scripts do Bootstrap no final do body para uma melhor performance -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-sqQrGBGo9sAQF9T3x2EByXuJdZIbPTrpZC94FJ+3DEr0L+8rXZ2u5pG70/HiiEAg" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWLgyA8d6NT5lZ+qhrq0LsUd8t5I9aP" crossorigin="anonymous"></script>
</body>
</html>