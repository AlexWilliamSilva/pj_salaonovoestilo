<?php
include_once "../includes/dbconnect.php";
require_once "nav.php";

if (isset($_POST['addnew'])) {
    // Verificação de campos obrigatórios
    if (empty($_POST['nome_fornecedor']) || empty($_POST['email_forn']) || empty($_POST['tipo_do_documento']) || empty($_POST['documento_for']) || empty($_POST['uf']) || empty($_POST['cidade']) || empty($_POST['bairro']) || empty($_POST['rua']) || empty($_POST['cep']) || empty($_POST['status_fornecedor'])) {
        echo "Por favor, preencha todos os campos obrigatórios";
    } else {
        // Captura dos dados
        $nome_fornecedor = $_POST['nome_fornecedor'];
        $email_forn = $_POST['email_forn'];
        $tel_forn = $_POST['tel_forn'] ?? null; // Telefone pode ser opcional
        $celular_for = $_POST['celular_for'] ?? null; // Celular pode ser opcional
        $tipo_do_documento = $_POST['tipo_do_documento'];
        $documento_for = $_POST['documento_for'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $cep = $_POST['cep'];
        $status_fornecedor = $_POST['status_fornecedor'];

        // Consulta SQL com os novos campos
        $sql = "INSERT INTO Fornecedor (data_cadastro_for, nome_for, email_for, telefone_for, celular_for, tipo_do_documento_for, documento_for, uf, cidade, bairro, rua, cep, status_for) 
                VALUES (NOW(), '$nome_fornecedor', '$email_forn', '$tel_forn', '$celular_for', '$tipo_do_documento', '$documento_for', '$uf', '$cidade', '$bairro', '$rua', '$cep', '$status_fornecedor')";
        
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
        
        table {
            width: 80%;
            margin: 20px auto; 
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center; 
        }

        tr {
            width: 80%; 
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>

    <h1>Cadastro Fornecedores</h1>

    <form action="forms_forne.php" method="POST"> <!-- Formulário de cadastro -->

        <label for="nome_fornecedor">Nome:</label><br>
        <input type="text" name="nome_fornecedor" id="nome_fornecedor" value="<?= htmlspecialchars($nome_fornecedor ?? '') ?>" required> 
        <br><br>

        <label for="email_forn">Email:</label><br>
        <input type="email" name="email_forn" id="email_forn" value="<?= htmlspecialchars($email_forn ?? '') ?>" required>
        <br><br>

        <label for="tel_forn">Telefone:</label><br>
        <input type="text" name="tel_forn" id="tel_forn" value="<?= htmlspecialchars($tel_forn ?? '') ?>">
        <br><br>

        <label for="celular_for">Celular:</label><br>
        <input type="text" name="celular_for" id="celular_for" value="<?= htmlspecialchars($celular_for ?? '') ?>">
        <br><br>

        <label for="tipo_do_documento">Tipo de Documento:</label><br>
        <input type="text" name="tipo_do_documento" id="tipo_do_documento" value="<?= htmlspecialchars($tipo_do_documento ?? '') ?>" required>
        <br><br>

        <label for="documento_for">Documento:</label><br>
        <input type="text" name="documento_for" id="documento_for" value="<?= htmlspecialchars($documento_for ?? '') ?>" required>
        <br><br>

        <label for="uf">UF:</label><br>
        <input type="text" name="uf" id="uf" value="<?= htmlspecialchars($uf ?? '') ?>" required>
        <br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" name="cidade" id="cidade" value="<?= htmlspecialchars($cidade ?? '') ?>" required>
        <br><br>

        <label for="bairro">Bairro:</label><br>
        <input type="text" name="bairro" id="bairro" value="<?= htmlspecialchars($bairro ?? '') ?>" required>
        <br><br>

        <label for="rua">Rua:</label><br>
        <input type="text" name="rua" id="rua" value="<?= htmlspecialchars($rua ?? '') ?>" required>
        <br><br>

        <label for="cep">CEP:</label><br>
        <input type="text" name="cep" id="cep" value="<?= htmlspecialchars($cep ?? '') ?>" required>
        <br><br>

        <label for="status_fornecedor">Status fornecedor:</label><br>
        <input type="radio" name="status_fornecedor" id="status_ativo" value="Ativo" <?= (isset($status_fornecedor) && $status_fornecedor == 'Ativo') ? 'checked' : '' ?> required>
        <label for="status_ativo">Ativo</label>
        <input type="radio" name="status_fornecedor" id="status_inativo" value="Inativo" <?= (isset($status_fornecedor) && $status_fornecedor == 'Inativo') ? 'checked' : '' ?> required>
        <label for="status_inativo">Inativo</label>
        <br><br>

        <input type="submit" name="addnew" class="btn btn-success" value="Adicionar Fornecedor">
    </form>

    <hr>

    <!-- Mostrando os fornecedores -->
    <h2>Lista de Fornecedores</h2>
    <table border="1">
        <thead>  
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Tipo de Documento</th>
                <th>Documento</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // Pegando os dados do banco de dados
                $result = $con->query("SELECT id_for, nome_for, email_for, telefone_for, celular_for, tipo_do_documento_for, documento_for, status_for FROM Fornecedor");

                while ($fornecedor = $result->fetch_assoc()): 
            ?>
                <tr>
                    <td><?= htmlspecialchars($fornecedor['id_for']) ?></td>
                    <td><?= htmlspecialchars($fornecedor['nome_for']) ?></td>
                    <td><?= htmlspecialchars($fornecedor['email_for']) ?></td>
                    <td><?= htmlspecialchars($fornecedor['telefone_for']) ?></td>
                    <td><?= htmlspecialchars($fornecedor['celular_for']) ?></td>
                    <td><?= htmlspecialchars($fornecedor['tipo_do_documento_for']) ?></td>
                    <td><?= htmlspecialchars($fornecedor['documento_for']) ?></td>
                    <td><?= htmlspecialchars($fornecedor['status_for']) ?></td>
                    <td>
                        <a href="forms_forne.php?id_for=<?= $fornecedor['id_for'] ?>&toggle_status=1">
                            <?= ($fornecedor['status_for'] == 'Ativo') ? 'Desabilitar' : 'Habilitar' ?>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>