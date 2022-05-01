<?php 
session_start();
include_once("../../model/conection/conexao.php");

if(isset($_POST['Salvar'])){
  
  $fk_user = $_POST['fk_user'];
  $email = $_POST['email'];
  $estado = $_POST['estado'];
  $grande = $_POST['grade'];
  $grande_implode = implode(", ", $grande);
  
  if($estado == ""){
      $_SESSION['selecione_estado'] = "
      <div class= 'alert alert-warning'>
         Seelecione o seu estado
      </div> 
      ";
      $_SESSION['email'] = $email;
      header("Location: ../../view/user/complete_perfil.php?id_user=$fk_user");

  }elseif($grande == ""){
     $_SESSION['selecione_materia'] = "
     <div class= 'alert alert-warning'>
         Marque 1 uma materia 
     </div> 
     ";
     $_SESSION['email'] = $email;
     header("Location: ../../view/user/complete_perfil.php?id_user=$fk_user");

  }else{
    $insert_user_informacoes = $conectar->prepare("INSERT INTO user_informacoes(fk_user, estado, email, grade) VALUES (:i, :e, :m, :g)");
    $insert_user_informacoes->bindParam(':i', $fk_user, PDO::PARAM_STR_CHAR);
    $insert_user_informacoes->bindParam(':e', $estado, PDO::PARAM_STR_CHAR);
    $insert_user_informacoes->bindParam(':m', $email, PDO::PARAM_STR_CHAR);
    $insert_user_informacoes->bindParam(':g', $grande_implode, PDO::PARAM_STR_CHAR);
  
    $insert_user_informacoes->execute();
  
    if($insert_user_informacoes->rowCount()){
      $update_user = $conectar->prepare("UPDATE user SET perfil_completo = 1 WHERE id = $fk_user");
      $update_user->execute();

      header("Location: ../../view/user/perfil.php?id_user=$fk_user");

    }else{
        $_SESSION['erro'] = "
     <div class= 'alert alert-danger'>
         Não foi possivel completar seu perfil, tente novamente mais tarde 
     </div> 
     ";    
        header("Location: ../../view/user/complete_perfil.php?id_user=$fk_user");
    }
  }

}