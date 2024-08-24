<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salão Novo Estilo</title>
        <link rel="stylesheet" href="style/produtos.css" type="text/css">
            
</head>
<body>
    <header>
        <?php
            require_once "header.php";
        ?>
    </header>

    <nav>
            <?php 
                require_once "nav.php";
            ?>
    </nav>

<main id="fundoproduto">
        
        <div id="tituloprodutos">
            <h1>Produtos</h1>      
        </div>

            <div id="divblockconjunto">    
                    <!-- produto 01 -->
                <div id="divblock">
                    <img src="multimidia/perfume.webp" alt="" id="imgprod">
                    <p>Essencial Exclusivo Deo Perfume <strong>Masculino 100 ml Natura</strong></p>
                </div>
                    <!-- fecha produto 01 -->

                    <!-- produto 02 -->
                <div id="divblock">
                    <img src="multimidia/kaiak.webp" alt="" id="imgprod">
                    <p>Kaiak Oceano <strong>100 ml Natura</strong></p>
                </div>
                <!-- fecha produto 02 -->  
                
                <!-- produto 03 -->
                <div id="divblock"> 
                    <img src="multimidia/desodorante.webp" alt="" id="imgprod">
                    <p>Desodorante Antitranspirante Roll-On <strong>75ml Natura Homem Sagaz</strong></p>
                </div> 
                <!-- fecha produto 03 -->

                <!-- produto 04 -->
                <div id="divblock">
                    <img src="multimidia/pomada.webp" alt="" id="imgprod">
                    <p>Gel Classic Style <strong>240g</strong></p>
                </div>
                <!-- fecha produto 04 -->   
            </div>

    </main>
 
    <footer>
        <?php 
            require_once "footer.php";
        ?>
    </footer>

</body>
</html>