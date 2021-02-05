<?php
  $servername = "localhost";
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "sistemalogin";

  $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if(!$conn){
    die("Falha de conexão: ".mysqli_connect_error());
  }
?>
