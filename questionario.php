
    <!-- Navbar -->
    <?php include_once("templates\header.php");
    if(isset($_GET['paciente'])){
      $paciente = $_GET['paciente'];}
    ?>

    <div class="container">
      <h1 class="questionario-h1">Adicionar um Questionário</h1>
      <div class="">
        <form class="form-group" action="includes\addquestionario.inc.php?paciente=<?php echo $paciente?>" method="post" onsubmit="return checkForEmpty()">
          <fieldset class="">
            <select class="custom-select" name="questionario" id="questionarios">
              <option selected value="0">Escolha um tipo de questionário</option>
              <option value="1">ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)</option>
              <option value="2">FICHA DE CONSULTA CARDIOLÓGICA</option>
              <option value="3">FICHA DE INVESTIGAÇÃO</option>
              <option value="4">QUESTIONÁRIO DE INFORMAÇÕES SOCIODEMOGRÁFICAS E DE SAÚDE</option>
              <option value="5">TESTE DE ORIENTAÇÃO DE VIDA (TOV-R)</option>
              <option value="6">THE WORLD HEALTH ORGANIZATION QUALITY OF LIFE (WHOQOL-BREF)</option>
            </select>
            <br>
            <br>
          </fieldset>
          <fieldset id="a" style="display:none" >
            <?php include_once("templates/questionario1.php");?>
          </fieldset>
          <fieldset id="b" style="display:none">
            <?php include_once("templates/questionario2.php");?>
          </fieldset>
          <fieldset id="c" style="display:none">
            <?php include_once("templates/questionario3.php");?>
          </fieldset>
          <fieldset id="d" style="display:none">
            <?php include_once("templates/questionario4.php");?>
          </fieldset>
          <fieldset id="e" style="display:none">
            <?php include_once("templates/questionario5.php");?>
          </fieldset>
          <fieldset id="f" style="display:none">
            <?php include_once("templates/questionario6.php");?>
          </fieldset>


        </form>

      </div>
    </div>

    <!-- Mostra ou esconde questionários -->
    <script src="js/mostra-esconde-quest.js"></script>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
  
