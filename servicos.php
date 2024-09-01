<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão Novo Estilo</title>
    <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg " type="image/x-icon">
    <link rel="stylesheet" href="style/styles.css" type="text/css">
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

        <div id="tituloservico">
            <h1>Serviços</h1>
            <hr>
        </div>

            <section class="AreaMasculina" class="grid text-center" style="row-gap: 0;">
                <h2>Serviços na área Masculina</h2>

                <div class="divblock-desloc1">
                    <div id="divblockserv">
                        <div id="textoservicomasculino">
                            <h4 class="servicos">Progressiva Masculino</h4>
                            <p>Alisamento e tratamento para cabelos masculinos.</p>
                        </div>
                    </div>

                    <div id="divblockserv">
                        <div id="textoservicomasculino">
                            <h4  class="servicos">Cortes de Cabelo Masculino</h4>
                            <p>Cortes clássicos e modernos para atender ao seu estilo e personalidade.</p>
                        </div>
                    </div>

                    <div id="divblockserv">
                        <div id="textoservicomasculino">
                            <h4>Luzes Masculino</h4>
                            <p>Serviço de luzes para realçar o visual dos cabelos masculinos.</p>
                        </div>
                    </div>
                </div>
                
                <div class="divblock_desloc2">
                    <div id="divblockserv">
                        <div id="textoservicomasculino">
                            <h4>Sobrancelha masculina</h4>
                            <p>Design e cuidados para manter a sobrancelha masculina alinhada.</p>
                        </div>
                    </div>

                    <div id="divblockserv">
                        <div id="textoservicomasculino">
                            <h4>Relaxamento Capilar masculino</h4>
                            <p>Tratamento para relaxar os fios e facilitar o penteado.</p>
                        </div>
                    </div>

                    <div id="divblockserv">
                        <div id="textoservicomasculino">
                            <h4>Barba</h4>
                            <p>Modelagem, aparo e cuidados completos para a barba.</p>
                        </div>
                    </div>
                </div>

                <div class="divblock_desloc3">
                    <div id="divblockserv">
                        <div id="textoservicomasculino">
                            <h4>Limpeza de Pele</h4>
                            <p>Tratamentos faciais para limpeza profunda e revitalização da pele.</p>
                        </div>
                    </div>
                </div>    

            </section>

            <section class="AreaFeminina">
                <h2>Serviços na área Feminina</h2>

                <div id="divblockserv">
                    <div id="textoservicofeminino">
                        <h4>Limpeza de Pele</h4>
                        <p>Tratamentos faciais para limpeza profunda e revitalização da pele.</p>
                    </div>
                </div>

                <div id="divblockserv">
                    <div id="textoservicofeminino">
                        <h4>Progressiva Feminino</h4>
                        <p>Alisamento e tratamento para cabelos femininos.</p>
                    </div>
                </div>

                <div id="divblockserv">
                    <div id="textoservicofeminino">
                        <h4>Limpeza de Pele</h4>
                        <p>Tratamentos faciais para limpeza profunda e revitalização da pele.</p>
                    </div>
                </div>

        </section>
    </main>
    <?php
        require_once "footer.php";
    ?>
</body>
</html>