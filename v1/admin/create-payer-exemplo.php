<?php
header("Content-type: text/html; charset=utf-8");
include("seguranca.php");

include("conexao.php");

include("function_historico_acesso_admin_create.php");
$id_login_acesso = $_SESSION['id_login_acesso_admin'];
$id_externo_acesso_admin = $_SESSION['id_externo_acesso_admin'];
$descricao_acesso = "ACESSO PAGINA CRIAR PAGAMENTOS EXEMPLO";
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
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
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
        <?php
        // conteudo dashboard

        include("conteudo_create-payer-exemplo.php");

        ?>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        // conteudo dashboard

        include("rodape_create-payer-exemplo.php");

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
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <style type="text/css" class="init">
    tfoot input {
      width: 100%;
      padding: 3px;
      box-sizing: border-box;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
      box-sizing: border-box;
      display: inline-block;
      min-width: 1.5em;
      padding: 0.5em 1em;
      margin-left: 2px;
      text-align: center;
      text-decoration: none !important;
      cursor: pointer;
      *cursor: hand;
      color: #fa0f0f !important;
      border: 1px solid transparent;
      border-radius: 2px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
      color: #fa0f0f !important;
      border: 1px solid #979797;
      background-color: white;
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #dcdcdc));
      /* Chrome,Safari4+ */
      background: -webkit-linear-gradient(top, white 0%, #dcdcdc 100%);
      /* Chrome10+,Safari5.1+ */
      background: -moz-linear-gradient(top, white 0%, #dcdcdc 100%);
      /* FF3.6+ */
      background: -ms-linear-gradient(top, white 0%, #dcdcdc 100%);
      /* IE10+ */
      background: -o-linear-gradient(top, white 0%, #dcdcdc 100%);
      /* Opera 11.10+ */
      background: linear-gradient(to bottom, white 0%, #dcdcdc 100%);
      /* W3C */
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_processing,
    .dataTables_wrapper .dataTables_paginate {
      color: #fa0f0f;
    }
  </style>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script>
    var btn_api = document.querySelector("#btn_api");
    btn_api.addEventListener("click", function() {
      var div = document.querySelector("#box_api");

      if (div.style.display === "none") {

        div.style.display = "block";
      } else {
        div.style.display = "none";
      }

    });
  </script>
  <script type="text/javascript" language="javascript" class="init">
    $(document).ready(function() {
      // Setup - add a text input to each footer cell
      $('#example tfoot th').each(function() {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Pesquisa ' + title + '" />');
      });

      // DataTable
      var table = $('#example').DataTable({
        initComplete: function() {
          // Apply the search
          this.api().columns().every(function() {
            var that = this;

            $('input', this.footer()).on('keyup change clear', function() {
              if (that.search() !== this.value) {
                that
                  .search(this.value)
                  .draw();
              }
            });
          });
        }
      });

    });
  </script>
</body>

</html>