<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <p>Menu
          </p>
          <?php
                  include ("function_menu_lateral_search.php");

                  $resposta_menu_lateral_search = menu_lateral_search();

                  ?>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?php echo $resposta_menu_lateral_search['Logo_Admin']; ?>" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $resposta_menu_lateral_search['Nome_Admin']; ?></h5>
                  <span>Ultimo Acesso:<?php echo $resposta_menu_lateral_search['U_A_D_Admin']; ?> às <br> <?php echo $resposta_menu_lateral_search['U_A_H_Admin']; ?></span>
                  <br>
                  <span>Total de Acesso:<?php echo $resposta_menu_lateral_search['N_A_Admin']; ?></span>
                </div>
              </div>
              
              
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Menu</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="dashboard.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">API Docs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="create-payer-exemplo.php">Criar Pagamentos GET</a></li>
                <li class="nav-item"> <a class="nav-link" href="status-payer-exemplo.php">Status Pagamentos GET</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="config_keys.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Credenciais</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="historico_api_admin.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Historico API</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="historico_acesso.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Historico de Acesso</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="config_admin.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Configuração Admin</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-sobre" aria-expanded="false" aria-controls="ui-sobre">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Sobre</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-sobre">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="versao.php">Versao</a></li>
                <li class="nav-item"> <a class="nav-link" href="desenvolverdor.php">Desenvolverdor</a></li>
                <li class="nav-item"> <a class="nav-link" href="doacoes.php">Doações</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Sair</span>
            </a>
          </li>
        </ul>
      </nav>