<?php
if(isset($_POST['cadastro-button'])){
include_once("dbh.inc.php");

$username = $_POST['uid'];
$useremail = $_POST['email'];
$password = password_hash( $_POST['psw'], PASSWORD_DEFAULT );

$result_usuario = "INSERT INTO users(uidUsers, emailUsers, pswUsers) VALUES ('$username','$useremail', '$password')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projetoy/projeto_ic/public_html/index.php'>
                    <script type=\"text/javascript\">
                        alert(\"Usuario cadastrado com Sucesso.\");
                    </script>
                ";    
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projetoy/projeto_ic/public_html/addusuario.php'>
                    <script type=\"text/javascript\">
                        alert(\"O Usuario não foi cadastrado com Sucesso.\");
                    </script>
                ";    
            }

}
?>


