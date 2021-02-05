
    <?php
      include_once("templates\header.php");
      include_once("includes/reg.inc.php");

      $aux = mysqli_fetch_assoc($result2);
      $pessoa = $aux['nome'];
      $pid = $aux['pid'];
    ?>
    <div class="container">
      <br>
      <h2 class="text-center">Paciente: <?php echo $pessoa;?></h2>
      <br>
      <div class="jumbotron dasboard-panel">
        <div class="btn-group">
          <a href="questionario.php?paciente=<?php echo $paciente;?>" type="button" class="btn btn-outline-success my-2 my-sm-0"><i class="fa fa-sticky-note" aria-hidden="true"></i> Adicionar questionário</a>
          <button type="button" name="button" data-toggle="modal" data-target="#modalEditSite" class="btn btn-outline-success my-2 my-sm-0"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
          <button type="button" name="button" data-toggle="modal" data-target="#modalDeleteSite" class="btn btn-outline-danger my-2 my-sm-0"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
        </div>
        <br>
        <br>
        <div class="dashboard-table">
          <table class="table table-hover table-striped table-responsive-sm">
            <thead>
              <tr>
                <th><h5>QUESTIONÁRIOS</h5></th>
                <th><h5>DATA</h5></th>
                <th><h5>AÇÕES</h5></th>
              </tr>
            </thead>
            <?php while ($linha = mysqli_fetch_assoc($result1)): ?>
            <tr>
              <td>
                <a href="respostas.php?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>">
                  <?php
                    if($linha['tipo'] == 1){echo "ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)";}
                    elseif ($linha['tipo'] == 2){echo "FICHA DA CONSULTA CARDIOLÓGICA";}
                    elseif ($linha['tipo'] == 3){echo "FICHA DE INVESTIGAÇÃO CLÍNICA";}
                    elseif ($linha['tipo'] == 4){echo "QUESTIONÁRIO DE INFORMAÇÕES SOCIODEMOGRÁFICAS E DE SAÚDE";}
                    elseif ($linha['tipo'] == 5){echo "TESTE DE ORIENTAÇÃO DA VIDA (TOV-R)";}
                    elseif ($linha['tipo'] == 6){echo "THE WORLD HEALTH ORGANIZATION QUALITY OF LIFE (WHOQOL-BREF)";}
                  ?>
                </a>
              </td>
              <td><?php $linha['data'] = strtotime($linha['data']); echo date('d/m/Y', $linha['data']);?></td>
              <td>
                <div class="btn-group">
                  <a href="edit.php?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>" type="button" class="btn btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                  <a onclick = "return confirm('Tem certeza que deseja excluir?')" href="includes\deletequestionario.inc.php?questId=<?php echo $linha['questId']?>&pid=<?php echo $linha['pid']?>" type="button" class="btn btn-outline-danger" ><i class="fa fa-trash-o" ></i> Apagar</a>
                  <a href="gerar_planilha?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>" type="button" class="btn btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Gerar Excel
                  <?php
                    if($linha['tipo'] == 1){}
                    elseif ($linha['tipo'] == 2){}
                    elseif ($linha['tipo'] == 3){}
                    elseif ($linha['tipo'] == 4){}
                    elseif ($linha['tipo'] == 5){}
                    elseif ($linha['tipo'] == 6){}
                  ?>
                  </a>
                </div>
              </td>
            </tr>
          <?php endwhile; ?>
        </div>
      </div>
    </div>

    <!-- Modal 1 -->
      <div class="modal fade" id="modalEditSite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar nome do paciente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="includes\editpaciente.inc.php?paciente=<?php echo $paciente?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label for="nomePaciente">Nome do Paciente</label>
                  <input value="<?php echo $pessoa?>" type="text" name="Pnome" class="form-control" id="nomePaciente" placeholder="Insira o nome completo...">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="edit-pessoas-submit" class="btn btn-primary">Editar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal 2 -->
        <div class="modal fade" id="modalDeleteSite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar um paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="form-group" action="includes\deletepaciente.inc.php?paciente=<?php echo $paciente?>" method="post">
                <div class="modal-body">
                    <p>Tem certeza que deseja deletar o(a) paciente <b><?php echo $pessoa?></b>? Esta ação é irreversível e todos os questionários associados ao(a) paciente serão deletados.</p>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="delete-pessoas-submit" class="btn btn-danger">Deletar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
<!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
  
        