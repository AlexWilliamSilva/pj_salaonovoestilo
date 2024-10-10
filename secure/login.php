<?php
session_start();

// Inclui o arquivo de conexão com o banco de dados
include_once '../includes/dbconnect.php'; 

// Verificar se a conexão com o banco foi bem-sucedida
if (!$con) {
    die("A conexão com o banco de dados falhou: " . mysqli_connect_error());
}

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter e limpar os valores dos campos
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : '';
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : '';

    // Verificar se os campos estão preenchidos
    if (empty($email)) {
        $error = "E-mail é obrigatório.";
    } elseif (empty($password)) {
        $error = "Senha é obrigatória.";
    } else {
        // Preparar a consulta para obter o hash da senha
        $stmt = $con->prepare("SELECT id_usu, nome_usu, senha FROM `Usuario` WHERE email_usu = ?");
        if ($stmt) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Busca os dados do usuário
                $user = $result->fetch_assoc(); // Armazena os dados do usuário
                $_SESSION['logado'] = true; // Marcar como logado
                $_SESSION['nome'] = $user['nome_usu']; // nome do usuário na sessão
                $id = $user['id_usu']; // ID do usuário na sessão
                $_SESSION['id'] = $id;

                // Redireciona após o login
                echo '<script>window.location.href = "../CRUD/index.php";</script>';
                exit;
            } else {
                $error = "E-mail ou senha incorretos.";
            }
            $stmt->close();  // Fechar a declaração preparada
        } else {
            $error = "Erro ao preparar a consulta: " . $con->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Salão Novo Estilo</title>
    <link rel="stylesheet" href="styles/stylelogin.css"> <!-- Link para o arquivo de CSS -->
    <style>
      
    </style>
</head>
<body>
    <div class="login-container">
        <div class="left-panel">
            <img src="..//multimidia/logologin.png" alt="">
            <h1>Salão Novo Estilo</h1>          
        </div>
        <div class="divider"></div> <!-- Barra vertical -->
        <div class="right-panel">
            <h2>Login</h2>
            
            <?php if (isset($error)): ?>
                <p style="color: red;"><?= $error; ?></p>
            <?php endif; ?>
            
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST" id="form_login">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <a href="password/recuperar_senha.php" style="font-size: 13px;">Esqueceu sua senha?</a>

                <button type="submit">Entrar</button>
            </form>

            <div class="img_icons">
                Login com:
                <a href="#"><img src="../multimidia/images/google.png" alt="Google"></a>
                <a href="#"><img src="../multimidia/images/facebook.png" alt="Facebook"></a>
            </div>
        </div>
    </div>
</body>
</html>
