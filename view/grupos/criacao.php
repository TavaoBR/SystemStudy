<?php
include_once("../../controller/user/function.php"); 
include_once("../../model/conection/conexao.php");
session_start();
verifica_sessao();
?>
<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../asset/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../asset/css/login.css">
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



<section class="contact-clean">
       <form method="POST" action="../../controller/inserts/grupo.php">
          <?php 
           if(isset($_SESSION['campo'])){
                 echo $_SESSION['campo'];
                 unset($_SESSION['campo']);
           }

           if(isset($_SESSION['sucesso'])){
              echo $_SESSION['sucesso'];
              unset($_SESSION['sucesso']);
           } 

           if(isset($_SESSION['erro'])){
            echo  $_SESSION['erro'];
            unset( $_SESSION['erro']);
           }
          
          ?>

            <h2 class="text-center">Criar grupo</h2>
            <div class="mb-3"><input class="form-control" type="text"  name="nome_group" placeholder="Nome do grupo"></div>
            <div class="mb-3"></div>
            <div class="mb-3"><button name="Criar" class="btn btn-primary">Criar</button></div>
        </form>
    </section>

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