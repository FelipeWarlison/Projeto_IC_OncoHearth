<?php
  $servername = "localhost";
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "sistema_questionarios";

  $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if(!$conn){
    die("Falha de conexão: ".mysqli_connect_error());
  }
?>
