<?php
session_start();
if ($_SESSION["tipo"] !== "admin") {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "nome_do_banco");

$id = $_GET["id"];

$sql = "SELECT * FROM planos WHERE id = $id";
$result = $conn->query($sql);

$plano = $result->fetch_assoc();
if (!$plano) {
    echo "Plano não encontrado.";
    exit;
}
?>
<!DOCTYPE html>

