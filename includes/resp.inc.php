<?php
require "database\db.dashboard.php";

if(isset($_GET['Idq']) && isset($_GET['pid'])){
  $questId = $_GET['Idq'];
  $pid = $_GET['pid'];
  $sql = "SELECT * FROM questionarios WHERE questId=?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: registros.php?#error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt,"i", $questId);
    mysqli_stmt_execute($stmt);
    $result1 = mysqli_stmt_get_result($stmt);
  }
  $sql = "SELECT * FROM pessoas WHERE pid=?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: registros.php?#error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt,"i", $pid);
    mysqli_stmt_execute($stmt);
    $result2 = mysqli_stmt_get_result($stmt);
  }
}  
?>
