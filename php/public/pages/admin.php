<?php
session_start();
if ($_SESSION["tipo"] !== "admin") {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "nome_do_banco");

// Consulta para ver todos os planos e total de assinantes ativos
$sql = "SELECT p.*, COUNT(a.id) AS total_assinantes
        FROM planos p
        LEFT JOIN assinaturas a ON a.plano_id = p.id AND a.status = 'ativa'
        GROUP BY p.id";
$result = $conn->query($sql);
?>

<h2>Painel do Administrador</h2>
<a href="criar_plano.php">Criar novo plano</a>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Assinantes</th>
        <th>Ações</th>
    </tr>
    <?php while ($plano = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $plano['nome'] ?></td>
            <td>R$ <?= number_format($plano['preco'], 2, ',', '.') ?></td>
            <td><?= $plano['descricao'] ?></td>
            <td><?= $plano['total_assinantes'] ?></td>
            <td>
                <a href="editar_plano.php?id=<?= $plano['id'] ?>">Editar</a> |
                <a href="deletar_plano.php?id=<?= $plano['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
