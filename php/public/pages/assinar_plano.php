<?php
session_start();

// Verifica se o usuário está logado e é do tipo "usuario"
if (!isset($_SESSION["usuario_id"]) || $_SESSION["tipo"] !== "usuario") {
    header("Location: login.php");
    exit;
}

// Conecta ao banco
$conn = new mysqli("localhost", "root", "", "nome_do_banco");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$usuario_id = $_SESSION["usuario_id"];
$plano_id = intval($_GET["id"]); // ID do plano selecionado

// Cancela plano atual (se houver)
$conn->query("UPDATE assinaturas SET status='cancelada' WHERE usuario_id=$usuario_id AND status='ativa'");

// Cria nova assinatura
$sql = "INSERT INTO assinaturas (usuario_id, plano_id, status, data_assinatura) VALUES (?, ?, 'ativa', NOW())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $usuario_id, $plano_id);
$stmt->execute();

// Busca dados do plano para exibir confirmação
$sql_plano = "SELECT nome, preco FROM planos WHERE id = ?";
$stmt_plano = $conn->prepare($sql_plano);
$stmt_plano->bind_param("i", $plano_id);
$stmt_plano->execute();
$resultado = $stmt_plano->get_result();
$plano = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Assinatura Confirmada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .confirmacao {
            background: #f0f8ff;
            border: 1px solid #90caf9;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: white;
            background: #1976d2;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="confirmacao">
        <h2>Assinatura realizada com sucesso!</h2>
        <p>Você assinou o plano <strong><?= $plano['nome'] ?></strong>.</p>
        <p>Valor: R$ <?= number_format($plano['preco'], 2, ',', '.') ?> / mês</p>
        <p>Data da assinatura: <?= date("d/m/Y H:i") ?></p>
        <a href="usuario.php">Ir para o Painel</a>
    </div>
</body>
</html>
