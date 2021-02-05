
  <!-- Navbar -->
  <link rel="stylesheet" href="css\master.css">
  <?php
    include_once("templates\header.php");
  ?>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <br>
          <img class="user-image"src="images/user.png" alt="">
          <div class="card-body card-user">
            <h5 class="card-title">Bem vindo!</h5>
            <p class="card-text"><?php echo $_SESSION['userUid']; ?></p>            
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-8">
        <div class="jumbotron dasboard-panel">
          <div class="search-bar-btn d-flex justify-content-between">
              <div class="row">
                <form action="includes\addpaciente.inc.php" method="post">
                    <div class="form-inline form-block">
                      <input type="text" name="Pnome" class="form-control" id="nomePaciente" placeholder="Adicionar um paciente">
                      <button type="submit" name="add-pessoas-submit" type="button" class="btn btn-outline-dark"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
                    </div>
                </form>
              </div>
              <div class="row">
                <form id="formBusca" method="post" action="buscaPacientes.php" class="form-inline form-block">
                  <input id="inputBusca" class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                  <button id="botaoBusca" class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>
          </div>
          <div class="dashboard-table" id="exibePacientes">
            <?php
              include_once("database/db.dashboard.php");
              $sql = "SELECT * FROM pessoas;";
              $result = mysqli_query($conn, $sql);
             ?>
            <table class="table table-hover table-striped table-responsive-sm">
              <thead>
                <tr>
                  <th>Pacientes</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <?php while ($linha = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td><?php echo $linha['nome']?></td>
                <td><a href="registros.php?paciente=<?php echo $linha['pid']?>" class="btn btn-danger" type="button" name="ver">Ver</a></td>
              </tr>
            <?php endwhile; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
    include_once("footer.php");
?>

