<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Cadastro de cliente</title>
</head>
<body>
    
<div class="container" id="tamanhoContainer" style="margin-top: 100px;">

<h4>Formulário de Cadastro</h4>
    
    <form style="margin-top: 20px;" action="/cliente/form/save" method="post">

        <div class="mb-3">
            <label for="nome" >Nome</label>
            <input type="text" class="form-control" name="nome" id="nome"  placeholder="Digite o seu nome" autocapitalize="off" require>
            <!-- O name vai ser utilizado na variável post do php ex: $teste = $_POST['nroproduto'] -->
        </div>

        <div class="mb-3">
            <label for="email" >Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Digite o seu email" autocapitalize="off" require>

        </div>

        <div style="text-align: right;">
            <button type="submit" class="btn btn-success"  id="botao" >Cadastrar</button>
        </div>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>