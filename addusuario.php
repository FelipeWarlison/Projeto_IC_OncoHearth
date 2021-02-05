<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Projeto Onco Heart</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap-grid.min.css">
    <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="css\master.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/signup.css" rel="stylesheet">
    
    <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>

 
  </head>
  <body>

    <div class="container">

    <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
       <div class="container clearfix width-full text-center">
            <img src="images/oncohearthpr.png" alt="">
            <a class="header-logo"  aria-label="Homepage" >
          </a>
       </div>
    </div>

    </div>

      <form class="form-signin" method="POST" action="includes\cadastro.usuario.php">
        <img src="">
        <h2 class="form-signin-heading">Cadastro de Usuário</h2>
        <label for="inputEmail" class="sr-only">Nome</label>
        <input type="text" name="uid" id="username" aria-describedby="emailHelp" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputE-mail" class="sr-only">Email</label>
        <input type="email" name="email" id="useremail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="psw" id="password" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-danger btn-block" name="cadastro-button" type="submit">CADASTRAR</button>
        <div class="text-center">
          <a href="index.php"><br>Já tem cadastro? Faça o Login</a>
        </div> 
      </form>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>




