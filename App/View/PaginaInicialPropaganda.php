<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banco Inter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php include VIEWS . 'Assets/css/PaginaInicialPropaganda/paginainicialpropaganda.php'; ?>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
        <div class="container">
            <a class="navbar-brand" href="#"><!--<img src="/View/Assets/Img/PagInicialPropaganda/logo.png" height="50" />--></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                      <a class="nav-link mx-2 active" aria-current="page" href="/login">Login</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="/correntista/cadastro">Cadastre-se</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>