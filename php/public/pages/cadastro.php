<?php
include '../includes/conexao.php';
 
// Verifica se o formulário foi enviado e se o email e a senha foram preenchidos
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha'])); 

    // Verifica se o email já existe
    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $usuario = $stmt->fetch();

    if ($usuario) {
        echo "Este email já está cadastrado.";
    } else {
        // Insere o usuário no banco
        $stmt = $pdo->prepare("INSERT INTO usuario (email, senha) VALUES (:email, :senha)");
        if ($stmt->execute(['email' => $email, 'senha' => $senha])) {
            
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../assets/styles/index.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Cadastrar</h1>
            <form method="post" action="">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="********" required>
                <div class="btn">
                    <input type="submit" value="Cadastrar">
                </div>
                <a href="index.php">Já tem uma conta? Faça login</a>
            </form>
        </div>
    </div>
</body>
</html>
