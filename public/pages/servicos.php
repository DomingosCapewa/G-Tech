<?php

require_once '../../includes/config.php';
require_once '../../includes/header.php';
?>

<!--diminuir scala do banner-->
<section class="hero-experiencias">

</section>


<main class="skills" id="skills">
  <div class="skill-items">
    <div class="item">
      <h4>Nuvem para Empresa X</h4>
      <p>Soluções modernas com AWS que aumentaram a eficiência e segurança operacional.</p>
      <button class="btn-saiba-mais" onclick="mostrarDetalhes(this)">Saiba mais</button>
      <div class="detalhes">
        <p>
          Implementamos uma infraestrutura em nuvem altamente escalável baseada na AWS para a Empresa X. A solução permitiu a modernização completa dos seus sistemas internos, com foco em segurança, automação e desempenho.
          Adicionamos balanceamento de carga, automação de backups diários, criptografia de dados em repouso e em trânsito, e configuramos alarmes de monitoramento em tempo real com integração a sistemas de resposta automática. O projeto proporcionou uma redução de 40% no tempo de resposta das aplicações e uma economia significativa nos custos de infraestrutura.
        </p>
      </div>
    </div>
    <div class="item">
      <h4>Aplicativo Móvel para Startup Y</h4>
      <p>Aplicativo robusto e escalável com infraestrutura em nuvem, foco em usabilidade.</p>
      <button class="btn-saiba-mais" onclick="mostrarDetalhes(this)">Saiba mais</button>
      <div class="detalhes">
        <p>
          Criamos um aplicativo mobile responsivo e interativo para a Startup Y, com foco total na experiência do usuário. Desenvolvido com tecnologias modernas como React Native, o app conta com sistema de autenticação segura, notificacoes push em tempo real, integração com APIs externas e um painel administrativo na web para gestão de usuários e conteúdo. O design foi pensado para ser intuitivo, com uma experiência fluida tanto em Android quanto iOS. Em apenas 30 dias após o lançamento, o aplicativo conquistou mais de 10 mil downloads.
        </p>
      </div>
    </div>
    <div class="item">
      <h4>Gestão Sustentável</h4>
      <p>Redução de consumo e descarte ecologicamente correto de equipamentos.</p>
      <button class="btn-saiba-mais" onclick="mostrarDetalhes(this)">Saiba mais</button>
      <div class="detalhes">
        <p>
          Desenvolvemos um plano completo de sustentabilidade digital com foco na eficiência energética e na gestão adequada de resíduos eletrônicos. Isso incluiu auditorias técnicas para identificar consumo excessivo, substituição de equipamentos obsoletos, reconfiguração de servidores para operação sob demanda e parcerias com recicladoras certificadas para descarte correto. O programa resultou em 23% de economia na conta de energia e na obtenção de selos ambientais reconhecidos nacionalmente.
        </p>
      </div>
    </div>
    <div class="item">
      <h4>Suporte Remoto</h4>
      <p>Infraestrutura em nuvem para home office eficiente.</p>
      <button class="btn-saiba-mais" onclick="mostrarDetalhes(this)">Saiba mais</button>
      <div class="detalhes">
        <p>
          Durante a pandemia, implementamos uma solução completa para trabalho remoto seguro e produtivo. Os colaboradores passaram a acessar sistemas internos via VPN criptografada, com autenticação de dois fatores, e suporte técnico em tempo real via chat e acesso remoto. Foram implantadas ferramentas colaborativas como Microsoft Teams e Google Workspace, com formação personalizada para todos os funcionários. Isso garantiu 100% de continuidade nas operações, mesmo com equipes descentralizadas, e melhoria na comunicação interna.
        </p>
      </div>
    </div>
  </div>
</main>
<style>
  .skill-items .item {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 20px;
    border-radius: 8px;
    background: #f9f9f9;
    margin-bottom: 20px;
  }

  .skill-items .item:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .btn-saiba-mais {
    margin-top: 10px;
    padding: 8px 16px;
    background-color: #00aa55;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .btn-saiba-mais:hover {
    background-color: #008744;
  }

  .detalhes {
    margin-top: 10px;
    font-size: 14px;
    color: #444;
    display: none;
  }
</style>
<script>
  function mostrarDetalhes(botao) {
    const div = botao.nextElementSibling;
    if (div.style.display === "block") {
      div.style.display = "none";
    } else {
      div.style.display = "block";
    }
  }
</script>

<footer>
  <div class="top">
    <div class="logo">
      <img src="/facul/assets/img/logo G-TECH.jpg">
    </div>

  </div>
  <div class="separator"></div>
  <div class="bottom">
    <p>
      ❤️ By G-TECH
    </p>
  </div>
</footer>
<script src="script.js"></script>
</body>

</html>