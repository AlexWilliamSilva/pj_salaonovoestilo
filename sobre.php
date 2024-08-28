<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sobre.css" type="text/css">
    <title>Sobre - Salão Novo Estilo Itapira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        

/* sobre */
#mainsobre {
    background-color: #F6F6F6;   
}

#mainsobre h1 {
    font-family: 'Inria Sans', sans-serif;
    text-align: center;
    color: #000;
    margin-bottom: 5px;
    padding: 40px 0px 0px 0px;
}

#mainsobre hr {
    border: #000 solid 1px;
    width: 200px;
    margin: auto;
    margin-bottom: 60px;
}

#localizacao {
    background-color: #fff;
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.336);
    padding-bottom: 250px;
    padding-top: 10px

}

#localizacao h2 {
    text-align: center;
    font-size: 35px;
    padding-top: 35px;

}

#localizacao img {

}

#localizacao hr {
    margin-top: 400px;
    width: 380px;
    
}
#localizacaosalao {
    display: flex;
    float: right;
}
#nomesalao h4 {
    font-size: 25px;
    margin-top: 220px;
    margin-bottom: -2px;
}
#nomesalao hr {
    width: 300px;
    margin-top: 2px;
}

#nomesalao p {
    font-size: 20px;
    text-align: center;
}

#localizacaoendereco {
    background-color: #D9D9D9;
    border: #D9D9D9 solid 1px;
    border-radius: 10px;
}

#localizacaoendereco p {
    font-size: 20px;
    margin-top: 10px;
}

#artista {
    margin-top: 50px;
    background-color: #fff;
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.336);
    height: 500px;
}
#artista h2 {
    font-size: 30px;
    text-align: center;
    margin-bottom: 2px;
}

#artista hr {
    margin-top: 1px;
}

#artista a {
    font-size: 20px;
}

#agenda {
    margin-top: 100px;
}

    </style>
</head>
<body>

        <?php
            require_once "header.php";
            require_once "nav.php";
        ?>
        
        <main id="mainsobre">

            <h1>Sobre Nós</h1>
            <hr>

            <div id="localizacao">
                    
                <h2>Salão Novo Estilo</h2>

                <img src="" alt="">
                <hr>
                   
                <div id="localizacaosalao">   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116982.06926906556!2d-46.69724903042975!3d-23.615460260218466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58838f2edaf1%3A0x4a05fe85807b143f!2sDivis%C3%A3o%20de%20Vigil%C3%A2ncia%20de%20Zoonoses%20-%20DVZ!5e0!3m2!1spt-BR!2sbr!4v1724283117365!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>         

                <div id="nomesalao">   

                    <h4>Salão Novo Estilo</h4>
                    <hr>
                    <p>Salão de Beleza</p>

                    <div id="localizacaoendereco">
                        <p>R. Pedro Baston, 176 - Jose Tonolli, Itapira - SP,<br> 13973-729</p>
                    </div>

                </div>      
                  
            </div>

            <div id="artista">

                <h2>Artista</h2>
                <hr>

                <img src="" alt="">

                <div>
                    <button>Saiba Mais</button>
                </div>

            </div>         

        </main>

        <?php
            require_once "footer.php";
        ?>

        
</body>
</html>