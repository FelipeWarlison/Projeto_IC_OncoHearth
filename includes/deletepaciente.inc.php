<?php
  if (isset($_POST["delete-pessoas-submit"]) && isset($_GET['paciente'])) {
    require "..\database\db.dashboard.php";

    $paciente = $_GET['paciente'];

          $sql = "DELETE FROM questionarios WHERE pid = ?;";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../registros.php?paciente=$paciente&#error=sqlerror");
            exit();
          } else {
            mysqli_stmt_bind_param($stmt,"i",$paciente);
            mysqli_stmt_execute($stmt);
            $sql1 = "DELETE FROM pessoas WHERE pid = ?;";
            $stmt1 = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt1,$sql1)){
              header("Location: ../registros.php?paciente=$paciente&#error=sqlerror");
              exit();
            } else {
              mysqli_stmt_bind_param($stmt1,"i",$paciente);
              mysqli_stmt_execute($stmt1);
              header("Location: ../dashboard.php?#delete=successo");
              exit();
          }
        }

  } else {
    header("Location: ../registros.php?paciente=$paciente");
    exit();
  }

 ?>
