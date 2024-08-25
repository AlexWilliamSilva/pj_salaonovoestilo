<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css" type="text/css">
    <title>Home - Salão Novo Estilo Itapira</title>
</head>
<body class="indexbody">

    <?php
        require_once "header.php";
        require_once "nav.php";
    ?>
    <main>

        <section id="carrossel">

        </section>

        <section id="secaoartista">

            <h1>Artista</h1>

            <div>
                <img src="multimidia/kaiak.webp" alt="" id="Imagemdonosalao">
            </div>

            <div id="botaoartista">
                <a href="#">
                    <button id="botaocssartista">Saiba mais <img src="multimidia/icon/portaiconindex.png" alt="" id="imgportaindex"></button>
                </a>
            </div>

        </section>

    </main>

    <?php
        require_once "footer.php";
    ?>

</body>
</html>