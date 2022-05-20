<?php 
session_start();
include_once("../../model/conection/conexao.php");
include("../user/function.php");
verifica_sessao();
date_default_timezone_set('America/Sao_Paulo');


if(isset($_POST['Criar'])){
 $nome_grupo = $_POST['nome_group'];
 $id_user = $_SESSION['usuarioID'];

 if($nome_grupo == ""){
    $_SESSION['campo'] = "<div class='alert alert-warning'>Preencha o campo nome do grupo</div>";
    header("Location: ../../view/grupos/criacao.php");
 }else{
    $insert_grupo = "INSERT INTO group_user(fk_user, nome_group, created, created_time) value(:user, :nome, NOW(), NOW())";
    $query = $conectar->prepare($insert_grupo);
    $query->bindParam(':user', $id_user);
    $query->bindParam(':nome', $nome_grupo);
    $query->execute();
    $ultimo_id = $conectar->lastInsertId();

    if($query->rowCount()){
         $select = $conectar->prepare("SELECT * FROM user WHERE id = '$id_user' LIMIT 1");
         $select->execute();
         $select_user = $select->fetch(PDO::FETCH_ASSOC);
         extract($select_user);
         
         $insert_integrante = "INSERT INTO integrante_grupo(fk_grupo, fk_user, nome_integrante, nivel, data_entrada) VALUES(:grupo, :user, :nome, 1, NOW())";
         $query_integrante = $conectar->prepare($insert_integrante);
         $query_integrante->bindParam(':grupo', $ultimo_id);
         $query_integrante->bindParam(':user', $id_user);
         $query_integrante->bindParam(':nome', $nome_usuario);
         $query_integrante->execute();

        $_SESSION['sucesso'] = "<div class='alert alert-success'>Grupo criado com sucesso</div>";
        header("Location: ../../view/grupos/criacao.php");
    }else{
        $_SESSION['erro'] = "<div class='alert alert-danger'>Erro ao criar o grupo, tente mais tarde</div>";
        header("Location: ../../view/grupos/criacao.php");
    }
 }

}