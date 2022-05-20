<div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                           <?php 
                            
                             

                            if(isset($_SESSION['usuarioID'])){

                                
                              echo "
                               <li class='dropdown notification-list'>
                               <a class='nav-link dropdown-toggle arrow-none' data-bs-toggle='dropdown' href='#' role='button' aria-haspopup='false' aria-expanded='false'>
                                   <i class='dripicons-bell noti-icon'></i>
                                   <span class='noti-icon-badge'></span>
                               </a>
                               <div class='dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg'>

                                   <!-- item-->
                                   <div class='dropdown-item noti-title'>
                                       <h5 class='m-0'>
                                           <span class='float-end'>
                                               <a href='javascript: void(0);' class='text-dark'>
                                                   <small>Clear All</small>
                                               </a>
                                           </span>Notification
                                       </h5>
                                   </div>

                                   <div style='max-height: 230px;' data-simplebar=''>
                                       <!-- item-->
                                       <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                           <div class='notify-icon bg-primary'>
                                               <i class='mdi mdi-comment-account-outline'></i>
                                           </div>
                                           <p class='notify-details'>Caleb Flakelar commented on Admin
                                               <small class='text-muted'>1 min ago</small>
                                           </p>
                                       </a>

                                       <!-- item-->
                                       <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                           <div class='notify-icon bg-info'>
                                               <i class='mdi mdi-account-plus'></i>
                                           </div>
                                           <p class='notify-details'>New user registered.
                                               <small class='text-muted'>5 hours ago</small>
                                           </p>
                                       </a>

                                       <!-- item-->
                                       <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                           <div class='notify-icon'>
                                               <img src='../asset/images/users/avatar-2.jpg' class='img-fluid rounded-circle' alt=''> </div>
                                           <p class='notify-details'>Cristina Pride</p>
                                           <p class='text-muted mb-0 user-msg'>
                                               <small>Hi, How are you? What about our next meeting</small>
                                           </p>
                                       </a>

                                       <!-- item-->
                                       <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                           <div class='notify-icon bg-primary'>
                                               <i class='mdi mdi-comment-account-outline'></i>
                                           </div>
                                           <p class='notify-details'>Caleb Flakelar commented on Admin
                                               <small class='text-muted'>4 days ago</small>
                                           </p>
                                       </a>

                                       <!-- item-->
                                       <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                           <div class='notify-icon'>
                                               <img src='../asset/images/users/avatar-4.jpg' class='img-fluid rounded-circle' alt=''> </div>
                                           <p class='notify-details'>Karen Robinson</p>
                                           <p class='text-muted mb-0 user-msg'>
                                               <small>Wow ! this admin looks good and awesome design</small>
                                           </p>
                                       </a>

                                       <!-- item-->
                                       <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                           <div class='notify-icon bg-info'>
                                               <i class='mdi mdi-heart'></i>
                                           </div>
                                           <p class='notify-details'>Carlos Crouch liked
                                               <b>Admin</b>
                                               <small class='text-muted'>13 days ago</small>
                                           </p>
                                       </a>
                                   </div>

                                   <!-- All-->
                                   <a href='javascript:void(0);' class='dropdown-item text-center text-primary notify-item notify-all'>
                                       View All
                                   </a>

                               </div>
                           </li>
                                ";
                            }
                           
                           ?>
                            
                            <?php 
                            if(isset($_SESSION['usuarioID'])){

                                include_once("../../model/conection/conexao.php");

                                $id_user = $_SESSION['usuarioID'];
                                $select_user = "SELECT * FROM user WHERE id = :id";
                                $query =  $conectar->prepare($select_user);
                                $query->bindParam(':id', $id_user, PDO::PARAM_STR);
                                $query->execute();

                                $assoc_usuario = $query->fetch(PDO::FETCH_ASSOC);
                                extract($assoc_usuario);

                                if(isset($imagem_perfil)){

                                    echo "
                                    <li class='dropdown notification-list'>
                               <a class='nav-link dropdown-toggle nav-user arrow-none me-0' data-bs-toggle='dropdown' href='#' role='button' aria-haspopup='false' aria-expanded='false'>
                                   <span class='account-user-avatar'> 
                                       <img src='../asset/image_user/$id/$imagem_perfil' alt='user-image' class='rounded-circle'>
                                   </span>
                                   <span>
                                       <span class='account-user-name'>$nome_completo</span>
                                       <span class='account-position'>$nome_usuario</span>
                                   </span>
                               </a>
                               <div class='dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown'>
                                   <!-- item-->
                                   <div class=' dropdown-header noti-title'>
                                       <h6 class='text-overflow m-0'>Welcome !</h6>
                                   </div>

                                   <!-- item-->
                                   <a href='../user/perfil.php?id_user=$id' class='dropdown-item notify-item'>
                                       <i class='mdi mdi-account-circle me-1'></i>
                                       <span>My Account</span>
                                   </a>

                                   <!-- item-->
                                   <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                       <i class='mdi mdi-account-edit me-1'></i>
                                       <span>Settings</span>
                                   </a>

                                   <!-- item-->
                                   <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                       <i class='mdi mdi-lifebuoy me-1'></i>
                                       <span>Support</span>
                                   </a>

                                   <!-- item-->
                                   <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                       <i class='mdi mdi-lock-outline me-1'></i>
                                       <span>Lock Screen</span>
                                   </a>

                                   <!-- item-->
                                   <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                       <i class='mdi mdi-logout me-1'></i>
                                       <span>Logout</span>
                                   </a>
                               </div>
                           </li>
                                    ";

                                }else{

                                    echo "
                                     <li class='dropdown notification-list'>
                                <a class='nav-link dropdown-toggle nav-user arrow-none me-0' data-bs-toggle='dropdown' href='#' role='button' aria-haspopup='false' aria-expanded='false'>
                                    <span class='account-user-avatar'> 
                                        <img src='https://avatar-management--avatars.us-west-2.prod.public.atl-paas.net/default-avatar.png' alt='user-image' class='rounded-circle'>
                                    </span>
                                    <span>
                                        <span class='account-user-name'>$nome_completo</span>
                                        <span class='account-position'>$nome_usuario</span>
                                    </span>
                                </a>
                                <div class='dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown'>
                                    <!-- item-->
                                    <div class=' dropdown-header noti-title'>
                                        <h6 class='text-overflow m-0'>Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href='../user/perfil.php?id_user=$id' class='dropdown-item notify-item'>
                                        <i class='mdi mdi-account-circle me-1'></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                        <i class='mdi mdi-account-edit me-1'></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                        <i class='mdi mdi-lifebuoy me-1'></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                        <i class='mdi mdi-lock-outline me-1'></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href='javascript:void(0);' class='dropdown-item notify-item'>
                                        <i class='mdi mdi-logout me-1'></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                                     ";

                                }
                                     
                            }else{
                                   echo "
                                    
                                   <li class='dropdown notification-list'>
                                <a class='nav-link dropdown-toggle nav-user arrow-none me-0' data-bs-toggle='dropdown' href='#' role='button' aria-haspopup='false' aria-expanded='false'>
                                    <span class='account-user-avatar'> 
                                        <img src='https://avatar-management--avatars.us-west-2.prod.public.atl-paas.net/default-avatar.png' alt='user-image' class='rounded-circle'>
                                    </span>
                                    <span>
                                        <span class='account-user-name'>Visitante</span>
                                        <span class='account-position'>clique aqui</span>
                                    </span>
                                </a>
                                <div class='dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown'>
                                    <!-- item-->
                                    <div class=' dropdown-header noti-title'>
                                        <h6 class='text-overflow m-0'>Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href='../user/login.php' class='dropdown-item notify-item'>
                                        <i class='mdi mdi-account-circle me-1'></i>
                                        <span>Sign</span>
                                    </a>

                                    <!-- item-->
                                    <a href='../user/cadastro.php' class='dropdown-item notify-item'>
                                        <i class='mdi mdi-account-edit me-1'></i>
                                        <span>Signup</span>
                                    </a>
                                </div>
                            </li>
                                   ";
                            }
                            
                            ?>


                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>

                    </div>