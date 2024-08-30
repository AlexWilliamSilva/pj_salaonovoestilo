<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sobre.css" type="text/css">
    <title>Sobre - Salão Novo Estilo Itapira</title>
    <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg " type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

        <?php
            require_once "header.php";
            require_once "nav.php";
        ?>
        
        <main class="mainsobre">

            <div id="titlesobrenos">
                <h1>Sobre Nós</h1>
                <hr>
            </div>

            <div class="localizacaodiv">
                        
                <div id="titulosalaosobre">    
                    <h2>Salão Novo Estilo</h2>
                </div>
                    
                <div id="imgsalaosobre">
                    <picture>
                        <source media="(min-width: 620px)" srcset="multimidia/Midia.jpg">
                        <img src="multimidia/mobile/Midiamobile.jpg" alt="">
                    </picture>
                    <hr>
                </div>
                               
                <div id="localizacaosalaodisplay">
                    <iframe id="localizacaosalao" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.2531441744127!2d-46.795096224658856!3d-22.457119579574247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c902f8a770d707%3A0xf39ef5bb98a3baef!2sSal%C3%A3o%20Novo%20Estilo!5e0!3m2!1spt-BR!2sbr!4v1724893539614!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="nomesalao">   

                    <h4>Salão Novo Estilo</h4>
                    <hr>
                    <p>Salão de Beleza</p> 
                        
                </div> 

                <div id="localizacaoendereco">
                    <p>R. Pedro Baston, 176 - Jose Tonolli, Itapira - SP,<br> 13973-729</p>
                </div>
                    
            </div>

            <div class="artistadiv">

                <div class="titleartistasobre">
                    <h2>Artista</h2>
                    <hr>
                </div>

                <div id="img-artistasobre">
                    <picture>
                        <source media="(min-width: 620px)" srcset="multimidia/artista.jpg">
                        <img src="multimidia/mobile/artistamobile.jpg" alt="">
                    </picture>
                </div>
                
                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                    <div id="botaoartistasobre">
                        <p>Saiba Mais</p>
                    </div>
                </button>
                
            </div>    

            <div id="divagenda">
                <table id="table">
                <thead class="thead-light">
                    <tr>
                        <th id="agenda"scope="col"></th>
                        <th id="agenda"scope="col"></th>
                        <th id="agenda"scope="col"></th>
                        <th id="agenda"scope="col">Agenda</th>
                        <th id="agenda"scope="col"></th>
                        <th id="agenda"scope="col"></th>
                        <th id="agenda"scope="col"></th>
                    </tr>
                </thead>
                
                <thead class="thead-light">
                    <tr>
                        <th id="letradias" scope="col">Segunda</th>
                        <th id="letradias" scope="col">Terça</th>
                        <th id="letradias" scope="col">Quarta</th>
                        <th id="letradias" scope="col">Quinta</th>
                        <th id="letradias" scope="col">Sexta</th>
                        <th id="letradias" scope="col">Sábado</th>
                        <th id="letradias" scope="col">Domingo</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>14:00 as 19:00</td>
                        <td>9:00 as 11:30 </td>
                        <td>9:00 as 11:30 </td>
                        <td>9:00 as 11:30 </td>
                        <td>9:00 as 11:30 </td>
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
                
                </table>
            </div>

        </main>

        <?php
            require_once "footer.php";
        ?>

        
</body>
</html>