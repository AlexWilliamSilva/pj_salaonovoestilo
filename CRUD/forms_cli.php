<?php
    require_once "dbconnect.php";
    require_once "nav.php";

?>

<?php   
    if (isset($_POST['addnew']))  
    {
        if (empty($_POST['nome_cli']) || empty($_POST['tel_cli']) || empty($_POST['data_nasc_cli']) || empty($_POST['numero']) || empty($_POST['rua']) || empty($_POST['bairro']) || empty($_POST['CEP']))
        {
            echo "Por favor preencha todos os campos obrigatórios";             
        }
        else 
        {
            $nome_cli = $_POST['nome_cli'];
            $tel_cli = $_POST['tel_cli'];
            $data_nasc_cli = $_POST['data_nasc_cli'];
            $numero = $_POST['numero'];
            $rua = $_POST['rua'];
            $bairro = $_POST['bairro'];
            $cep = $_POST['CEP'];

            $sql = "INSERT INTO Clientes (nome_cli, tel_cli, data_nasc_cli, numero, rua, bairro, CEP) 
                    VALUES ('$nome_cli', '$tel_cli', '$data_nasc_cli', '$numero', '$rua', '$bairro', '$cep')";
                    
            if ($con->query($sql) == true)
            {
                echo "<div class='alert alert-success'> Novo Cliente adicionado com sucesso </div>";
            }
            else
            {
                echo "<div class='alert alert-danger'> Error: Ocorreu um erro ao adicionar </div>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+Fornecedores | Salão Novo Estilo</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>

    <h3>Cadastro Clientes</h3>

    <form action="" method="post">  <!-- formulario -->
        <label for="nome_cli">Nome:</label>
        <input type="text" name="nome_cli" id="nome_cli" class="form-control">
        <br><br>

        <label for="tel_cli">Telefone:</label>
        <input type="tel" name="tel_cli" id="tel_cli" class="form-control">
        <br><br>

        <label for="data_nasc_cli">Data de Nascimento:</label>
        <input type="date" name="data_nasc_cli" id="data_nasc_cli" class="form-control">
        <br><br>

        <label for="numero">Numero:</label>
        <input type="text" name="numero" id="numero" class="form-control">
        <br><br>

        <label for="rua">Rua:</label>
        <input type="text" name="rua" id="rua" class="form-control">
        <br><br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" class="form-control">
        <br><br>

        <label for="CEP">CEP:</label>
        <input type="number" name="CEP" id="CEP" class="form-control">
        <br><br>

        <input type="submit" name="addnew" class="btn btn-success" value="Add New">
    </form>

</body>
</html>