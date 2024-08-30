<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css" type="text/css">
    <title>Navegação entre as páginas</title>
    <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg " type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@400;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- fecha bootstrap -->
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <nav>

        <navbar class="navbar navbar-dark bg-dark" class="navbar sticky-top bg-body-tertiary">

            <div class="container-fluid">
                
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                        <!-- botao de login -->
                        <div class="container"> 
                            <div class="d-flex justify-content-end">
                                <button type="button" class="botaologin">Login</button>
                            </div>
                        </div>
                        <!-- fecha botao de login -->

                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <div class="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="servicos.php">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="produtos.php">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre.php">Sobre</a>
                            </li>
                        </ul>
                        </div>
                    </div>
            </div>
        </navbar>

    </nav>
        
</body>

</html>