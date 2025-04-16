<?php
session_start();
if ($_SESSION["tipo"] !== "admin") {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "nome_do_banco");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];

    $sql = "INSERT INTO planos (nome, preco, descricao) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sds", $nome, $preco, $descricao);

    if ($stmt->execute()) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Erro ao criar plano.";
    }
}
?>

<h2>Criar Novo Plano</h2>
<form method="post">
    <input type="text" name="nome" placeholder="Nome do plano" required><br>
    <input type="number" step="0.01" name="preco" placeholder="Preço" required><br>
    <textarea name="descricao" placeholder="Descrição" required></textarea><br>
    <button type="submit">Criar</button>
</form>
<a href="admin.php">Voltar</a>
