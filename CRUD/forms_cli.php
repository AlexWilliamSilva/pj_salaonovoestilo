<?php
include_once "../includes/dbconnect.php";
require_once "nav.php";

// Verificação se o formulário foi enviado
if (isset($_POST['addnew']))  
{
    // Verificação de campos obrigatórios
    if (empty($_POST['nome_cli']) || empty($_POST['email_cli']) || empty($_POST['tipo_do_documento_cli']) || empty($_POST['documento_cli']) || empty($_POST['uf']) || empty($_POST['cidade']) || empty($_POST['bairro']) || empty($_POST['rua']) || empty($_POST['numero']) || empty($_POST['status_cli']))
    {
        echo "<div class='alert alert-danger'>Por favor, preencha todos os campos obrigatórios</div>";             
    }
    else 
    {
        // Captura dos dados
        $data_cadastro_cli = date('Y-m-d H:i:s'); // Data de cadastro
        $nome_cli = $_POST['nome_cli'];
        $nome_social = $_POST['nome_social'] ?? null;
        $email_cli = $_POST['email_cli'];
        $telefone_cli = $_POST['telefone_cli'] ?? null;
        $celular_cli = $_POST['celular_cli'] ?? null;
        $data_nascimento = $_POST['data_nascimento'] ?? null;
        $tipo_do_documento_cli = $_POST['tipo_do_documento_cli'];
        $documento_cli = $_POST['documento_cli'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'] ?? null;
        $cep = $_POST['cep'] ?? null;
        $status_cli = $_POST['status_cli'];

        // Uso de prepared statements para inserir cliente
        $stmt = $con->prepare("INSERT INTO Cliente (data_cadastro_cli, nome_cli, nome_social, email_cli, telefone_cli, celular_cli, data_nascimento, tipo_do_documento_cli, documento_cli, uf, cidade, bairro, rua, numero, complemento, cep, status_cli) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("ssssssssssssssss", $data_cadastro_cli, $nome_cli, $nome_social, $email_cli, $telefone_cli, $celular_cli, $data_nascimento, $tipo_do_documento_cli, $documento_cli, $uf, $cidade, $bairro, $rua, $numero, $complemento, $cep, $status_cli);
            if ($stmt->execute()) {
                echo "<div class='alert alert-success'>Novo Cliente adicionado com sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro ao adicionar cliente: " . $stmt->error . "</div>";
            }
            $stmt->close();
        } else {
            echo "<div class='alert alert-danger'>Erro ao preparar a consulta: " . $con->error . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes | Salão Novo Estilo</title>
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

        th {
            background-color: #f2f2f2; /* Cor de fundo para o cabeçalho */
        }

        .alert {
            margin: 20px auto; 
            padding: 10px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

    <h1>Cadastro de Clientes</h1>

    <form action="forms_cli.php" method="POST">  

        <label for="nome_cli">Nome:</label><br>
        <input type="text" name="nome_cli" id="nome_cli" value="<?= htmlspecialchars($nome_cli ?? '') ?>" required>
        <br><br>

        <label for="nome_social">Nome Social:</label><br>
        <input type="text" name="nome_social" id="nome_social" value="<?= htmlspecialchars($nome_social ?? '') ?>">
        <br><br>

        <label for="email_cli">Email:</label><br>
        <input type="email" name="email_cli" id="email_cli" value="<?= htmlspecialchars($email_cli ?? '') ?>" required>
        <br><br>

        <label for="telefone_cli">Telefone:</label><br>
        <input type="tel" name="telefone_cli" id="telefone_cli" value="<?= htmlspecialchars($telefone_cli ?? '') ?>">
        <br><br>

        <label for="celular_cli">Celular:</label><br>
        <input type="tel" name="celular_cli" id="celular_cli" value="<?= htmlspecialchars($celular_cli ?? '') ?>">
        <br><br>

        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" id="data_nascimento" value="<?= htmlspecialchars($data_nascimento ?? '') ?>">
        <br><br>

        <label for="tipo_do_documento_cli">Tipo do Documento:</label><br>
        <input type="text" name="tipo_do_documento_cli" id="tipo_do_documento_cli" value="<?= htmlspecialchars($tipo_do_documento_cli ?? '') ?>" required>
        <br><br>

        <label for="documento_cli">Documento:</label><br>
        <input type="text" name="documento_cli" id="documento_cli" value="<?= htmlspecialchars($documento_cli ?? '') ?>" required>
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

        <label for="numero">Número:</label><br>
        <input type="text" name="numero" id="numero" value="<?= htmlspecialchars($numero ?? '') ?>" required>
        <br><br>

        <label for="complemento">Complemento:</label><br>
        <input type="text" name="complemento" id="complemento" value="<?= htmlspecialchars($complemento ?? '') ?>">
        <br><br>

        <label for="cep">CEP:</label><br>
        <input type="text" name="cep" id="cep" value="<?= htmlspecialchars($cep ?? '') ?>">
        <br><br>

        <label for="status_cli">Status:</label><br>
        <input type="radio" name="status_cli" id="status_ativo" value="Ativo" required <?= (isset($status_cli) && $status_cli == 'Ativo') ? 'checked' : '' ?>>
        <label for="status_ativo">Ativo</label>
        <input type="radio" name="status_cli" id="status_inativo" value="Inativo" required <?= (isset($status_cli) && $status_cli == 'Inativo') ? 'checked' : '' ?>>
        <label for="status_inativo">Inativo</label>
        <br><br>

        <input type="submit" name="addnew" class="btn btn-success" value="Adicionar Cliente">
    </form>

    <hr>

    <!-- Mostrando os clientes -->
    <h2>Lista de Clientes</h2>
    <table>
        <thead>  
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Data de Nascimento</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // Pegando os dados do banco de dados
                $result = $con->query("SELECT id_cli, nome_cli, email_cli, telefone_cli, celular_cli, data_nascimento, status_cli FROM Cliente");

                while ($cliente = $result->fetch_assoc()): 
            ?>
                <tr>
                    <td><?= htmlspecialchars($cliente['id_cli']) ?></td>
                    <td><?= htmlspecialchars($cliente['nome_cli']) ?></td>
                    <td><?= htmlspecialchars($cliente['email_cli']) ?></td>
                    <td><?= htmlspecialchars($cliente['telefone_cli']) ?></td>
                    <td><?= htmlspecialchars($cliente['celular_cli']) ?></td>
                    <td><?= htmlspecialchars($cliente['data_nascimento']) ?></td>
                    <td><?= htmlspecialchars($cliente['status_cli']) ?></td>
                    <td>
                        <a href="forms_cli.php?id_cli=<?= $cliente['id_cli'] ?>&toggle_status=1">
                            <?= ($cliente['status_cli'] == 'Ativo') ? 'Desabilitar' : 'Habilitar' ?>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>
