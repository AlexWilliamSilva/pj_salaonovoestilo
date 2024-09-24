<?php
    require_once "dbconnect.php";
    $erro = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nome_prod"], $_POST["quant_prod"], $_POST["preco_prod"], $_POST["marca"], $_POST["validade_prod"], $_POST["status_prod"])) {

            // Validando campos obrigatórios
            if (empty($_POST["nome_prod"]) || empty($_POST["quant_prod"]) || empty($_POST["preco_prod"]) || empty($_POST["marca"]) || empty($_POST["validade_prod"]) || empty($_POST["status_prod"])) {
                $erro = "Todos os campos são obrigatórios.";
            } else {
                $id_prod = isset($_POST["id_prod"]) ? $_POST["id_prod"] : -1;
                $nome_prod = $_POST["nome_prod"];
                $descricao_prod = $_POST["descricao_prod"];
                $quant_prod = $_POST["quant_prod"];
                $preco_prod = $_POST["preco_prod"];
                $marca = $_POST["marca"];
                $validade_prod = $_POST["validade_prod"];
                $status_prod = $_POST["status_prod"];

                // Inserindo ou atualizando no banco de dados
                if ($id_prod == -1) {
                    $stmt = $con->prepare("INSERT INTO `Produtos` (`nome_prod`, `descricao_prod`, `quant_prod`, `marca`, `validade_prod`, `preco_prod`, `status_prod`) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssissds", $nome_prod, $descricao_prod, $quant_prod, $marca, $validade_prod, $preco_prod, $status_prod);

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

    // Preenchendo os valores para edição
    $id_prod = isset($_POST["id_prod"]) ? $_POST["id_prod"] : -1;
    $nome_prod = isset($_POST["nome_prod"]) ? $_POST["nome_prod"] : "";
    $descricao_prod = isset($_POST["descricao_prod"]) ? $_POST["descricao_prod"] : "";
    $quant_prod = isset($_POST["quant_prod"]) ? $_POST["quant_prod"] : "";
    $marca = isset($_POST["marca"]) ? $_POST["marca"] : "";
    $validade_prod = isset($_POST["validade_prod"]) ? $_POST["validade_prod"] : "";
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
    <link rel="stylesheet" href="">
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<?php
require_once "nav.php";

?>
<body>
    <?php if (!empty($erro)): ?>
        <p><?= htmlspecialchars($erro) ?></p>
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

                <label for="quant_prod">Quantidade:</label><br>
                <input type="number" name="quant_prod" value="<?= htmlspecialchars($quant_prod) ?>" required><br><br>

                <label for="marca">Marca:</label><br>
                <input type="text" name="marca" value="<?= htmlspecialchars($marca) ?>" required><br><br>

                <label for="validade_prod">Validade:</label><br>
                <input type="date" name="validade_prod" value="<?= htmlspecialchars($validade_prod) ?>" required><br><br>

                <label for="preco_prod">Preço:</label><br>
                <input type="number" name="preco_prod" value="<?= htmlspecialchars($preco_prod) ?>" required><br><br>

                <label for="status_prod">Status:</label><br>
                <input type="radio" name="status_prod" id="status_ativo" value="Ativo" required <?= (isset($status_prod) && $status_prod == 'Ativo') ? 'checked' : '' ?>>
                <label for="status_ativo">Ativo</label>
                <input type="radio" name="status_prod" id="status_inativo" value="Inativo" required <?= (isset($status_prod) && $status_prod == 'Inativo') ? 'checked' : '' ?>>
                <label for="status_inativo">Inativo</label>
                <br><br>

                <input type="hidden" name="id_prod" value="<?= htmlspecialchars($id_prod) ?>">
                <button type="submit" style="cursor: pointer;"><?= ($id_prod == -1) ? "Cadastrar" : "Salvar" ?></button>
                <br><br>

            </fieldset>
        </div>
    </form>

</body>

</html>
