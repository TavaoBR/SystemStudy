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



?>
<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Enviar imagem perfil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../asset/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../asset/css/perfil.css">
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
			<div class="row">
                <h2>Enviar imagem perfil: <?php echo $nome_usuario?></h2>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h5 class="mb-0">Full Name:</h5>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $nome_completo?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h5 class="mb-0">User Name:</h5>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $nome_usuario?>">
								</div>
							</div>
                            <hr>
                           <form method="POST" action="../../controller/inserts/upload_imagem.php" enctype="multipart/form-data">
                               <?php 
                               if(isset( $_SESSION['imagem_enviada'])){
                                 echo  $_SESSION['imagem_enviada'];
                                 unset( $_SESSION['imagem_enviada']);
                               }
                               
                               ?>
                               <input type="hidden" name="fk_user" value="<?php echo $user_id?>"> 
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h5 class="mb-0">Escolha um imagem</h5>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="file" name="imagem" class="form-control" accept=".jpg, .jpeg, .png">
								</div>
							</div>
                            <hr>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<button class="btn btn-success" name="Salvarimagem">Salvar</button>
								</div>
							</div>
                        </form>
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