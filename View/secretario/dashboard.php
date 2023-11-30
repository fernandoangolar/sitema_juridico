<?php 

        require_once __DIR__ . '/../../app/Model/DAO/DocumentoDAO.php';

            $docDAO = new DocumentoDAO();

            $documentos = $docDAO->getAllDocumentos();
    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Exemplo</title>
    <!-- Adicione o link para o Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWLgyA8d6NT5lZ+qhrq0LsUd8t5I9aP" crossorigin="anonymous">
    <style>
       body {
            background-color: #f8f9fa;
            padding-top: 56px; 
        }

        .navbar {
            padding: 15px;
            background-color: #007bff;
        }

        .navbar-brand,
        .navbar-toggler-icon {
            color: #ffffff !important;
            text-decoration: none;
        }
        
        .navbar-nav .nav-item {
            margin: 30px 0;
           
            list-style: none;
        }

        .navbar-nav .nav-link  {
            color: #ffffff;
            transition: background-color 0.3s;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
        }

        .navbar-nav .nav-link:hover {
            background-color: #0056b3;
           
        }

        .container {
            margin-top: 20px;
        }

        .form-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

       


        .navbar-nav .nav-link:hover {
            color: #ffffff !important;
        }

        .logout-btn {
            position: fixed;
            top: 10px;
            right: 10px;
        }

        
        .logout-btn {
            color: #ffffff;
            background-color: #dc3545;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

    </style>

   
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="https://www.linkedin.com/in/fernando-angolar-692a0423a/" target="_blank">Fernando Angolar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showForm('casos')">Adicionar Casos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showForm('documentos')">Adicionar Documentos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="casosForm" class="form-container text-center">
        <h2>Formulário de Adicionar Casos</h2>
        <form action="/apps/adicionar-caso" method="post">
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="5" required></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="documento">Documento:</label>
                <select class="form-control" id="documento" name="documento">
                <?php foreach ($documentos as $documento): ?>
                        <option value="<?= $documento->getId(); ?>"><?= $documento->getTitulo(); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Adicionar Caso</button>
        </form>
    </div>

    <div id="documentosForm" class="form-container text-center">
        <h2>Formulário de Adicionar Documentos</h2>
        <form action="/adicionar-documento">
           
            <button type="submit" class="btn btn-primary">Adicionar Documento</button>
        </form>
    </div>

    
    <a href="/apps/logout"> <button class="btn btn-danger logout-btn">Logout</button>  </a> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-sqQrGBGo9sAQF9T3x2EByXuJdZIbPTrpZC94FJ+3DEr0L+8rXZ2u5pG70/HiiEAg" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWLgyA8d6NT5lZ+qhrq0LsUd8t5I9aP" crossorigin="anonymous"></script>

    <script>
        function showForm(formId) {
           
            document.querySelectorAll('.form-container').forEach(function(form) {
                form.style.display = 'none';
            });

            document.getElementById(formId + 'Form').style.display = 'block';
        }
    </script>
</body>
</html>