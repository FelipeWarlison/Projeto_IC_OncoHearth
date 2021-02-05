<?php
  if (isset($_POST["edit-pessoas-submit"]) && isset($_GET['paciente'])) {
    require "..\database\db.dashboard.php";

    $paciente = $_GET['paciente'];
    $nomePaciente = $_POST['Pnome'];

    if(empty($nomePaciente)){
      header("Location: ../registros.php?paciente=$paciente&error=emptyfield");
    } else {
      $sql = "SELECT nome from pessoas where nome=?";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../registros.php?paciente=$paciente&error=sqlerror");
        exit();
      } else {
        mysqli_stmt_bind_param($stmt,"s", $nomePaciente);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0){
          header("Location: ../registros.php?paciente=$paciente&error=nomeexiste");
          exit();
        } else {
          $sql = "UPDATE pessoas SET nome = ? WHERE pid = ?;";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../registros.php?paciente=$paciente&error=sqlerror");
            exit();
          } else {
            mysqli_stmt_bind_param($stmt,"si", $nomePaciente,$paciente);
            mysqli_stmt_execute($stmt);
              header("Location: ../registros.php?paciente=$paciente&error=noEd");
              exit();
          }
        }
      }
    }
  } else {
    header("Location: ../registros.php?paciente=$paciente");
    exit();
  }

 ?>
