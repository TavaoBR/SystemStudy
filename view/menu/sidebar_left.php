<div class="leftside-menu">
    
    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg text-white" >
               <h3>StudSystem</h3>
        </span>
        <span class="logo-sm text-white">
                <h3>SS</h3>
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="../asset/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="../asset/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>
            <?php 
            
            $id_user = $_SESSION['usuarioID'];
            $select_user = "SELECT * FROM user WHERE id = :id";
            $query =  $conectar->prepare($select_user);
            $query->bindParam(':id', $id_user, PDO::PARAM_STR);
            $query->execute();

            $assoc_usuario = $query->fetch(PDO::FETCH_ASSOC);
            extract($assoc_usuario);
            ?>
            
            <li class="side-nav-item">
                <a href="../user/perfil.php?id_user=<?php echo $id?>" class="side-nav-link">
                  <i class="fa-solid fa-user-secret"></i>
                    <span> Perfil </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="#" class="side-nav-link">
                    <i class="fa-solid fa-people-group"></i>
                    <span> Amigos </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="../exbir/usuarios.php" class="side-nav-link">
                <i class="fa-solid fa-user-plus"></i>
                    <span> Adicionar amigos </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="../grupos/criacao.php" class="side-nav-link">
                  <i class="fa-solid fa-folder-plus"></i>
                    <span> Criar Grupo </span>
                </a>
            </li>
    
            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                 <i class="fa-solid fa-calendar-days"></i>
                    <span> Calendar </span>
                </a>
            </li>


            <li class="side-nav-title side-nav-item mt-1">Estudo</li>
            
            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                 <i class="fa-solid fa-calendar-days"></i>
                    <span>Grupo de estudo</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                 <i class="fa-solid fa-calendar-days"></i>
                    <span>Plano de estudo</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                 <i class="fa-solid fa-calendar-days"></i>
                    <span>Playlist de estudo</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                 <i class="fa-solid fa-calendar-days"></i>
                    <span>Calendário de estudo</span>
                </a>
            </li>



            <li class="side-nav-title side-nav-item mt-1">Social</li>

            <li class="side-nav-item">
                <a href="apps-social-feed.html" class="side-nav-link">
                  <i class="fa-solid fa-diagram-project"></i>
                    <span> Projetos </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="../grupos/exibir_grupos.php?id_user=<?php echo $id?>" class="side-nav-link">
                 <i class="fa-solid fa-layer-group"></i>
                    <span> Grupos </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-social-feed.html" class="side-nav-link">
                   <i class="fa-solid fa-users-rectangle"></i>
                    <span> Social Feed </span>
                </a>
            </li>

        </ul>

        <!-- Help Box -->
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>