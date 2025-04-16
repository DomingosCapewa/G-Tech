<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit;
}

echo "Bem-vindo ao painel!";

if (isset($_POST['sair'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/styles/index.css">
</head>
<body>
    <div>
        <h1>Painel</h1>
        <form method="post">
            <button type="submit" name="sair">Sair</button>
        </form>
    </div>
</body>
</html>
