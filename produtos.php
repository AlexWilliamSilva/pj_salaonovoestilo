<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão Novo Estilo</title>
    <link rel="stylesheet" href="style/styles.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body id="bodyproduto">
    <?php
        require_once "header.php";
        require_once "nav.php";
    ?>
       
    <main id="fundoproduto">
        
        <h1>Produtos</h1>
        <hr>

        <section id="divblockconjunto">    
                <!-- produto 01 -->
            <div id="divblock">
                <img src="multimidia/mobile/perfumemobile.jpg" alt="" id="imgprod">
                <div id="textoprodutos">
                    <p>Essencial Exclusivo Deo Perfume <br><strong>Masculino 100 ml Natura</strong></p>
                </div>
            </div>
                <!-- fecha produto 01 -->

                <!-- produto 02 -->
            <div id="divblock">
                <img src="multimidia/mobile/kaiakmobile.jpg" alt="" id="imgprod">
                <div id="textoprodutos">
                    <p>Kaiak Oceano <strong>100 ml Natura</strong></p>
                </div>
            </div>
            <!-- fecha produto 02 -->  
                
            <!-- produto 03 -->
            <div id="divblock"> 
                <img src="multimidia/mobile/desodorantemobile.jpg" alt="" id="imgprod">
                <div id="textoprodutos">
                    <p>Desodorante Antitranspirante Roll-On <br><strong>75ml Natura Homem Sagaz</strong></p>
                </div>
            </div>  
            <!-- fecha produto 03 -->

            <!-- produto 04 -->
            <div id="divblock">
                <img src="multimidia/mobile/pomadamobile.jpg" alt="" id="imgprod">
                <div id="textoprodutos">
                    <p>Gel Classic Barber Style - <strong>Gel e Pomada 240g</strong></p>
                </div>
            </div>
            <!-- fecha produto 04 -->   

        </section>

    </main>
    <?php
        require_once "footer.php";
    ?>
</body>

</html>