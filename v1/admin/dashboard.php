<?php
header("Content-type: text/html; charset=utf-8");
include("seguranca.php");

include("conexao.php");

include("function_historico_acesso_admin_create.php");
$id_login_acesso = $_SESSION['id_login_acesso_admin'];
$id_externo_acesso_admin = $_SESSION['id_externo_acesso_admin'];
$descricao_acesso = "ACESSO PAGINA DASHBOARD";
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

                include("conteudo_dashboard.php");

                ?>

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
    <script>
        var btn_api = document.querySelector("#btn_api");
        btn_api.addEventListener("click", function() {
            var div = document.querySelector("#box_api");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_status = document.querySelector("#btn_Pagamentos_status");
        btn_Pagamentos_status.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_status");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos = document.querySelector("#btn_Pagamentos");
        btn_Pagamentos.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_concluidos = document.querySelector("#btn_Pagamentos_concluidos");
        btn_Pagamentos_concluidos.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_concluidos");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_pendentes = document.querySelector("#btn_Pagamentos_pendentes");
        btn_Pagamentos_pendentes.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_pendentes");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_estornados = document.querySelector("#btn_Pagamentos_estornados");
        btn_Pagamentos_estornados.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_estornados");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_authorized = document.querySelector("#btn_Pagamentos_authorized");
        btn_Pagamentos_authorized.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_authorized");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_in_mediation = document.querySelector("#btn_Pagamentos_in_mediation");
        btn_Pagamentos_in_mediation.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_in_mediation");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_in_process = document.querySelector("#btn_Pagamentos_in_process");
        btn_Pagamentos_in_process.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_in_process");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_rejected = document.querySelector("#btn_Pagamentos_rejected");
        btn_Pagamentos_rejected.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_rejected");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_cancelled = document.querySelector("#btn_Pagamentos_cancelled");
        btn_Pagamentos_cancelled.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_cancelled");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });

        var btn_Pagamentos_charged_back = document.querySelector("#btn_Pagamentos_charged_back");
        btn_Pagamentos_charged_back.addEventListener("click", function() {
            var div = document.querySelector("#box_Pagamentos_charged_back");

            if (div.style.display === "none") {

                div.style.display = "flex";
            } else {
                div.style.display = "none";
            }

        });
    </script>
</body>

</html>