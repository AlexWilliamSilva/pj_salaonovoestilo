<?php
    include_once "header.php";
    include_once "nav.php";
    include_once "footer.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salão Novo Estilo</title>
        <link rel="stylesheet" href="style/principal.css" type="text/css">
</head>
<body>
    <header>
        <?php
            require_once "header.php";
        ?>
    </header>

    <nav>
        <?php
            require_once "nav.php"
        ?>
    </nav>

    <main>
            <h1>Produtos</h1>

            <!-- produto 01 -->
        <div>
            <img src="multimidia/perfume.webp" alt="">
                <p>Essencial Exclusivo Deo Perfume 100 mL Natura</p>

        </div>
            <!-- fecha produto 01 -->

            <!-- produto 02 -->
        <div>
            <img src="multimidia/kaiak.webp" alt="">
                <p>Kaiak Oceano 100 ml Natura</p>
        </div>
         <!-- fecha produto 02 -->  
         
         <!-- produto 03 -->
         <div> 
            <img src="multimidia/desodorante.webp" alt="">
                <p>Desodorante Antitranspirante Roll-On 75ml Natura Homem Sagaz</p>
        </div> 
         <!-- fecha produto 03 -->

         <!-- produto 04 -->
         <div>
            <img src="multimidia/pomada.webp" alt="">
                <p>Barber Style Gel Classic Style 240g </p>
        </div>
         <!-- fecha produto 04 -->   


    </main>

    <footer>
        <?php
            require_once "footer.php";
        ?>
    </footer>

</body>
</html>