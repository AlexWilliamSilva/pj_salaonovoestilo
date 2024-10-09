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
                $user = $result->fetch_assoc();
                
                // Verificar se a senha inserida corresponde ao hash armazenado
                if (password_verify($password, $user['senha'])) {
                    // Iniciar sessão e armazenar informações do usuário
                    $_SESSION['logado'] = true;
                    $_SESSION['nome'] = $user['nome_usu'];
                    $_SESSION['id'] = $user['id_usu'];

                    // Redirecionar para a página principal
                    header("Location: ../index.php");
                    exit;
                } else {
                    $error = "E-mail ou senha incorretos.";
                }
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
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Inclua seu CSS aqui -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Ícones Font Awesome -->
</head>
<body>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" id="form_login">
            <div class="title_user">
                <img src="../multimidia/images/usuario.png" alt="Logo de usuário">
                <h2>LOGIN</h2>
            </div>

            <?php if (isset($error)): ?>
                <p style="color: red;"><?= $error; ?></p>
            <?php endif; ?>

            <div class="inputs">
                <label for="email">E-mail</label><br>
                <i class="fa-solid fa-envelope"></i>
                <input type="email" id="email" name="email" required><br><br>

                <label for="password">Senha</label><br>
                <i class="fa-solid fa-key"></i>
                <input type="password" id="password" name="password" required><br>

                <a href="password/recuperar_senha.php" id="a_login" style="font-size: 13px;">Esqueceu sua senha?</a>
                <br><br>
                <input type="submit" value="Entrar" id="input_submit">
            </div><br>

            <div class="img_icons">
                Login Com:
                <a href="#"><img src="../multimidia/images/google.png" alt="Ícone do google"></a>
                <a href="#"><img src="../multimidia/images/facebook.png" alt="Ícone do facebook"></a>
            </div><br>
        </form>
    </main>
</body>
</html>
