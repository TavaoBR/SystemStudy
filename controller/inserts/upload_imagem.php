<?php 

session_start();

include_once("../../model/conection/conexao.php");

if(isset($_POST['Salvarimagem'])){
  
    $user = $_POST['fk_user'];

    $nome_imagem = $_FILES['imagem']['name'];

   $insert_user = $conectar->prepare("INSERT INTO historico_imagem (fk_user, nome_imagem, data_envio) VALUES (:user, :imagem, NOW())");
   $insert_user->bindParam(':user', $user, PDO::PARAM_STR_CHAR);
   $insert_user->bindParam(':imagem', $nome_imagem, PDO::PARAM_STR_CHAR);

   $insert_user->execute();

   $update_user = $conectar->prepare("UPDATE user SET imagem_perfil = :imagem WHERE id = :user");
   $update_user->bindParam(':user', $user, PDO::PARAM_STR_CHAR);
   $update_user->bindParam(':imagem', $nome_imagem, PDO::PARAM_STR_CHAR);

   $update_user->execute();

   $_UP['pasta'] = "../../view/asset/image_user/$user/";
   mkdir($_UP['pasta'], 0777);

if(move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'].$nome_imagem)){
       $_SESSION['imagem_enviada'] = "<div class='alert alert-success'>
        Imagem de perfil adicionada com sucesso
       </div>";
       header("Location: ../../view/user/colocar_imagem_perfil.php?id_user=$user");
} 

}