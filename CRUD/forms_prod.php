<?php
    include_once "../includes/dbconnect.php";

    $erro = '';
    $success = '';

    // Inserir/Atualizar Produto
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nome_prod"], $_POST["preco_venda_prod"], $_POST["estoque_minimo_prod"], $_POST["status_prod"])) {
            if (empty($_POST["nome_prod"]) || empty($_POST["preco_venda_prod"]) || empty($_POST["estoque_minimo_prod"]) || empty($_POST["status_prod"])) {
                $erro = "Todos os campos são obrigatórios.";
            } else {
                $id_prod = isset($_POST["id_prod"]) ? $_POST["id_prod"] : -1;
                $nome_prod = $_POST["nome_prod"];
                $marca = $_POST["marca"];
                $desc_prod = $_POST["desc_prod"];
                $preco_venda_prod = $_POST["preco_venda_prod"];
                $estoque_minimo_prod = $_POST["estoque_minimo_prod"];
                $status_prod = $_POST["status_prod"];

                if ($id_prod == -1) { // Inserir novo produto
                    $stmt = $con->prepare("INSERT INTO Produto (nome_prod, marca, desc_prod, preco_venda, estoque_minimo, status_prod) VALUES (?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssdis", $nome_prod, $marca, $desc_prod, $preco_venda_prod, $estoque_minimo_prod, $status_prod);

                    if ($stmt->execute()) {
                        $success = "Produto cadastrado com sucesso.";
                    } else {
                        $erro = "Erro ao cadastrar produto: " . $stmt->error;
                    }
                } else { // Atualizar produto existente
                    $stmt = $con->prepare("UPDATE Produto SET nome_prod = ?, marca = ?, desc_prod = ?, preco_venda = ?, estoque_minimo = ?, status_prod = ? WHERE id_prod = ?");
                    $stmt->bind_param("sssdisi", $nome_prod, $marca, $desc_prod, $preco_venda_prod, $estoque_minimo_prod, $status_prod, $id_prod);

                    if ($stmt->execute()) {
                        $success = "Produto atualizado com sucesso.";
                    } else {
                        $erro = "Erro ao atualizar produto: " . $stmt->error;
                    }
                }
            }
        } else {
            $erro = "Todos os campos são obrigatórios.";
        }
    }

    // Desabilitar Produto
    if (isset($_GET["id_prod"]) && is_numeric($_GET["id_prod"]) && isset($_GET["del"])) {
        $id_prod = (int) $_GET["id_prod"];
        $stmt = $mysqli->prepare("UPDATE Produto SET status_prod = 'Desabilitado' WHERE id_prod = ?"); // Supondo que 'Desabilitado' é um dos status
        $stmt->bind_param('i', $id_prod);
        if ($stmt->execute()) {
            $success = "Produto desabilitado com sucesso.";
        } else {
            $erro = "Erro ao desabilitar produto: " . $stmt->error;
        }
    }

    // Listar Produtos
    $result = $con->query("SELECT * FROM Produto WHERE status_prod != 'Desabilitado'"); // Apenas produtos ativos
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+Produto | Salão Novo Estilo</title>
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
<?php
    include_once "nav.php";
?>
<body>
    <h1>Cadastro de Produtos</h1>

    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
        <p style="color: green;"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <!-- Formulário para adicionar ou editar produto -->
    <form action="forms_prod.php" method="POST">
        <input type="hidden" name="id_prod" value="<?= isset($_POST['id_prod']) ? $_POST['id_prod'] : -1 ?>">

        <label for="nome_prod">Nome do Produto:</label><br>
        <input type="text" name="nome_prod"
            value="<?= isset($_POST['nome_prod']) ? htmlspecialchars($_POST['nome_prod']) : '' ?>" required><br><br>

        <label for="marca">Marca:</label><br>
        <input type="text" name="marca"
            value="<?= isset($_POST['marca']) ? htmlspecialchars($_POST['marca']) : '' ?>"><br><br>

        <label for="desc_prod">Descrição:</label><br>
        <input type="text" name="desc_prod"
            value="<?= isset($_POST['desc_prod']) ? htmlspecialchars($_POST['desc_prod']) : '' ?>"><br><br>

        <label for="preco_venda_prod">Preço de Venda:</label><br>
        <input type="number" step="0.01" name="preco_venda_prod"
            value="<?= isset($_POST['preco_venda_prod']) ? htmlspecialchars($_POST['preco_venda_prod']) : '' ?>"
            required><br><br>

        <label for="estoque_minimo_prod">Estoque Mínimo:</label><br>
        <input type="number" name="estoque_minimo_prod"
            value="<?= isset($_POST['estoque_minimo_prod']) ? htmlspecialchars($_POST['estoque_minimo_prod']) : '' ?>"
            required><br><br>

        <label for="status_prod">Status:</label><br>
        <input type="text" name="status_prod"
            value="<?= isset($_POST['status_prod']) ? htmlspecialchars($_POST['status_prod']) : '' ?>" required><br><br>

        <button
            type="submit"><?= (isset($_POST['id_prod']) && $_POST['id_prod'] != -1) ? 'Salvar' : 'Cadastrar' ?></button>
    </form>

    <hr>

    <!-- Exibição dos produtos -->
    <h2>Lista de Produtos</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Descrição</th>
                <th>Preço de Venda</th>
                <th>Estoque Mínimo</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($produto = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($produto['id_prod']) ?></td>
                    <td><?= htmlspecialchars($produto['nome_prod']) ?></td>
                    <td><?= htmlspecialchars($produto['marca']) ?></td>
                    <td><?= htmlspecialchars($produto['desc_prod']) ?></td>
                    <td><?= htmlspecialchars($produto['preco_venda']) ?></td>
                    <td><?= htmlspecialchars($produto['estoque_minimo']) ?></td>
                    <td><?= htmlspecialchars($produto['status_prod']) ?></td>
                    <td>
                        <a href="forms_prod.php?id_prod=<?= $produto['id_prod'] ?>&del=1"
                            onclick="return confirm('Tem certeza que deseja desabilitar este produto?')">Desabilitar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>