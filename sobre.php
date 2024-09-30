<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sobre.css" type="text/css">
    <title>Sobre - Salão Novo Estilo Itapira</title>
    <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

    <?php
        require_once "header.php";
        require_once "nav.php";
    ?>

    <main class="mainsobre container">

        <section id="titlesobrenos" class="text-center my-4">
            <h1>Sobre Nós</h1>
            <hr>
        </section>

        <section class="localizacaodiv row mx-auto align-items-center">
            <div id="titulosalaosobre" class="col-12 text-center">
                <h2>Salão Novo Estilo</h2>
            </div>
                
            <div id="imgsalaosobre" class="col-12 col-md-6">
                <picture>
                    <source media="(min-width: 620px)" srcset="multimidia/Midia.jpg">
                    <img src="multimidia/mobile/Midiamobile.jpg" alt="Imagem do local do salão" class="img-fluid">
                </picture>
            </div>

            <div id="localizacaosalaodisplay" class="col-12 col-md-6">
                <iframe id="localizacaosalao" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.2531441744127!2d-46.795096224658856!3d-22.457119579574247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c902f8a770d707%3A0xf39ef5bb98a3baef!2sSal%C3%A3o%20Novo%20Estilo!5e0!3m2!1spt-BR!2sbr!4v1724893539614!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen loading="lazy"></iframe>
            </div>

            <div class="nomesalao col-12 text-center mt-3">
                <h4>Salão Novo Estilo</h4>
                <p>Salão de Beleza</p> 
            </div>

            <div id="localizacaoendereco" class="col-12 text-center mt-2">
                <p>R. Pedro Baston, 176 - Jose Tonolli, Itapira - SP,<br> 13973-729</p>
            </div>

        </section>

        <section class="artistadiv row mx-auto mt-5">
            <div class="titleartistasobre col-12 text-center">
                <h2>Artista</h2>
                <hr>
            </div>

            <div id="img-artistasobre" class="col-12 text-center">
                <picture>
                    <source media="(min-width: 620px)" srcset="multimidia/artista.jpg">
                    <img src="multimidia/mobile/artistamobile.jpg" alt="Imagem do artista" class="img-fluid">
                </picture>
            </div>
            
            <div id="saibamaissobre" class="col-12 text-center mt-3">
                <!-- Botão que aciona o modal -->
                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#artistaModal">Saiba mais</a>
            </div>
        </section>

        <section id="divagenda" class="row mx-auto mt-5">
            <table id="table" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th colspan="7">Agenda</th>
                    </tr>
                    <tr>
                        <th>Segunda</th>
                        <th>Terça</th>
                        <th>Quarta</th>
                        <th>Quinta</th>
                        <th>Sexta</th>
                        <th>Sábado</th>
                        <th>Domingo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>14:00 as 19:00</td>
                        <td>9:00 as 11:30</td>
                        <td>9:00 as 11:30</td>
                        <td>9:00 as 11:30</td>
                        <td>9:00 as 11:30</td>
                        <td>8:30 as 19:00</td>
                        <td>Dispensado</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>14:00 as 19:00</td>
                        <td>14:00 as 19:00</td>
                        <td>14:00 as 19:00</td>
                        <td>14:00 as 19:00</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

    <!-- Bloco do artista usando o modal do bootstrap -->
    <div class="modal fade" id="artistaModal" tabindex="-1" aria-labelledby="artistaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="artistaModalLabel">Sobre o Artista</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <!-- Imagem à esquerda -->
                    <img src="multimidia/artista.jpg" alt="Imagem do Artista" class="img-fluid mb-3" style="max-width: 45%; height: auto; margin-right: 20px;">
                    
                    <!-- Texto à direita -->
                    <div class="modal-text">
                        <h5>José Euclides Gomes da Silva</h5>
                        <p>Tempo de profissão: ??</p>
                        <p>Dono e único profissional do seu próprio salão. Trabalhando sozinho, ele se dedica a cada cliente, oferecendo um atendimento exclusivo e personalizado.</p>
                        <p>Com foco total na satisfação e bem-estar de quem o procura, José cuida pessoalmente de cada corte, coloração e tratamento, garantindo um serviço de alta qualidade.</p>
                        <p>Venha conhecer um atendimento onde você é sempre o centro das atenções!</p>
                        <!-- Link do Instagram -->
                        <a href="https://www.instagram.com/eu_salaonovoestilo" target="_blank" id="linkinstagram">
                            <i class="fab fa-instagram"></i>@eu_salaonovoestilo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once "footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12j09WvPxzG4Fq+j1rvxPH0MXsZB+IEXFXFT50TJjO3GMpwr" crossorigin="anonymous"></script>
</body>
</html>
