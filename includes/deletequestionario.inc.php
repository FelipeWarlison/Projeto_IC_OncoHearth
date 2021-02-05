<?php
  if (isset($_GET['questId']) && isset($_GET['pid'])) {

    require "..\database\db.dashboard.php";

    $questId = $_GET['questId'];
    $paciente = $_GET['pid'];

          $sql = "DELETE FROM questionarios WHERE questId = ?;";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../registros.php?paciente=$paciente&#error=sqlerror");
            exit();
          } else {
            mysqli_stmt_bind_param($stmt,"i",$questId);
            mysqli_stmt_execute($stmt);
            header("Location: ../registros.php?paciente=$paciente&delete=sucesso");
        }

  } else {
    header("Location: ../dashboard.php");
    exit();
  }

 ?>
