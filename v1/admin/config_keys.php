<?php

header("Content-type: text/html; charset=utf-8");
include("seguranca.php");

include("function_config_keys_search.php");
$config_key_admin = "";
$resposta = config_key_search($config_key_admin);

include("function_historico_acesso_admin_create.php");
$id_login_acesso = $_SESSION['id_login_acesso_admin'];
$id_externo_acesso_admin = $_SESSION['id_externo_acesso_admin'];
$descricao_acesso = "ACESSO PAGINA CONFIGURAÇÃO CREDENCIAIS MERCADO PAGO";
$id_usuario_acesso_admin = $_SESSION['id_usuario_acesso_admin'];
historico_acesso_admin($_SESSION['id_externo_admin'], $id_login_acesso, $descricao_acesso, $id_externo_acesso_admin, $id_usuario_acesso_admin);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>API Mercado Pago Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <?php
    // menu lateral incluir

    include("menu_lateral.php");

    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <?php
      // menu topo incluir

      include("menu_topo.php");

      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Configuração de Credenciais do Mercado Pago</h4>
                  <form class="form-sample" method="post" action="function_config_keys_update.php" autocomplete="on" name="config_admin">
                    <p class="card-description"> Campos com * são obrigatorio</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Access Token</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="access_token_admin" required autofocus value="<?php echo $resposta['Access_Token_Keys_Admin']; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Client Id</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="client_id_admin" required value="<?php echo $resposta['Client_Id_Keys_Admin']; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Client Secret</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="client_secret_admin" required value="<?php echo $resposta['Client_Secret_Keys_Admin']; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Id Externo Keys</label>
                          <div class="col-sm-9">
                            <input type="hidden" name="id_externo_keys_admin" value="<?php echo $resposta['Id_Externo_Keys_Admin']; ?>">
                            <p class="card-description"> <?php echo $resposta['Id_Externo_Keys_Admin']; ?> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Data de Cadastro</label>
                          <div class="col-sm-9">
                            <p class="card-description"> <?php echo $resposta['Data_Cadastro_Keys_Admin'] . ' às ' . $resposta['Hora_Cadastro_Keys_Admin']; ?> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Id</label>
                          <div class="col-sm-9">
                            <input type="hidden" name="id_keys_admin" value="<?php echo $resposta['Id_Keys_Admin']; ?>>
                                <p class=" card-description"> <?php echo $resposta['Id_Keys_Admin']; ?> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <input type="submit" value="Cadastrar" class="btn btn-success btn-rounded btn-fw"></input>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        // conteudo dashboard

        include("rodape_dashboard.php");

        ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/select2/select2.min.js"></script>
  <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/file-upload.js"></script>
  <script src="assets/js/typeahead.js"></script>
  <script src="assets/js/select2.js"></script>
  <!-- End custom js for this page -->
</body>

</html>