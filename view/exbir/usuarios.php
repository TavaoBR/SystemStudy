<?php 
include_once("../../model/conection/conexao.php");
session_start();
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Adcionar amigo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../asset/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../asset/css/perfis.css">
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
                    <br>

                    <div class="container profile-page">
                    <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Search</button>
                                </div>
                            </form>

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-notes font-16 me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-life-ring font-16 me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-cog font-16 me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="../asset/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="../asset/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>

    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Follow</button>
                                <button class="btn btn-primary btn-round btn-simple">Message</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Follow</button>
                                <button class="btn btn-primary btn-round btn-simple">Message</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Follow</button>
                                <button class="btn btn-primary btn-round btn-simple">Message</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Follow</button>
                                <button class="btn btn-primary btn-round btn-simple">Message</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
	</div>
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