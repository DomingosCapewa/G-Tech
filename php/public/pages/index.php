<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      type="image/jpg"
      href="../../assets/img/logo G-TECH.jpg"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../assets/styles/style.css" />
    <title>G-TECH</title>
  </head>

  <body>
    <!-- VICTOR  -->
    <nav>
      <div class="logo">
        <img src="../../assets/img/logo G-TECH.jpg" />
        <a href="index.php">G-TECH </a>
      </div>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="servicos.html">Serviços</a></li>
        <li><a href="sobreNos.html">Sobre nós</a></li>
        <li><a href="projetos.html">Projetos</a></li>
        <li><a href="#feedback">Comentarios</a></li>
        <!-- <li><a href="cadastro.php">Cadastro</a></li> -->
        <!-- <li><a href="login.php">Login</a></li> -->
      </ul>

      <!-- Gabriel -->
      <button><a href="../../public/pages/contato.html">Login</a></button>
      <button id="menuButton" onclick="openMenu()">
        <i class="bx bx-menu"></i>
      </button>
    </nav>

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
        <img src="../../assets/img/home-img.png" />
      </div>
    </div>

    <section class="planos">
        <h2>Escolha seu Plano</h2>
        <div class="container">
            <?php
            $planos = [
                ["nome" => "Básico", "preco" => "R$ 9,90/mês", "recursos" => ["1 Site", "10GB de Armazenamento", "Suporte 24/7"]],
                ["nome" => "Profissional", "preco" => "R$ 29,90/mês", "recursos" => ["5 Sites", "50GB de Armazenamento", "Certificado SSL Grátis"]],
                ["nome" => "Empresarial", "preco" => "R$ 59,90/mês", "recursos" => ["Ilimitados", "100GB de Armazenamento", "Backup Automático"]]
            ];
    
            foreach ($planos as $plano) {
                echo "<div class='plano'>";
                echo "<h3>{$plano['nome']}</h3>";
                echo "<p class='preco'>{$plano['preco']}</p>";
                echo "<ul>";
                foreach ($plano['recursos'] as $recurso) {
                    echo "<li>$recurso</li>";
                }
                echo "</ul>";
                echo "<button onclick=\"abrirModal('{$plano['nome']}')\">Escolher Plano</button>";

                echo "</div>";
            }
            ?>
        </div>
    </section>
    
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
            <img src="../../assets/img/Rayan.jpg" />
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
            <img src="../../assets/img/Gabriel.jpg" />
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
            <img src="../../assets/img/Victor.jpg" />
            <div class="info">
              <h5 class="nome3">Victor</h5>
              <p class="local3">Sao Paulo</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JEAN - RAYAN - VANESSA -->

    <footer>
      <div class="top">
        <div class="logo">
          <img src="../../assets/img/logo G-TECH.jpg" />
        </div>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="servicos.html">Serviços</a></li>
          <li><a href="sobreNos.html">Sobre nós</a></li>
          <li><a href="projetos.html">Projetos</a></li>
          <li><a href="index.php#feedback">Comentarios</a></li>
        </ul>
      </div>
      <div class="separator"></div>
      <div class="bottom">
        <p>❤️ By G-TECH</p>
      </div>
    </footer>
    <!-- Modal de confirmação do plano -->
<div id="modalPlano" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); justify-content:center; align-items:center; z-index:999;">
  <div style="background-color:#fff; padding:30px; border-radius:10px; text-align:center; max-width:400px;">
    <p id="mensagemPlano" style="font-size:18px;"></p>
    <br>
    <button onclick="confirmarPlano()" style="margin-right: 10px;">Confirmar</button>
    <button onclick="fecharModal()">Cancelar</button>
  </div>
</div>
<script>
  function openMenu() {
  const nav = document.querySelector("nav");
  nav.classList.toggle("open");
}

function abrirModal(plano) {
  const modal = document.getElementById("modalPlano");
  const mensagem = document.getElementById("mensagemPlano");
  mensagem.textContent = `Você escolheu o plano: ${plano}. Deseja confirmar?`;
  modal.style.display = "flex";
}

function fecharModal() {
  document.getElementById("modalPlano").style.display = "none";
}

function confirmarPlano() {
  alert("Plano confirmado com sucesso!");
  fecharModal();
}

</script>


<script src="../../assets/js/script.js"></script>

  </body>
</html>
