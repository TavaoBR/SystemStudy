<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/login.css">
    <title>Login</title>
</head>
<body>

<section class="contact-clean">
    <form method="POST" action="../../controller/user/valida.php">


            <h2 class="text-center">Login</h2>
            <?php 
            if(isset($_SESSION['successo_user'])){
                echo $_SESSION['successo_user'];
                unset($_SESSION['successo_user']);
            }

            if(isset($_SESSION['error_user'])){
                echo $_SESSION['error_user'];
                unset($_SESSION['error_user']);
            }

       ?>
            <input class="form-control" type="text" name="nome_usuario"  placeholder="User Name">
            <div class="mb-3"></div><input class="form-control" type="password" name="senha_usuario" placeholder="Senha">
            <div class="mb-3"></div>
            <div class="mb-3"><button name="Logar" class="btn btn-primary">Logar</button></div>
        </form>
    </section>
  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>