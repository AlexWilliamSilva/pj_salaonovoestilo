<?php
    include_once "../includes/dbconnect.php";

    $erro = '';
    $success = '';

    //Inserir/Atualizar Serviço
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nome_serv"], $_POST["preco_serv"], $_POST["prazo_serv"])) {
            if (empty($_POST["nome_serv"]) || empty($_POST["preco_serv"]) || empty($_POST["prazo_serv"])) {
                $erro = "Todos os campos são obrigatórios.";
            } else {
                $id_serv = isset($_POST["id_serv"]) ? $_POST["id_serv"] : -1;
                $nome_serv = $_POST["nome_serv"];
                $descricao_serv = $_POST["descricao_serv"];
                $preco_serv = $_POST["preco_serv"];
                $prazo_serv = $_POST["prazo_serv"];

                //Formatando prazo_serv para DATETIME
                $prazo_serv = date('Y-m-d H:i:s', strtotime("+$prazo_serv days"));

                if ($id_serv == -1) { // Inserir novo serviço
                    $stmt = $con->prepare("INSERT INTO Servico (nome_serv, desc_serv, preco_serv, prazo_serv, status_serv) VALUES (?, ?, ?, ?, 'ativo')");
                    $stmt->bind_param("ssds", $nome_serv, $descricao_serv, $preco_serv, $prazo_serv);

                    if ($stmt->execute()) {
                        $success = "Serviço cadastrado com sucesso.";
                    } else {
                        $erro = "Erro ao cadastrar serviço: " . $stmt->error;
                    }
                } else { //Atualizar serviço existente
                    $stmt = $con->prepare("UPDATE Servico SET nome_serv = ?, desc_serv = ?, preco_serv = ?, prazo_serv = ? WHERE id_serv = ?");
                    $stmt->bind_param("ssdsi", $nome_serv, $descricao_serv, $preco_serv, $prazo_serv, $id_serv);

                    if ($stmt->execute()) {
                        $success = "Serviço atualizado com sucesso.";
                    } else {
                        $erro = "Erro ao atualizar serviço: " . $stmt->error;
                    }
                }
            }
        } else {
            $erro = "Todos os campos são obrigatórios.";
        }
    }

    //Desabilitar Serviço
    if (isset($_GET["id_serv"]) && is_numeric($_GET["id_serv"]) && isset($_GET["del"])) {
        $id_serv = (int) $_GET["id_serv"];
        $stmt = $con->prepare("UPDATE Servico SET status_serv = 'desabilitado' WHERE id_serv = ?"); //Atualizando para 'desabilitado'
        $stmt->bind_param('i', $id_serv);
        if ($stmt->execute()) {
            $success = "Serviço desabilitado com sucesso.";
        } else {
            $erro = "Erro ao desabilitar serviço: " . $stmt->error;
        }
    }

    //Listar Serviços
    $result = $con->query("SELECT * FROM Servico WHERE status_serv = 'ativo'"); // Somente serviços ativos
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+Serviços | Salão Novo Estilo</title>
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
<?php
    include_once "nav.php";
?>
<body>

    <h1>Cadastro de Serviços</h1>

    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
        <p style="color: green;"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <!-- Formulário para adicionar ou editar serviço -->
    <form action="forms_serv.php" method="POST">
        <input type="hidden" name="id_serv" value="<?= isset($_POST['id_serv']) ? $_POST['id_serv'] : -1 ?>">

        <label for="nome_serv">Nome do Serviço:</label><br>
        <input type="text" name="nome_serv"
            value="<?= isset($_POST['nome_serv']) ? htmlspecialchars($_POST['nome_serv']) : '' ?>" required><br><br>

        <label for="descricao_serv">Descrição:</label><br>
        <input type="text" name="descricao_serv"
            value="<?= isset($_POST['descricao_serv']) ? htmlspecialchars($_POST['descricao_serv']) : '' ?>"><br><br>

        <label for="preco_serv">Preço:</label><br>
        <input type="number" step="0.01" name="preco_serv"
            value="<?= isset($_POST['preco_serv']) ? htmlspecialchars($_POST['preco_serv']) : '' ?>" required><br><br>

        <label for="prazo_serv">Prazo (dias):</label><br>
        <input type="number" name="prazo_serv"
            value="<?= isset($_POST['prazo_serv']) ? htmlspecialchars($_POST['prazo_serv']) : '' ?>" required><br><br>

        <button
            type="submit"><?= (isset($_POST['id_serv']) && $_POST['id_serv'] != -1) ? 'Salvar' : 'Cadastrar' ?></button>
    </form>

    <hr>

    <!-- Exibição dos serviços -->
    <h2>Lista de Serviços</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Prazo (dias)</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($servico = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($servico['id_serv']) ?></td>
                    <td><?= htmlspecialchars($servico['nome_serv']) ?></td>
                    <td><?= htmlspecialchars($servico['desc_serv']) ?></td>
                    <td><?= htmlspecialchars($servico['preco_serv']) ?></td>
                    <td><?= htmlspecialchars($servico['prazo_serv']) ?></td>
                    <td>
                        <a href="forms_serv.php?id_serv=<?= $servico['id_serv'] ?>&del=1"
                            onclick="return confirm('Tem certeza que deseja desabilitar este serviço?')">Desabilitar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>