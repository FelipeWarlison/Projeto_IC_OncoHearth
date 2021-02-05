<?php

require "database\db.dashboard.php";

if(isset($_GET['paciente'])){
  $paciente = $_GET['paciente'];
  $sql = "SELECT * FROM questionarios WHERE pid=? ORDER BY data DESC;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: registros.php?#error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt,"i", $paciente);
    mysqli_stmt_execute($stmt);
    $result1 = mysqli_stmt_get_result($stmt);
  }
  $sql = "SELECT * FROM pessoas WHERE pid=?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: registros.php?#error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt,"i", $paciente);
    mysqli_stmt_execute($stmt);
    $result2 = mysqli_stmt_get_result($stmt);
  }





}

?>
