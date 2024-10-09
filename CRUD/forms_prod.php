<?php
    include_once "../includes/dbconnect.php";
    require_once "nav.php";
    $erro = "";

    // Processar POST para adicionar/editar produtos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nome_prod"], $_POST["estoque_minimo"], $_POST["preco_prod"], $_POST["marca"], $_POST["status_prod"])) {
            // Validando campos obrigatórios
            if (empty($_POST["nome_prod"]) || empty($_POST["estoque_minimo"]) || empty($_POST["preco_prod"]) || empty($_POST["marca"]) || empty($_POST["status_prod"])) {
                $erro = "Todos os campos são obrigatórios.";
            } else {
                $id_prod = isset($_POST["id_prod"]) ? (int) $_POST["id_prod"] : -1;
                $nome_prod = $_POST["nome_prod"];
                $descricao_prod = $_POST["descricao_prod"];
                $estoque_minimo = $_POST["estoque_minimo"];
                $preco_prod = $_POST["preco_prod"];
                $marca = $_POST["marca"];
                $status_prod = $_POST["status_prod"];

                // Inserindo novo produto no banco de dados
                if ($id_prod == -1) {
                    $stmt = $con->prepare("INSERT INTO `Produto` (`nome_prod`, `desc_prod`, `marca`, `preco_venda`, `estoque_minimo`, `status_prod`) VALUES (?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssdis", $nome_prod, $descricao_prod, $marca, $preco_prod, $estoque_minimo, $status_prod);

                    if ($stmt->execute()) {
                        header("Location: produto.php");
                        exit;
                    } else {
                        $erro = "Erro ao cadastrar produto: " . $stmt->error;
                    }
                } else {
                    $erro = "Operação não suportada.";
                }
            }
        } else {
            $erro = "Todos os campos são obrigatórios.";
        }
    }

    // Alternar o status do produto
    if (isset($_GET['id_prod'], $_GET['toggle_status'])) {
        $id_prod = (int) $_GET['id_prod'];

        // Verificar o status atual do produto
        $stmt = $con->prepare("SELECT status_prod FROM Produto WHERE id_prod = ?");
        $stmt->bind_param("i", $id_prod);
        $stmt->execute();
        $stmt->bind_result($status_prod);
        $stmt->fetch();
        $stmt->close();

        // Alternar o status
        $novo_status = ($status_prod == 'Ativo') ? 'Inativo' : 'Ativo';

        // Atualizar o status no banco de dados
        $stmt = $con->prepare("UPDATE Produto SET status_prod = ? WHERE id_prod = ?");
        $stmt->bind_param("si", $novo_status, $id_prod);

        if ($stmt->execute()) {
            header("Location: forms_prod.php"); // Certifique-se de que "produto.php" é o caminho correto
            exit;
        } else {
            $erro = "Erro ao atualizar o status: " . $stmt->error;
        }
    }

    // Preenchendo os valores para edição
    $id_prod = isset($_POST["id_prod"]) ? (int) $_POST["id_prod"] : -1;
    $nome_prod = isset($_POST["nome_prod"]) ? $_POST["nome_prod"] : "";
    $descricao_prod = isset($_POST["descricao_prod"]) ? $_POST["descricao_prod"] : "";
    $estoque_minimo = isset($_POST["estoque_minimo"]) ? $_POST["estoque_minimo"] : "";
    $marca = isset($_POST["marca"]) ? $_POST["marca"] : "";
    $preco_prod = isset($_POST["preco_prod"]) ? $_POST["preco_prod"] : "";
    $status_prod = isset($_POST["status_prod"]) ? $_POST["status_prod"] : "";
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
<body>
    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>

    <form action="forms_prod.php" method="POST">
        <div class="container">
            <fieldset id="fieldsetcad">

                <legend>
                    <h1>Novo Produto</h1>
                </legend>
                <label for="nome_prod">Nome do produto:</label><br>
                <input type="text" name="nome_prod" value="<?= htmlspecialchars($nome_prod) ?>" required><br><br>

                <label for="descricao_prod">Descrição:</label><br>
                <input type="text" name="descricao_prod" value="<?= htmlspecialchars($descricao_prod) ?>" required><br><br>

                <label for="estoque_minimo">Quantidade em Estoque:</label><br>
                <input type="number" name="estoque_minimo" value="<?= htmlspecialchars($estoque_minimo) ?>" required><br><br>

                <label for="marca">Marca:</label><br>
                <input type="text" name="marca" value="<?= htmlspecialchars($marca) ?>" required><br><br>

                <label for="preco_prod">Preço de Venda:</label><br>
                <input type="number" name="preco_prod" value="<?= htmlspecialchars($preco_prod) ?>" required><br><br>

                <label for="status_prod">Status:</label><br>
                <input type="radio" name="status_prod" id="status_ativo" value="Ativo" required <?= ($status_prod == 'Ativo') ? 'checked' : '' ?>>
                <label for="status_ativo">Ativo</label>
                <input type="radio" name="status_prod" id="status_inativo" value="Inativo" required <?= ($status_prod == 'Inativo') ? 'checked' : '' ?>>
                <label for="status_inativo">Inativo</label>
                <br><br>

                <input type="hidden" name="id_prod" value="<?= htmlspecialchars($id_prod) ?>">
                <button type="submit" style="cursor: pointer;"><?= ($id_prod == -1) ? "Cadastrar" : "Salvar" ?></button>
                <br><br>

            </fieldset>
        </div>
    </form>

    <hr>

    <!-- Mostrando os produtos -->
    <h2>Lista de Produtos</h2>
    <table border="1">
        <thead>  
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Descrição</th>
                <th>Preço de Venda</th>
                <th>Quantidade em Estoque</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // Pegando os dados do banco de dados
                $result = $con->query("SELECT id_prod, nome_prod, marca, desc_prod, preco_venda, estoque_minimo, status_prod FROM Produto");

                while ($produto = $result->fetch_assoc()): 
            ?>
                <tr>
                    <td><?= htmlspecialchars($produto['id_prod']) ?></td>
                    <td><?= htmlspecialchars($produto['nome_prod']) ?></td>
                    <td><?= htmlspecialchars($produto['marca']) ?></td>
                    <td><?= htmlspecialchars($produto['desc_prod']) ?></td>
                    <td><?= htmlspecialchars($produto['preco_venda']) ?></td>
                    <td><?= htmlspecialchars($produto['estoque_minimo']) ?></td>
                    <td><?= htmlspecialchars($produto['status_prod']) ?></td>
                    <td>
                        <a href="forms_prod.php?id_prod=<?= $produto['id_prod'] ?>&toggle_status=1">
                            <?= ($produto['status_prod'] == 'Ativo') ? 'Desabilitar' : 'Habilitar' ?>
                        </a>
                    </td>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>