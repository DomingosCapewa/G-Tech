<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

$stmt = $pdo->query("SELECT * FROM planos ORDER BY preco");
$planos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>

  <div class="main" id="main">
    <div class="left">
      <h5>Olá, nós somos a <span> G-TECH </span></h5>
      <h3>Sobre a G-TECH</h3>
      <p>
        Na G-TECH, somos especialistas em criar soluções inteligentes e eficientes para sistemas e desenvolvimento web.
        Focamos em oferecer suporte completo em ambientes AWS, garantindo que sua empresa tenha acesso às melhores práticas
        de infraestrutura em nuvem, segurança e escalabilidade. Nosso compromisso é entregar resultados que impulsionam o seu crescimento digital.
      </p>
    </div>
    <div class="right">
      <img src="/G-tech/assets/img/home-img.png" />
    </div>
  </div>

  <section class="planos py-5">
    <div class="container">
      <h2 class="text-center mb-5">Escolha seu Plano</h2>
      <div class="row g-4 justify-content-center">
        <?php foreach ($planos as $plano): ?>
          <div class="col-md-4">
            <div class="card h-100 <?= $plano['destaque'] ? 'border-primary border-2' : '' ?>">
              <?php if ($plano['destaque']): ?>
                <div class="position-absolute top-0 start-50 translate-middle badge bg-primary rounded-pill">
                  Mais Popular
                </div>
              <?php endif; ?>
              <div class="card-body text-center">
                <h3 class="card-title text-primary"><?= htmlspecialchars($plano['nome']) ?></h3>
                <div class="my-4">
                  <span class="text-decoration-line-through text-muted">R$ <?= number_format($plano['preco_original'], 2, ',', '.') ?></span>
                  <h4 class="fw-bold my-2">R$ <?= number_format($plano['preco'], 2, ',', '.') ?>/mês</h4>
                  <p>R$ <?= number_format($plano['preco'] * 12, 2, ',', '.') ?> por 1 ano</p>
                </div>
                <div class="bg-light p-3 rounded mb-4">
                  <p class="text-success fw-bold mb-2">
                    <i class="bi bi-arrow-down-circle"></i> Economize até R$ <?= number_format($plano['economia'], 2, ',', '.') ?>
                  </p>
                  <p class="mb-0">
                    <i class="bi bi-check-circle text-primary"></i> 1 ano de domínio online grátis
                  </p>
                </div>
                <button class="btn btn-warning w-100 fw-bold py-2"
                  data-bs-toggle="modal"
                  data-bs-target="#planoModal<?= $plano['id'] ?>">
                  Selecionar Plano
                </button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Modais de planos -->
  <?php foreach ($planos as $plano): ?>
    <div class="modal fade" id="planoModal<?= $plano['id'] ?>" tabindex="-1" aria-labelledby="planoModalLabel<?= $plano['id'] ?>" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="planoModalLabel<?= $plano['id'] ?>">Assinar <?= htmlspecialchars($plano['nome']) ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <?php if (!isLoggedIn()): ?>
              <div class="alert alert-warning">
                <i class="bi bi-exclamation-triangle-fill me-2"></i> Você precisa estar logado para assinar um plano.
              </div>
              <div class="d-grid gap-2">
                <a href="/G-tech/login.php" class="btn btn-primary">Fazer Login</a>
                <a href="/G-tech/register.php" class="btn btn-outline-primary">Criar Conta</a>
              </div>
              <?php else:
              $stmt = $pdo->prepare("SELECT * FROM assinaturas WHERE usuario_id = ? AND plano_id = ? AND status = 'ativo'");
              $stmt->execute([$_SESSION['user_id'], $plano['id']]);
              $assinatura = $stmt->fetch();

              if ($assinatura): ?>
                <div class="alert alert-info">
                  <i class="bi bi-info-circle-fill me-2"></i> Você já possui este plano ativo.
                </div>
                <a href="/G-tech/user/dashboard.php" class="btn btn-primary w-100">Ir para meu painel</a>
              <?php else: ?>
                <p>Você está prestes a assinar o plano <strong><?= htmlspecialchars($plano['nome']) ?></strong> por <strong>R$ <?= number_format($plano['preco'], 2, ',', '.') ?> mensais</strong>.</p>
                <p>Confirme abaixo para prosseguir com o pagamento.</p>
                <form action="/G-tech/pagamento.php" method="post">
                  <input type="hidden" name="plano_id" value="<?= $plano['id'] ?>">
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Confirmar Assinatura</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                  </div>

                </form>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- Avaliações dos clientes -->
  <div class="feedback" id="feedback">
    <h5>Analises dos clientes</h5>
    <h3>Respostas Clientes</h3>
    <div class="customers">
      <!-- Comentário Rayan -->
      <div class="item" style="background-color: lightcyan;">
        <div class="rating">
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
        </div>
        <p class="redtext" style="color: rgb(0, 139, 44);">
          "A G-TECH revolucionou a maneira de como realizamos nossos serviços, de forma que podemos otimizar tempo e agilidade"
        </p>
        <div class="user">
          <img src="/G-tech/assets/img/Rayan.jpg" />
          <div class="info">
            <h5 class="nome" style="color: rgb(0, 139, 44);">Rayan</h5>
            <p class="local" style="color: rgb(0, 139, 44);">São Paulo</p>
          </div>
        </div>
      </div>
      <!-- Comentário Gabriel -->
      <div class="item">
        <div class="rating">
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
        </div>
        <p class="texto" style="color: black;">
          “A G-TECH modernizou de forma significativa nossos recursos de Cloud. Antes de sua intervenção, enfrentávamos diversos problemas relacionados ao armazenamento. Hoje, todas as nossas aplicações funcionam perfeitamente."
        </p>
        <div class="user">
          <img src="/G-tech/assets/img/Gabriel.jpg" />
          <div class="info">
            <h5 class="nome2" style="color: black;">Gabriel</h5>
            <p class="local2" style="color: black;">São Paulo</p>
          </div>
        </div>
      </div>
      <!-- Comentário Victor -->
      <div class="item">
        <div class="rating">
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
          <i class="bx bxs-star" style="color: gold;"></i>
        </div>
        <p class="texto2" style="color: brown;">
          "O serviço prestado pela G-Tech é algo revolucionário, pois hoje em dia, todas as informações podem ser feitas em modo de CLOUD. O atendimento ao cliente, tanto o setor relacionado ao cliente como o suporte técnico, são maravilhosos."
        </p>
        <div class="user">
          <img src="/G-tech/assets/img/Victor.jpg" />
          <div class="info">
            <h5 class="nome3" style="color: brown;">Victor</h5>
            <p class="local3" style="color: brown;">São Paulo</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <?php require_once 'includes/footer.php'; ?>
</body>