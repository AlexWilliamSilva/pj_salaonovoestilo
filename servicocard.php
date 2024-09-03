<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão Novo Estilo</title>
    <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg " type="image/x-icon">
    <link rel="stylesheet" href="style/servicocard.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width: 320px)">
</head>
<body>
    <?php 
        require_once "header.php";
        require_once "nav.php";
    ?>
    <main>

        <section class="AreaMasculina" class="grid text-center" style="row-gap: 0;">

            <div class="row row-cols-1 row-cols-md-3 g-4">
                 <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Progressiva Masculino</h5>
                            <p class="card-text">Alisamento e tratamento para cabelos masculinos.</p>
                        </div>
                </div>

                <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Cortes de Cabelo Masculino</h5>
                            <p class="card-text">Cortes clássicos e modernos para atender ao seu estilo e personalidade.</p>
                        </div>
                </div>

                <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Luzes Masculino</h5>
                            <p class="card-text">Serviço de luzes para realçar o visual dos cabelos masculinos.</p>
                        </div>
                </div>

                <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Sobrancelha masculina</h5>
                            <p class="card-text">Design e cuidados para manter a sobrancelha masculina alinhada.</p>
                        </div>
                </div>

            </div>
        </section>
    </main>
    <?php
        require_once "footer.php";
    ?>
</body>
</html>