<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Footer</title>
    <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg " type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* footer Mobile */

/* tudo do footer */

footer {
    background-color: #6C6C6C40;
    color: #000;
    font-family: 'Inria Serif', serif;
}

footer li {
    font-size: 12px;   
}

.titulo-sobre-footer {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    
}

.containerfooter {
    margin-left: 10%;
    margin-right: 10%; 
}

.footer-content {
    display: flex;
    flex-direction: column;
    text-align: center;
}

.footer-logo img {
    margin-top: 50px;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.social-icons a {
    color: #000;
    font-size: 24px;
    text-decoration: none;
}

.links-rapidos, #contatofooter, #localizacaofooter, #servicosfooter {
    padding-top: 20px;
    padding-bottom: 30px;
}

.links-rapidos ul {
    list-style-image: url('multimidia/icon/portaiconindex.png');
}

.links-rapidos a {
    color: #000;
    text-align: center;
    font-size: 18px;
    text-decoration: none;    
}

#contatofooter {
    padding-top: 50px;
}

#contatofooter li {   
    display: flex;
    justify-content: center;  
}

#localizacaofooter li {
    list-style: none;
}

#texto-p {
    margin-left:5em;   
}

#texto-p li{
    text-align: left ;
    
}

/* direitos autorais */

.copyright {
    background-color: #696969;
    padding: 10px;
    text-align: center;
    color: #fff;
}

@media (min-width: 780px) {
    /* footer */

    .footer-content {
        justify-content: space-between;
        flex-direction: row;
    }

    .links-rapidos, #contatofooter, #localizacaofooter, #servicosfooter {
        padding-top: 40px;
        padding-bottom: 50px;
    }

    #texto-p {
        width: 65%;
        margin-left: 4em;    
    }
    .titulo-sobre-footer {
        font-size: 1vw;
    }

    /* fecha footer */
}
    </style>
</head>
<body>

    <!-- Footer -->
    <footer>
        <div class="containerfooter">
            <div class="footer-content">
                <div class="footer-logo">
                    <picture>
                        <source media="(min-width: 780px)" srcset="multimidia/logosalaofooter.png">
                        <img src="multimidia/mobile/logosalaofootermobile.png" alt="logo da barbearia no rodapé">
                    </picture>

                    <h3>Salão Novo Estilo</h3>
                    
                    <div class="social-icons mt-3">
                        <a href="#" target="_blank" class="fab fa-whatsapp"></a>
                        <a href="#" target="_blank" class="fab fa-instagram"></a>
                    </div>
                </div>

                <!-- Contato -->
                <div  id="contatofooter">
                    <h4 class="titulo-sobre-footer">Contato</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Email: joseeucledes@hotmail.com</li>
                        <li>Telefone: (19) 99367-8114</li>
                    </ul>
                </div>

                 <!-- Localização -->
                 <div  id="localizacaofooter">
                    <h4 class="titulo-sobre-footer">Localização</h4>
                    <hr>
                    <li>Rua Pedro Baston 176 Itapira - SP</li>
                </div>


                <div id="servicosfooter">
                    <h4 class="titulo-sobre-footer">Serviços</h4>
                    <hr>
                    <div id="texto-p">
                        <li>Limpeza de pele</li>
                        <li>Luzes/masculino</li>
                        <li>Cortes cabelo masculino</li>
                        <li>Cortes cabelo feminino</li>
                        <li>Progressiva masculino</li>
                        <li>Progressiva feminino</li>
                        <li>Relaxamento capilar masculino</li>
                        <li>Barba</li>
                        <li>Sombrancelha masculino</li>
                    </div>
                </div>

                <div class="links-rapidos">
                    <h4 class="titulo-sobre-footer">Links rápidos</h4>
                    <hr>
                    <ul class="icon-porta">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="produtos.php">Produtos</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <p class="copyright">Copyright &copy; 2024 Salão Novo Estilo</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7J9dD7nE4aR8ae5TW5PH4mF2N5H9Rp/zF3Y3wU5xj5eIz+5mM9oKNhA70Z7PfFNOe" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>