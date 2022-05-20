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

$url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome";
$url_estado = curl_init($url);
curl_setopt($url_estado, CURLOPT_RETURNTRANSFER, true);
curl_setopt($url_estado, CURLOPT_SSL_VERIFYPEER, false);
$resultado = json_decode(curl_exec($url_estado));
extract($select_user_assoc);

//api estados


?>
<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Complete Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../asset/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <?php 
             if($perfil_completo == 0){

             
            ?>                
			<div class="row">
                <h2>Complete seu cadastro</h2>
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
                            <div class="row mb-3">
								<div class="col-sm-3">
                                <h5 class="mb-0"> Deseja colocar imagem de perfil?
                                    se sim.</h5>
                                </div>
								<div class="col-sm-9 text-secondary">
									<a href="../user/colocar_imagem_perfil.php?id_user=<?php echo $user_id?>" target="_blank" class="btn btn-success">clique aqui</a>
								</div>
							</div>
                            <hr>
                           <form method="POST" action="../../controller/inserts/complete_infor_user.php">
                               <input type="hidden" name="fk_user" value="<?php echo $id?>"> 
                               <?php 
                                 if(isset($_SESSION['selecione_estado'])){
                                       echo $_SESSION['selecione_estado'];
                                       unset($_SESSION['selecione_estado']);
                                 }
                              
                                  if(isset($_SESSION['selecione_materia'])){
                                     echo $_SESSION['selecione_materia'];
                                     unset($_SESSION['selecione_materia']);
                                  }

                                  if(isset( $_SESSION['erro'])){
                                      echo  $_SESSION['erro'];
                                      unset($_SESSION['erro']);
                                  }
                               ?>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h5 class="mb-0">Email:</h5>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="email" value="<?php  if(isset($_SESSION['email'])){echo $_SESSION['email']; unset($_SESSION['email']);}?>" class="form-control" required>
								</div>
							</div>
                            <hr>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h5 class="mb-0">Estado:</h5>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php 
                                    
                                    echo "<select name = 'estado' required>";
                                    echo "<option value = ''>Selecione uma opção</option>"; 
                                      foreach($resultado as $linha){
                                         echo "<option value ='$linha->nome'>$linha->nome</option>";
                                      }

                                    echo "</select>"
                                   
                                   
                                    ?>
								</div>
                                  
                                <br>
                                <br>
                                <hr>

                                <div class="row mb-3">
								<div class="col-sm-3">
									<h5 class="mb-0">Materias Favoritas:</h5>
								</div>
								<div class="col-sm-9 text-secondary">
                                  <?php 
                                    
                                    $select_materias = $conectar->prepare("SELECT * FROM materias");
                                    $select_materias->execute();
                                    
                                    while($select_materias_assoc = $select_materias->fetch(PDO::FETCH_ASSOC)){
                                         extract($select_materias_assoc);
                                         echo "<label>$nome</label>";
                                         echo "&nbsp;&nbsp;<input type='checkbox' name='grade[]' value='$nome'><br>";
                                             
                                    }
                                  ?>
								</div>
							</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<button class="btn btn-success" name="Salvar">Salvar</button>
								</div>
							</div>
                        </form>
						</div>
					</div>
				</div>
			</div>
            <?php 
             }else{ 
                echo "
                 <div class='alert alert-success'>
                   Você já finalizou o resto do cadastro do seu perfil
                   <a href='../user/perfil.php?id_user=$id'>Veja seu perfil</a>
                 </div>
                ";
             }
            ?>
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