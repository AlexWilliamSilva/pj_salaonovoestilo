<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Navegação entre as páginas</title>

    <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@400;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fecha bootstrap -->

    <style>
        /* Nav Mobile */
        .navbar-nav .nav-link {
            color: white;
        }

        .botaologin {
            font-size: 20px;
            font-family: 'Inria Sans', sans-serif;
            padding-left: 10px;
            padding-right: 10px;
            color: #000;
            background-color: #fff;
            border: 10px solid #fff;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            transition: background-color 0.2s ease-in-out, transform 0.2s ease-in-out;
        }

        .botaologin:active {
            transform: scale(0.85);
        }

        .botaologin:hover {
            background-color: #e1e1e1;
        }

        .nav-link {
            margin-left: 1em;   
            font-family: 'Inria Serif', serif;
            font-size: 20px;
            position: relative;
            overflow: hidden;
            transition: background-color 0.2s ease-in-out, transform 0.2s ease-in-out;
        }

        .nav-link:hover {
            background-color: #00000035;
            border-radius: 10px;
        }

        .nav-link:active {
            transform: scale(0.85);
        }
        
        @media (min-width: 1368px) {
            .navbar-nav {
                flex: 1;
                margin-left: auto;
                margin-right: auto;
            }

            .botaologin {
                margin-left: ;
               
            }
        }

    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

                 <button type="button" class="botaologin ms-auto">Login</button>   
                 
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
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
    </nav>
</body>
</html>
