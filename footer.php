<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/footer.css" type="text/css">
    <title>Footer</title>
    <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg " type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* footer Mobile */

/* tudo do footer */
* {
    font-family: 'Inria Serif', serif;
    margin: 0;
    padding: 0;
}

footer li {
    font-size: 12px;
  
    
}

footer a {
    text-decoration: none;
}

.containerfooter {
    max-width: 1200px;
    margin: 0 auto;
}

footer {
    background-color: #6C6C6C24;
    color: #000;
    padding: 10px 0 0;
    margin-top: 363px;
}

.footer-content {
    display: flex;
    flex-direction: column;
    text-align: center;
}

.footer-logo img {
    padding-bottom: 10px;
    display: block;
    margin: 0 auto;
}

.footer-logo p {
    width: 300px;
    color: #000;
    margin: 0 auto;
}

.links-rapidos, #contatofooter, #localizacaofooter, #servicosfooter {
    margin-top: 20px;
}

.links-rapidos h4, #contatofooter h4, #localizacaofooter h4, #servicosfooter h4 {
    margin-bottom: 20px;
}

.links-rapidos li {
    margin-bottom: 10px;
    
}
.links-rapidos, .icon-porta  ul [
    list-style-image: url('multimidia/icon/portaiconindex.png');
]

.links-rapidos a {
    color: #000;
    text-align: center;
    font-size: 18px;
}


#contatofooter li {
    margin: 15px 0;
    display: flex;
    gap: 10px;
    color: #000;
    font-weight: 200;
    justify-content: center;
}

.copyright {
    background-color: #ced4da;
    padding: 10px;
    text-align: center;
}

.social-icons a {
    margin-right: 0.5em;
    color: #000;
    text-decoration: none;
    font-size: 24px;
}

.social-icons {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

#hr-servico {
    border: #000000 solid 1px;
    width: 185px;
    margin: 20px auto;
}

#localizacaofooter {
    text-align: center;
}

#localizacaofooter li {
    list-style: none;
}


@media (min-width: 768px) {
    /* footer */

    .footer-content {
        justify-content: space-between;
        flex-direction: row;
    }

    footer {
        padding: 20px 0 0;
    }

    #servicosfooter hr {
        margin-top: 10px;
    }

    #contatofooter {
        justify-content: start;
    }

    .footer-logo {
        border-right: 1px solid #6C6C6C24;
    }

    .links-rapidos, #contatofooter, #localizacaofooter, #servicosfooter {
        margin-top: 20px;
    }
    
    .links-rapidos h4, #contatofooter h4, #localizacaofooter h4, #servicosfooter h4 {
        margin-bottom: 20px;
    }
    
    .links-rapidos li {
        margin-bottom: 10px;
    }
    
    .links-rapidos a {
        color: #000;
    }
    
    #contatofooter li {
        margin: 0 auto;
        display: flex;
        gap: 10px;
        color: #000;
        font-weight: 200;
        justify-content: center;
    }
    
    .copyright {
        background-color: #ced4da;
        padding: 10px;
        text-align: center;
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
                        <source media="(min-width: 620px)" srcset="multimidia/logosalaofooter.png">
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
                    <h4>Contato</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Email: joseeucledes@hotmail.com</li>
                        <li>Telefone: (19) 99367-8114</li>
                    </ul>
                </div>

                 <!-- Localização -->
                 <div  id="localizacaofooter">
                    <h4>Localização</h4>
                    <hr>
                    <li>Rua Pedro Baston 176 Itapira - SP</li>
                </div>


                <div id="servicosfooter">
                    <h4>Serviços</h4>
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
                    <h4>Links rápidos</h4>
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
</body>

</html>
