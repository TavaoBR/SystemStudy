<?php 
session_start();
?>
<!DOCTYPE html>
    <html lang="en">

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

                <?php 
                
                 if(!isset($_SESSION['usuarioID'])){
                ?>

<section class="contact-clean">
       <form method="POST" action="../../controller/inserts/insert_user.php">


            <h2 class="text-center">Resgistro de Usuario</h2>
            <?php 
            if(isset($_SESSION['sucesso'])){
                echo $_SESSION['sucesso'];
                unset($_SESSION['sucesso']);
            }

            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }

            if(isset($_SESSION['preencha_campos'])){
                echo $_SESSION['preencha_campos'];
                unset($_SESSION['preencha_campos']);
            }

            if(isset($_SESSION['preencha_senha'])){
                echo $_SESSION['preencha_senha'];
                unset($_SESSION['preencha_senha']);
            }

            if(isset($_SESSION['preencha_user'])){
                echo $_SESSION['preencha_user'];
                unset($_SESSION['preencha_user']);
            }

            if(isset($_SESSION['preencha_name'])){
                echo $_SESSION['preencha_name'];
                unset($_SESSION['preencha_name']);
            }

            

            if(isset($_SESSION['usuario_cadastro'])){
                echo $_SESSION['usuario_cadastro'];
                unset($_SESSION['usuario_cadastro']);
            }

            

            if(isset($_SESSION['sucesso'])){
                echo $_SESSION['sucesso'];
                unset($_SESSION['sucesso']);
            }

            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }

            if(isset($_SESSION['senhas_nao_batem'])){
                echo $_SESSION['senhas_nao_batem'];
                 unset($_SESSION['senhas_nao_batem']);
            }
       ?>
            <div class="mb-3"><input class="form-control" type="text" value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; unset($_SESSION['name']);}?>" name="nome_completo" placeholder="Nome Completo"></div>
            <input class="form-control" type="text" name="nome_usuario" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']; unset($_SESSION['user']);}?>" placeholder="User Name">
            <div class="mb-3"></div><input class="form-control" type="password" value="<?php if(isset($_SESSION['senha'])){ echo $_SESSION['senha']; unset($_SESSION['senha']);}?>" name="senha_usuario_confirma" placeholder="Digite uma senha">
            <div class="mb-3"></div><input class="form-control" type="password" value="" name="senha_usuario" placeholder="Confirme a senha">
            <div class="mb-3"></div>
            <div class="mb-3"><button name="Cadastro" class="btn btn-primary">Registrar</button></div>
        </form>
    </section>
    <?php 
       }else{
           echo "
           <br>
             <div class='alert alert-success'>
                Você já está cadastrado e logado 
             </div>
           ";
       }    
    ?>

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