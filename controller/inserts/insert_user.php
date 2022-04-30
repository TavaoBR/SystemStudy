<?php 

    session_start();
    include_once("../../model/conection/conexao.php");

    if(isset($_POST['Cadastro'])){
        
        $name = $_POST['nome_completo'];
        $user = $_POST['nome_usuario'];
        $senha_confere = $_POST['senha_usuario_confirma'];
        $senha = $_POST['senha_usuario'];
        $Senha = md5($senha);
        

        if($name == "" AND $user == "" AND $senha == "" AND  $senha_confere == ""){
            $_SESSION['preencha_campos'] = "<div class = 'alert alert-warning'>Preencha os Campos</div>";
            header("Location: ../../view/user/cadastro.php");
        }elseif($name == ""){
            $_SESSION['preencha_name'] = "<div class = 'alert alert-warning'>Preencha o Campo Nome Completo</div>";
            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senha;
            header("Location: ../../view/user/cadastro.php");
        }elseif($user == ""){
            $_SESSION['preencha_user'] = "<div class = 'alert alert-warning'>Preencha o Campo user</div>";
            $_SESSION['name'] = $name;
            $_SESSION['senha'] = $senha;
            header("Location: ../../view/user/cadastro.php");

        }elseif($senha == ""){
            $_SESSION['preencha_senha'] = "<div class = 'alert alert-warning'>Preencha o Campo Confirme senha </div>";
            $_SESSION['name'] = $name;
            $_SESSION['user'] = $user;
            header("Location: ../../view/user/cadastro.php");
        
        }elseif($senha_confere == ""){
            $_SESSION['preencha_senha'] = "<div class = 'alert alert-warning'>Preencha o Campo Senha</div>";
            $_SESSION['name'] = $name;
            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senha;
            header("Location: ../../view/user/cadastro.php");    

        }else{
        
          if($senha == $senha_confere){

            $verifica = "SELECT * FROM user WHERE nome_usuario = :nome_usuario AND nome_completo = :nome_completo";
            $query_verifica = $conectar->prepare($verifica);
            $query_verifica->bindParam(':nome_usuario', $user, PDO::PARAM_STR);
            $query_verifica->bindParam(':nome_completo', $name, PDO::PARAM_STR);
            $query_verifica->execute();
            
            $assoc_user = $query_verifica->fetch(PDO::FETCH_ASSOC);

            if(isset($assoc_user['nome_usuario']) OR isset($assoc_user['nome_completo'])){
                $_SESSION['usuario_cadastro'] = "<div class = 'alert alert-danger'>Usuario já Cadastrado</div>";
                header("Location: ../../view/user/cadastro.php");
            }else{

                $insert = "INSERT INTO user(nome_completo, nome_usuario, senha_usuario) VALUES (:nome_completo, :nome_usuario, :senha_usuario)";
                $insert_query = $conectar->prepare($insert);
                $insert_query->bindParam(':nome_completo', $name);
                $insert_query->bindParam(':nome_usuario', $user);
                $insert_query->bindParam(':senha_usuario', $Senha);
                $insert_query->execute();

                if($insert_query->rowCount()){
                    $_SESSION['sucesso'] = "<div class = 'alert alert-success'>Cadastrado com sucesso</div>";
                    header("Location: ../../view/user/cadastro.php");
                }else{
                    $_SESSION['error'] = "<div class = 'alert alert-danger'>Não foi possivel cadastrar</div>";
                    header("Location: ../../view/user/cadastro.php");
                }

            }

          }else{
            $_SESSION['senhas_nao_batem'] = "<div class='alert alert-danger'>As senhas não batem</div>"; 
            $_SESSION['name'] = $name;
            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senha;
            header("Location: ../../view/user/cadastro.php");
          }   
        
        }
    }