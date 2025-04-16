<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

$stmt = $pdo->query("SELECT * FROM planos ORDER BY preco");
$planos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="main" id="main">
      <div class="left">
        <h5>Olá, nós somos a <span> G-TECH </span></h5>
        <h3>Sobre a G-TECH</h3>
        <p>
          Na G-TECH, somos especialistas em criar soluções inteligentes e
          eficientes para sistemas e desenvolvimento web. Focamos em oferecer
          suporte completo em ambientes AWS, garantindo que sua empresa tenha
          acesso às melhores práticas de infraestrutura em nuvem, segurança e
          escalabilidade. Nosso compromisso é entregar resultados que
          impulsionam o seu crescimento digital.
        </p>
      </div>
      <div class="right">
        <img src="/facul/assets/img/home-img.png" />
      </div>
    </div>


    
<section class="planos">
    <div class="container">
        <h2>Escolha seu Plano</h2>
        <div class="card-container">
            <?php foreach ($planos as $plano): ?>
            <div class="card <?= $plano['destaque'] ? 'destaque' : '' ?>">
                <h3><?= htmlspecialchars($plano['nome']) ?></h3>
                <p class="preco">
                    <?php if ($plano['preco_original']): ?>
                        <span class="de">R$ <?= number_format($plano['preco_original'], 2, ',', '.') ?></span>
                    <?php endif; ?>
                    R$ <?= number_format($plano['preco'], 2, ',', '.') ?>/mês
                </p>
                <p>R$ <?= number_format($plano['preco'] * 12, 2, ',', '.') ?> por 1 ano</p>
                <?php if ($plano['economia']): ?>
                    <p class="economia">Economize até R$ <?= number_format($plano['economia'], 2, ',', '.') ?></p>
                <?php endif; ?>
                <?php if ($plano['dominio_gratis']): ?>
                    <p>1 ano de domínio online grátis</p>
                <?php endif; ?>
                
                <button data-bs-toggle="modal" data-bs-target="#planoModal<?= $plano['id'] ?>">
                    Selecionar Plano
                </button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<style>
  .planos {
  padding: 60px 0;
  background: #f9f9f9;
  text-align: center;
}

.planos h2 {
  margin-bottom: 40px;
  font-size: 2.5rem;
  color: #2c3e50;
  
}

.card-container {
  display: flex;
  gap: 30px;
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: 30px;
}

.card {
  background: white;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  width: 280px;
  transition: all 0.3s ease;
  border: 1px solid #e0e0e0;
  z-index: 1;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 115, 255, 0.2);
  border: 1px solid #0073ff;
}

.card.destaque {
  position: relative;
  border: 2px solid #0073ff;
}

.card.destaque::before {
  content: "Mais Popular";
  position: absolute;
  top: -10px;
  right: 20px;
  background: #0073ff;
  color: white;
  padding: 5px 10px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
}

.card h3 {
  font-size: 1.8rem;
  color: #0073ff;
  margin-bottom: 15px;
}

.preco {
  font-size: 1.8rem;
  font-weight: bold;
  margin: 15px 0;
  color: #2c3e50;
}

.preco .de {
  text-decoration: line-through;
  color: #999;
  font-size: 1.2rem;
  margin-right: 10px;
}

.economia {
  color: #28a745;
  font-weight: bold;
  margin: 15px 0;
}

.card button {
  background: #ffcc00;
  border: none;
  padding: 12px 25px;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
  width: 100%;
  transition: all 0.3s;
  margin-top: 15px;
}

.card button:hover {
  background: #e6b800;
  transform: scale(1.05);
}

/* Responsividade */
@media (max-width: 768px) {
  .card-container {
    flex-direction: column;
    align-items: center;
  }

  .card {
    width: 100%;
    max-width: 350px;
  }
}

</style>

<!-- Modais para cada plano (manter o mesmo código dos modais que já existem) -->
<?php foreach ($planos as $plano): ?>
<div class="modal fade" id="planoModal<?= $plano['id'] ?>" tabindex="-1" aria-hidden="true">
    <!-- Conteúdo do modal existente -->
</div>
<?php endforeach; ?>


  
    <!-- Gabriel - Rayan - Victor -->

    <div class="feedback" id="feedback">
      <h5>Analises dos clientes</h5>
      <h3>Respostas Clientes</h3>
      <div class="customers">
        <div class="item">
          <style>
            .item {
              background-color: lightcyan;
            }
          </style>
          <div class="rating">
            <style>
              .rating i {
                color: gold;
              }
            </style>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <style>
            .redtext {
              color: rgb(0, 139, 44);
            }
          </style>
          <p class="redtext">
            ""A G-TECH revolucionou a maneira de como realizamos nossos
            serviços, de forma que podemos otimizar tempo e agilidade"
          </p>
          <div class="user">
            <img src="/facul/assets/img/Rayan.jpg" />
            <div class="info">
              <h5 class="nome">Rayan</h5>
              <p class="local">Sao Paulo</p>
              <style>
                .nome {
                  color: rgb(0, 139, 44);
                }
                .local {
                  color: rgb(0, 139, 44);
                }
              </style>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <p class="texto">
            <style>
              .texto {
                color: black;
              }
            </style>
            “A G-TECH modernizou de forma significativa nossos recursos de
            Cloud. Antes de sua intervenção, enfrentávamos diversos problemas
            relacionados ao armazenamento. Hoje, todas as nossas aplicações
            funcionam perfeitamente."
          </p>
          <div class="user">
            <img src="/facul/assets/img/Gabriel.jpg" />
            <div class="info">
              <h5 class="nome2">Gabriel</h5>
              <style>
                .nome2 {
                  color: black;
                }
                .local2 {
                  color: black;
                }
              </style>
              <p class="local2">São Paulo</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <p class="texto2">
            <style>
              .texto2 {
                color: brown;
              }
              .local3 {
                color: brown;
              }
              .nome3 {
                color: brown;
              }
            </style>
            " O serviço prestado pela G-Tech, é algo revolucionário, pois, hoje
            em dia, todas as informações podem ser feitas em modo de CLOUD. O
            atendimento ao cliente,tanto o setor relacionado ao cliente como o
            suporte técnico, são maravilhosos.
          </p>
          <div class="user">
            <img src="/facul/assets/img/Victor.jpg" />
            <div class="info">
              <h5 class="nome3">Victor</h5>
              <p class="local3">Sao Paulo</p>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php require_once 'includes/footer.php'; ?>