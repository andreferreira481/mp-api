<?php

header("Content-type: text/html; charset=utf-8");
include("seguranca.php");


include("function_config_admin_search.php");
$config_admin = "";
$resposta = config_admin_editar($config_admin);

include("function_historico_acesso_admin_create.php");
$id_login_acesso = $_SESSION['id_login_acesso_admin'];
$id_externo_acesso_admin = $_SESSION['id_externo_acesso_admin'];
$descricao_acesso = "ACESSO PAGINA CONFIGURAÇÃO ADMINISTRATOR";
$id_usuario_acesso_admin = $_SESSION['id_usuario_acesso_admin'];
historico_acesso_admin($_SESSION['id_externo_admin'], $id_login_acesso, $descricao_acesso, $id_externo_acesso_admin, $id_usuario_acesso_admin);


?>

<!DOCTYPE html>
<html lang="en">

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
                  <h4 class="card-title">Configuração de Administrator</h4>
                  <form class="form-sample" method="post" action="function_config_admin_update.php" autocomplete="on" enctype="multipart/form-data" name="config_admin">
                    <p class="card-description"> Campos com * são obrigatorio</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nome</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nome_admin" autofocus value="<?php echo $resposta['Nome_Admin']; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="email_admin" required value="<?php echo $resposta['Email_Admin']; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Senha</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="senha_admin" required value="<?php echo $resposta['Senha_Admin']; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Celular</label>
                          <div class="col-sm-9">
                            <input type="tel" class="form-control" placeholder="+55 (34) 9 9999-9999" name="celular_admin" value="<?php echo $resposta['Celular_Admin']; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ID Admin</label>
                          <div class="col-sm-9">
                            <input type="hidden" name="id_admin" value="<?php echo $resposta['Id_Admin']; ?>">
                            <p class="card-description"> <?php echo $resposta['Id_Admin']; ?> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ID Externo Admin</label>
                          <div class="col-sm-9">
                            <input type="hidden" name="id_externo_admin" value="<?php echo $resposta['Id_Externo_Admin']; ?>">
                            <p class="card-description"> <?php echo $resposta['Id_Externo_Admin']; ?> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Logo</label>
                          <div class="col-sm-9">
                            <input type="file" name="logo_admin" id="logo_admin" required class="file-upload-default" onchange="previewImagem()" value="<?php echo $resposta['Logo_Admin']; ?>">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Preview Logo</label>
                          <div class="col-sm-9">
                            <?php

                            if ($resposta['Logo_Admin'] == "") {

                              echo '<img src="assets/images/dashboard/img_7.jpg" alt="" name="preview_logo_admin" id="preview_logo_admin" width="300" height="250">';
                            } else {
                              echo '<img src="upload/img/' . $resposta['Logo_Admin'] . '" alt="" name="preview_logo_admin" id="preview_logo_admin" width="300" height="250">';
                            }

                            ?>
                            <input type="hidden" name="logo_antigo_admin" value="<?php echo $resposta['Logo_Admin']; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Data de Cadastro</label>
                          <div class="col-sm-9">
                            <p class="card-description"> <?php echo $resposta['C_D_Admin'] . ' às ' . $resposta['C_H_Admin']; ?> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ultima Edição</label>
                          <div class="col-sm-9">
                            <p class="card-description"> <?php echo $resposta['E_D_Admin'] . ' às ' . $resposta['E_H_Admin']; ?> </p>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function previewImagem() {
      var imagem = document.querySelector('input[name=logo_admin]').files[0];
      var preview = document.querySelector('img[name=preview_logo_admin]');

      var reader = new FileReader();

      reader.onloadend = function() {
        preview.src = reader.result;
      }

      if (imagem) {
        reader.readAsDataURL(imagem);
      } else {
        preview.src = "";
      }
    }
  </script>

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