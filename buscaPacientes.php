  <?php

    $busca = $_POST['busca'];
    include_once("database/db.dashboard.php");
    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$busca%';";
    $result = mysqli_query($conn, $sql);
   ?>
   <table class="table table-hover table-striped table-responsive-sm">
    <thead>
      <tr>
        <th>Pessoas</th>
        <th>Ações</th>
      </tr>
    </thead>
    <?php while ($linha = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?php echo $linha['nome']?></td>
      <td><a href="registros.php?paciente=<?php echo $linha['pid']?>" class="btn btn-outline-dark" type="button" name="ver">Ver</a></td>
    </tr>
  <?php endwhile; ?>
  </table>
