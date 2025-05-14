<?php

require_once '../../includes/config.php'; 
require_once '../../includes/header.php';  
?>
<!-- <link rel ="stylesheet" href="/assets/styles/style.css" /> -->
    <!-- RAYAN
    <div class="about" id="about">
      <div class="left">
        <img src="../../assets/img/sobre_empresa.jpg" />
      </div>
      <div class="right">
        <h3>Nossa Visão para um futuro melhor</h3>
        <p>
          A G-TECH é uma empresa brasileira especializada em sistemas e soluções
          de desenvolvimento web. Fundada com a missão de oferecer soluções
          tecnológicas de ponta para empresas e empreendedores, estamos
          comprometidos com a excelência e a inovação em tudo o que fazemos.
          Nossa equipe é formada por profissionais altamente qualificados e
          apaixonados por tecnologia, prontos para enfrentar os desafios mais
          complexos e entregar resultados excepcionais.
        </p>
        <p>
          Experiência Comprovada: Com anos de experiência no mercado, possuímos
          um histórico sólido de sucesso e satisfação do cliente. Equipe
          Talentosa: Nossa equipe é composta por profissionais altamente
          qualificados e dedicados, prontos para enfrentar qualquer desafio.
        </p>
      </div>
    </div>
  </body> -->

<!DOCTYPE>
<html>
<head>
    <title>Sobre Nós</title>
    <link rel="../../style.css"
</head>
    <body>
  <section class="sobre-nos">
      <h2>Quem Somos</h2>
      <p>A G-TECH é especialista em soluções web, sistemas em nuvem e suporte à infraestrutura. Oferecemos qualidade, inovação e atendimento personalizado para empresas que desejam crescer com tecnologia de ponta.</p>
      <p>Com uma equipa apaixonada por tecnologia e comprometida com resultados reais e sustentáveis, trabalhamos todos os dias para transformar ideias em soluções digitais eficazes.</p>
    </section>
  
    <section class="cards-info">
      <div class="card">
        <h3>Missão</h3>
        <p>Entregar soluções tecnológicas inovadoras que impulsionem o crescimento sustentável dos nossos clientes.</p>
      </div>
      <div class="card">
        <h3>Visão</h3>
        <p>Ser referência nacional em tecnologia digital, destacando-nos pela excelência e compromisso com resultados.</p>
      </div>
      <div class="card">
        <h3>Valores</h3>
        <p>Inovação, transparência, responsabilidade ambiental, ética e compromisso com o cliente.</p>
      </div>
    </section>
  
    <!--<section class="video-section">
      <h2>Conheça-nos Melhor</h2>
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/8JI9wQ8sUdQ" title="Apresentação G-TECH" frameborder="0" allowfullscreen></iframe>


      </div>
    </section> -->
  
    <!--<footer class="footer">
            <p>© 2025 G-TECH. Todos os direitos reservados.</p>
      <p>
        ❤️ By G-TECH
    </p>
    </footer>-->
    <?php 
    
    require_once '../../includes/footer.php'
    ?>


    </body>
  
<!--<style>
  
  
  /* Vídeo */
  .video-section {
    background-color: #eef3f6;
    padding: 40px 60px;
    text-align: center;
  }
  
  .video-section h2 {
    font-size: 26px;
    margin-bottom: 20px;
    color: #003366;
  }
  
  .video-container iframe {
    width: 100%;
    max-width: 700px;
    height: 400px;
    border-radius: 8px;
  }
  
  /* Footer */
  .footer {
    background-color: #003366;
    color: white;
    text-align: center;
    padding: 20px;
  }
</style> -->
 <style> 
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f9f9f9;
    color: #222;
    line-height: 1.6;
  }
  
  /* Header */
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(to right, #003366, #005599);
    padding: 10px 30px;
    color: white;
  }
  
  .header .logo {
    display: flex;
    align-items: center;
  }
  
  .header .logo img {
    width: 40px;
    margin-right: 10px;
  }
  
  .header .btn-voltar a {
    background-color: white;
    color: #003366;
    padding: 8px 15px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
  }
  
  .header .btn-voltar a:hover {
    background-color: #eee;
  }
  /* Seção sobre nós */
  .sobre-nos {
    padding: 40px 60px;
    background-color: #fff;
  }
  
  .sobre-nos h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #003366;
  }
  
  .sobre-nos p {
    margin-bottom: 15px;
  }
  
  /* Cards */
  .cards-info {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
    padding: 30px 60px;
  }
  
  .card {
    background-color: white;
    border-radius: 12px;
    padding: 20px;
    max-width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
  }
  
  .card:hover {
    transform: translateY(-5px);
  }
  
  .card h3 {
    color: #005599;
    margin-bottom: 10px;
  }
  </style>
</html>
