<?php 
session_start();

include_once("../../model/conection/conexao.php");

//Filtro pra capturar usuario
$user_id = filter_input(INPUT_GET, 'id_user', FILTER_SANITIZE_NUMBER_INT);

//inicio query de consulta do usuario
$select_user_ = "SELECT * FROM user WHERE id = :id";
$query_ = $conectar->prepare($select_user_);

$query_->bindParam(':id', $user_id);

$query_->execute();

$select_user_assoc = $query_->fetch(PDO::FETCH_ASSOC);
extract($select_user_assoc);

//FIM da query
?>

<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Grupos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../asset/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../asset/css/grupo_card.css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="../asset/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="../asset/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="../asset/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
              <?php 
               include_once("../menu/sidebar_left.php");
              ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <?php 
                    include_once("../menu/navbar.php");
                    ?>

                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <!-- end page title -->
                        
                       
                        <!-- end row -->
                        <div class="main-body">
    
                            <!-- Breadcrumb -->
                            <!-- /Breadcrumb -->
                                <center><h2>Grupos</h2></center>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card p-3 mb-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div class="icon"> <i class="fa-solid fa-people-group"></i> </div>
                                                    <div class="ms-2 c-details">
                                                        <h6 class="mb-0">Criado: Josiscleyson</h6> <span>Data:</span>
                                                    </div>
                                                </div>
                                                <div> <span>Status</span> </div>
                                            </div>
                                            <div class="mt-5">
                                                <h3 class="heading">Nome Grupo</h3>
                                                <div class="mt-5">
                                                    <div class="mt-3"><a href="#" class="btn btn-success">Visualizar</a></div>
                                                    <div class="mt-3"> <span class="text1">21 <span class="text2">Membros</span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>

                        </div>

                        <!-- end row -->


                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="../asset/js/vendor.min.js"></script>
        <script src="../asset/js/app.min.js"></script>

        <!-- third party js -->
        <script src="../asset/js/vendor/apexcharts.min.js"></script>
        <script src="../asset/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../asset/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="../asset/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
    </body>
</html>