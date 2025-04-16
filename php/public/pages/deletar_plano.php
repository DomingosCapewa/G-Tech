<?php
session_start();
if ($_SESSION["tipo"] !== "admin") {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "nome_do_banco");

$id = $_GET["id"];

$sql = "DELETE FROM planos WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: admin.php");
    exit;
} else {
    echo "Erro ao deletar plano.";
}
?>
