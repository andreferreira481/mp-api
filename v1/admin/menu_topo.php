<nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">        
                  <h5 class="mb-0 font-weight-normal">API Mercado Pago Admin</h5>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <?php  

                  include("function_menu_topo_Ultimos_Pagamentos_search.php");

                  $resposta_ultimos_pagamentos  = menu_topo_Ultimos_Pagamentos_search();
              ?>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Ultimas Notificações</h6>
                  <?php

                    $i = 0;
                    while ($i <= 3):
                      if (isset($resposta_ultimos_pagamentos[$i])) {
                        echo '<div class="dropdown-divider"></div>';
                        echo '<a class="dropdown-item preview-item">';
                          echo  '<div class="preview-thumbnail">';
                              echo '<div class="preview-icon bg-dark rounded-circle">';
                                 echo '<i class="mdi mdi-calendar text-success"></i>';
                            echo ' </div>';
                        echo '</div>';
                      echo '<div class="preview-item-content">';
                          echo '<p class="preview-subject mb-1">$'.$resposta_ultimos_pagamentos[$i]["Transaction_Amount_Notification_Admin"].'</p>';
                          echo '<p class="text-muted ellipsis mb-0">Metodo: '. $resposta_ultimos_pagamentos[$i]["Payment_Method_Id_Notification_Admin"] .'</p>';
                          echo '<p class="text-muted ellipsis mb-0">Status: '. $resposta_ultimos_pagamentos[$i]["Status_Notification_Admin"] .'</p>';
                          echo '<p class="text-muted ellipsis mb-0">Descrição: '. $resposta_ultimos_pagamentos[$i]["Description_Notification_Admin"] .'</p>';
                          echo '<p class="text-muted ellipsis mb-0">Data: '. $resposta_ultimos_pagamentos[$i]["Date_Last_Updated_Notification_Admin"] .'</p>';
                          echo '<p class="text-muted ellipsis mb-0">Id: '. $resposta_ultimos_pagamentos[$i]["Id_Preference_Notification_Admin"] .'</p>';
                        echo '</div>';
                         echo '</a>';
                    }
                      

                      $i++;
                    endwhile;
                    
                  
                  ?>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="historico_api_admin.php">
                  <p class="p-3 mb-0 text-center">Ver Todas as Notificações</p>
                </div>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                  <img class="img-xs rounded-circle " src="<?php echo $resposta_menu_lateral_search['Logo_Admin']; ?>" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $resposta_menu_lateral_search['Nome_Admin']; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Perfil</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="config_admin.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Configuração</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="index.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Sair</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Definições</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>