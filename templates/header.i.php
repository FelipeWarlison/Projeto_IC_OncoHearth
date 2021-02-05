
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img height="40" src="images/oncohearthp.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      </li>
    </ul>
  </div>
</nav>
<?php
if (isset($_GET['error'])):
  $error = $_GET['error'];
  if($error == 'emptyfields'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Campos vazios!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'wrong'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Credenciais incorretas!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif;
  endif;
  ?>
