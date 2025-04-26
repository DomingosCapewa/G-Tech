<?php 

  include_once 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/jpg" href="/Facul/assets/img/logo-gtech.jpg" /> 

    <!-- Bootstrap e Ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

   
    <link rel="stylesheet" href="/Facul/assets/styles/style.css" />


    <title>G-TECH</title>
  </head>

  <body>
    <!-- NAV -->
    <nav>
      <div class="logo">
      <img src="/Facul/assets/img/logo G-TECH.jpg" alt="Logo G-TECH" />
        <a href="/Facul/index.php">G-TECH</a>
      </div>
      <ul>
        <li><a href="/Facul/index.php">Inicio</a></li>
        <li><a href="/Facul/public/pages/servicos.php">Serviços</a></li>
        <!--<li><a href="/Facul/planos.php">Planos</a></li> vamos rever sobre os planos no index ou aqui-->
        <li><a href="/Facul/public/pages/sobreNos.php">Sobre nós</a></li>
     <!--   <li><a href="/Facul/public/pages/projetos.php">Projetos</a></li> remover todo o conteúdo sobre esse assunto-->
        <li><a href="/Facul/index.php#feedback">Comentários</a></li>
      </ul>
    
      <ul class="navbar-nav">
                    <?php if (isLoggedIn()): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle me-1"></i>Minha Conta
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <?php if (isAdmin()): ?>
                                    <li><a class="dropdown-item" href="/Facul/admin/dashboard.php">Painel Admin</a></li>
                                <?php else: ?>
                                    <li><a class="dropdown-item" href="/Facul/user/dashboard.php">Painel do Usuário</a></li>
                                <?php endif; ?>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/Facul/logout.php">Sair</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="/Facul/login.php">Login</a> 
                            </li>
                            <a class="nav-link" href="/Facul/register.php">Registrar</a>
                        </li>
                        <ul>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    </nav>

    <!--<script>
    //   function openMenu() {
    //     document.querySelector('nav').classList.toggle('open');
    //   }
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
