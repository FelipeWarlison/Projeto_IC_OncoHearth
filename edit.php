
    <div class="container">

        <?php
          include_once("templates\header.php");
          include_once("includes/resp.inc.php");

          $aux = mysqli_fetch_assoc($result2);
          $pessoa = $aux['nome'];

          $aux = mysqli_fetch_assoc($result1);
          $tipo = $aux['tipo'];
          $data = $aux['data'];
          $questId = $aux['questId'];
          $pid = $aux['pid'];

          if($tipo == 1):

            $idade = $aux['idade'];

            include_once("templates/Aquestionario1.php");
        ?>
      <?php
        elseif($tipo == 2):
          $visita2 = $aux['visita'];
          $nasc2 = $aux['nasc'];
          $inspTorax = $aux['inspTorax'];
          $pulsosA = $aux['pulsosA'];
          $pulsosP = $aux['pulsosP'];
          $ictuscordis2 = $aux['ictuscordis2'];
          $fc = $aux['fc'];
          $SO2 = $aux['SO2'];
          $foco = $aux['foco'];
          $irradiacao = $aux['irradiacao'];
          $intensidade = $aux['intensidade'];
          $visc = $aux['visc'];

          include_once("templates/Aquestionario2.php");
      ?>
          <?php
            elseif($tipo == 3):
              $visita3 = $aux['visita'];
              $grupoRisco = $aux['grupoRisco'];
              $idade3 = $aux['idade'];
              $peso3 = $aux['peso3'];
              $estatura3 = $aux['estatura3'];
              $circAbd = $aux['circAbd'];
              $gordCorp = $aux['gordCorp'];
              $muscEsq = $aux['muscEsq'];
              $matabolismo = $aux['matabolismo'];
              $idadeC = $aux['idadeC'];
              $gordVisc = $aux['gordVisc'];
              $pas1 = $aux['pas1'];
              $pad1 = $aux['pad1'];
              $fc1 = $aux['fc1'];
              $pas2 = $aux['pas2'];
              $pad2 = $aux['pad2'];
              $fc2 = $aux['fc2'];
              $pas3 = $aux['pas3'];
              $pad3 = $aux['pad3'];
              $fc3 = $aux['fc3'];
              $m1d = $aux['m1d'];
              $m2d = $aux['m2d'];
              $m1e = $aux['m1e'];
              $m2e = $aux['m2e'];
              $ecgR = $aux['ecgR'];
              $ecg10 = $aux['ecg10'];
              $eco = $aux['eco'];
              $holter = $aux['holter'];
              $pasB = $aux['pasB'];
              $padB = $aux['padB'];
              $fcB = $aux['fcB'];
              $pas30 = $aux['pas30'];
              $pad30 = $aux['pad30'];
              $fc30 = $aux['fc30'];
              $pas60 = $aux['pas60'];
              $pad60 = $aux['pad60'];
              $fc60 = $aux['fc60'];
              $pas120 = $aux['pas120'];
              $pad120 = $aux['pad120'];
              $fc120 = $aux['fc120'];
              $medicamentos = $aux['medicamentos'];
              $resultados = $aux['resultados'];
              $dataCol = $aux['dataCol'];

              include_once("templates/Aquestionario3.php");
          ?>
          <?php
            elseif($tipo == 4):
              $endereco = $aux['endereco'];
              $telefone = $aux['telefone'];
              $nascimento4 = $aux['nasc'];
              $fuma1 = $aux['fuma1'];
              $fuma2 = $aux['fuma2'];
              $fuma3 = $aux['fuma3'];
              $fuma4 = $aux['fuma4'];
              $bebe1 = $aux['bebe1'];
              $bebe2 = $aux['bebe2'];
              $mPrimeira = $aux['mPrimeira'];
              $mUltima = $aux['mUltima'];
              $anticon = $aux['anticon'];
              $gestacoes = $aux['gestacoes'];
              $nascidosV = $aux['nascidosV'];
              $nascidosM = $aux['nascidosM'];
              $partoP = $aux['partoP'];
              $partoN = $aux['partoN'];
              $partoC = $aux['partoC'];
              $aborto = $aux['aborto'];

              include_once("templates/Aquestionario4.php");
          ?>
              <?php
                  elseif($tipo == 5):

                    $idade5 = $aux['idade'];

                    include_once("templates/Aquestionario5.php");
              ?>
              <?php
                  elseif($tipo == 6):

                    $idade6 = $aux['idade'];
                    $ajuda = $aux['ajuda'];
                    $tempo = $aux['tempo'];
                    $comentario = $aux['comentario'];

                    include_once("templates/Aquestionario6.php");
              ?>


        <?php endif; ?>

    </div>



    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
  
  <?php include_once("footer.php");?>
