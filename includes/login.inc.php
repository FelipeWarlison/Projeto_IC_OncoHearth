<?php
  if(isset($_POST['login-button'])){
    //Incluindo a conexão com banco de dados
    require "dbh.inc.php";

    $username = mysqli_real_escape_string($conn, $_POST['uid']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);
    
    //O campo usuário e senha preenchido entra no if para validar
    if(empty($username) || empty($password)){
      header("Location: ../index.php?error=emptyfields&email=".$email);
      exit();

    } else{
      //Buscar na tabela USERS o usuário que corresponde com os dados digitado no formulário
      $sql = "SELECT * FROM users WHERE uidUsers=?;";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../index.php?error=sqlerror");
        exit();
      } else{
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
          $pwdCheck = password_verify($password, $row['pswUsers']);
         
        }if($pwdCheck == True){
            session_start();
            $_SESSION['userId'] = $row['idUsers'];
            $_SESSION['userUid'] = $row['uidUsers'];
            $_SESSION['usuarioNiveisAcessoid'] = $row['niveis_acesso_id'];
            //header("Location: ../dashboard.php");
              if ($_SESSION['usuarioNiveisAcessoid'] == "1"){ 
                  header("Location: ../dashboard.php");
              }else{
                  header("Location: ../dashboard(original).php");
              }      
          } else{
              header("Location: ../index.php");
          }
      }   
    }
  
  } else{
    header("Location: ../index.php");
  }

 ?>
