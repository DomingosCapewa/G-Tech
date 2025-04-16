<?php
include '../includes/conexao.php';
session_start();

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha'])); 

    // Verificar se o email existe
    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
    $stmt->execute(['email' => $email, 'senha' => $senha]);
    $usuario = $stmt->fetch();

    if ($usuario) {
        $_SESSION['usuario_id'] = $usuario['id']; 
        header("Location: home.php"); // Redireciona para a página do painel ou área restrita
    } else {
        echo "Email ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/styles/style.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <form method="post" action="">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="********" required>
                <div class="btn">
                    <input type="submit" value="Entrar">
                </div>
                <a href="cadastro.php">Cadastrar</a>
            </form>
        </div>
    </div>
</body>
</html>
