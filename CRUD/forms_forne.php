<?php
    require_once "dbconnect.php";

    if (isset($_POST['addnew'])) {
        // Verificação de campos obrigatórios
        if (empty($_POST['nome_fornecedor']) || empty($_POST['razao_social']) || empty($_POST['email_forn']) || empty($_POST['tel_forn']) || empty($_POST['CNPJ']) || empty($_POST['numero']) || empty($_POST['rua']) || empty($_POST['bairro']) || empty($_POST['CEP']) || empty($_POST['uf']) || empty($_POST['pais']) || empty($_POST['status_fornecedor'])) {
            echo "Por favor, preencha todos os campos obrigatórios";
        } else {
            // Captura dos dados
            $nome_fornecedor = $_POST['nome_fornecedor'];
            $razao_social = $_POST['razao_social'];
            $email_forn = $_POST['email_forn'];
            $tel_forn = $_POST['tel_forn'];
            $CNPJ = $_POST['CNPJ'];
            $numero = $_POST['numero'];
            $rua = $_POST['rua'];
            $bairro = $_POST['bairro'];
            $cep = $_POST['CEP'];
            $uf = $_POST['uf'];
            $pais = $_POST['pais'];
            $status_fornecedor = $_POST['status_fornecedor'];

            // Consulta SQL com o campo telefone incluído
            $sql = "INSERT INTO Fornecedores (nome_fornecedor, razao_social, email_forn, tel_forn, CNPJ, numero, rua, bairro, CEP, uf, pais, status_fornecedor) 
                    VALUES ('$nome_fornecedor', '$razao_social', '$email_forn', '$tel_forn', '$CNPJ', '$numero', '$rua', '$bairro', '$cep', '$uf', '$pais', '$status_fornecedor')";
            
            if ($con->query($sql) === true) {
                echo "<div class='alert alert-success'>Novo Fornecedor adicionado com sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro: Ocorreu um erro ao adicionar</div>";
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
<?php
require_once "nav.php";

?>

    <h3>Cadastro Fornecedores</h3>

    <form action="" method="post"> <!-- Formulário de cadastro -->

        <label for="nome_fornecedor">Nome:</label>
        <input type="text" name="nome_fornecedor" id="nome_fornecedor" class="form-control" required> 
        <br><br>

        <label for="razao_social">Razão social:</label>
        <input type="text" name="razao_social" id="razao_social" class="form-control" required>
        <br><br>
        
        <label for="email_forn">Email:</label>
        <input type="email" name="email_forn" id="email_forn" class="form-control" required>
        <br><br>

        <label for="tel_forn">Telefone:</label>
        <input type="text" name="tel_forn" id="tel_forn" class="form-control">
        <br><br>

        <label for="CNPJ">CNPJ:</label>
        <input type="text" name="CNPJ" id="CNPJ" class="form-control" required>
        <br><br>

        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" class="form-control">
        <br><br>

        <label for="rua">Rua:</label>
        <input type="text" name="rua" id="rua" class="form-control">
        <br><br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" class="form-control">
        <br><br>

        <label for="CEP">CEP:</label>
        <input type="text" name="CEP" id="CEP" class="form-control">
        <br><br>

        <label for="uf">UF:</label>
        <input type="text" name="uf" id="uf" class="form-control">
        <br><br>

        <label for="pais">País:</label>
        <input type="text" name="pais" id="pais" class="form-control">
        <br><br>

        <label for="status_fornecedor">Status fornecedor:</label><br>
        <input type="radio" name="status_fornecedor" id="status_ativo" value="Ativo" required>
        <label for="status_ativo">Ativo</label>
        <input type="radio" name="status_fornecedor" id="status_inativo" value="Inativo" required>
        <label for="status_inativo">Inativo</label>
        <br><br>


        <input type="submit" name="addnew" class="btn btn-success" value="Adicionar Fornecedor">
    </form>

</body>
</html>
