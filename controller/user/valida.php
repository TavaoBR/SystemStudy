<?php 

session_start();
include_once("../../model/conection/conexao.php");
if((isset($_POST['nome_usuario'])) AND (isset($_POST['senha_usuario']))){
   $use_name = $_POST['nome_usuario'];
   $senha = $_POST['senha_usuario'];

   $select = "SELECT * FROM user WHERE nome_usuario = :u AND senha_usuario = md5(:s) LIMIT 1";
   $query = $conectar->prepare($select);
   $query->bindParam(':u', $use_name, PDO::PARAM_STR);
   $query->bindParam(':s', $senha, PDO::PARAM_STR);
   $query->execute();
   
   $assoc_user = $query->fetch(PDO::FETCH_ASSOC);

   if(isset($assoc_user)){
    $_SESSION['usuarioID'] = $assoc_user['id']; 
    $_SESSION['usuarioUser'] = $assoc_user['nome_usuario'];
    $_SESSION['usuarioSenha'] = $assoc_user['senha_usuario'];

    $id = $_SESSION['usuarioID'];

    if($_SESSION['usuarioUser'] AND $_SESSION['usuarioSenha']){
        header("Location: ../../view/user/perfil.php?id_user=$id");
    
    }else{
       $_SESSION['error_user'] = "<div class='alert alert-danger'> Usuario invalido ou inexistente </div>";
       header("Location: ../../view/user/login.php");
    }
        
   }else{
       $_SESSION['error_user'] = "<div class='alert alert-danger'> Usuario invalido ou inexistente </div>";
       header("Location: ../../view/user/login.php");
   }

}else{
      $_SESSION['error_user'] = "<div class='alert alert-danger'> Usuario invalido ou inexistente </div>";
       header("Location: ../../view/user/login.php");
}