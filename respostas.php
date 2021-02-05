
    <?php
      include_once("templates\header.php");
      include_once("includes/resp.inc.php");

      $aux = mysqli_fetch_assoc($result2);
      $pessoa = $aux['nome'];

      $aux = mysqli_fetch_assoc($result1);
      $tipo = $aux['tipo'];
      $data = $aux['data'];

      if($tipo == 1):

        $idade1 = $aux['idade'];
        $essbr1 = $aux['essbr1'];
        $essbr2 = $aux['essbr2'];
        $essbr3 = $aux['essbr3'];
        $essbr4 = $aux['essbr4'];
        $essbr5 = $aux['essbr5'];
        $essbr6 = $aux['essbr6'];
        $essbr7 = $aux['essbr7'];
        $essbr8 = $aux['essbr8'];

        include_once("templates/respostas1.php");

    ?>
    
  <?php
    elseif($tipo == 2):
      $visita2 = $aux['visita'];
      $nasc2 = $aux['nasc'];
      $ectoscopia = $aux['ectoscopia'];
      $inspTorax = $aux['inspTorax'];
      $ictuscordis1 = $aux['ictuscordis1'];
      $pulsosA = $aux['pulsosA'];
      $pulsosP = $aux['pulsosP'];
      $ictuscordis2 = $aux['ictuscordis2'];
      $fc = $aux['fc'];
      $SO2 = $aux['SO2'];
      $rCardiaco = $aux['rCardiaco'];
      $bulhas = $aux['bulhas'];
      $sopro1 = $aux['sopro1'];
      $foco = $aux['foco'];
      $irradiacao = $aux['irradiacao'];
      $intensidade = $aux['intensidade'];
      $sopros = $aux['sopros'];
      $soproArteria = $aux['soproArteria'];
      $auscultaP = $aux['auscultaP'];
      $visc = $aux['visc'];

      include_once("templates/respostas2.php");
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
          $bracoDom = $aux['bracoDom'];
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

          include_once("templates/respostas3.php");
      ?>
      <?php
        elseif($tipo == 4):
          $endereco = $aux['endereco'];
          $telefone = $aux['telefone'];
          $nascimento4 = $aux['nasc'];
          $meio = $aux['meio'];
          $estCivil = $aux['estCivil'];
          $renda = $aux['renda'];
          $cor = $aux['cor'];
          $grau = $aux['grau'];
          $fuma = $aux['fuma'];
          $fuma1 = $aux['fuma1'];
          $fuma2 = $aux['fuma2'];
          $fuma3 = $aux['fuma3'];
          $fuma4 = $aux['fuma4'];
          $bebe = $aux['bebe'];
          $bebe1 = $aux['bebe1'];
          $bebe2 = $aux['bebe2'];
          $hipertensa = $aux['hipertensa'];
          $diabetica = $aux['diabetica'];
          $colesterol = $aux['colesterol'];
          $arritmia = $aux['arritmia'];
          $coracao = $aux['coracao'];
          $cirurgia = $aux['cirurgia'];
          $avc = $aux['avc'];
          $paisCoracao = $aux['paisCoracao'];
          $paisAvc = $aux['paisAvc'];
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

          include_once("templates/respostas4.php");
      ?>
          <?php
              elseif($tipo == 5):

                $idade5 = $aux['idade'];
                $tovr1 = $aux['tovr1'];
                $tovr2 = $aux['tovr2'];
                $tovr3 = $aux['tovr3'];
                $tovr4 = $aux['tovr4'];
                $tovr5 = $aux['tovr5'];
                $tovr6 = $aux['tovr6'];
                $tovr7 = $aux['tovr7'];
                $tovr8 = $aux['tovr8'];
                $tovr9 = $aux['tovr9'];
                $tovr10 = $aux['tovr10'];

                include_once("templates/respostas5.php");
          ?>
          <?php
              elseif($tipo == 6):

                $idade6 = $aux['idade'];
                $whoqol1 = $aux['whoqol1'];
                $whoqol2 = $aux['whoqol2'];
                $whoqol3 = $aux['whoqol3'];
                $whoqol4 = $aux['whoqol4'];
                $whoqol5 = $aux['whoqol5'];
                $whoqol6 = $aux['whoqol6'];
                $whoqol7 = $aux['whoqol7'];
                $whoqol8 = $aux['whoqol8'];
                $whoqol9 = $aux['whoqol9'];
                $whoqol10 = $aux['whoqol10'];
                $whoqol11 = $aux['whoqol11'];
                $whoqol12 = $aux['whoqol12'];
                $whoqol13 = $aux['whoqol13'];
                $whoqol14 = $aux['whoqol14'];
                $whoqol15 = $aux['whoqol15'];
                $whoqol16 = $aux['whoqol16'];
                $whoqol17 = $aux['whoqol17'];
                $whoqol18 = $aux['whoqol18'];
                $whoqol19 = $aux['whoqol19'];
                $whoqol20 = $aux['whoqol20'];
                $whoqol21 = $aux['whoqol21'];
                $whoqol22 = $aux['whoqol22'];
                $whoqol23 = $aux['whoqol23'];
                $whoqol24 = $aux['whoqol24'];
                $whoqol25 = $aux['whoqol25'];
                $whoqol26 = $aux['whoqol26'];
                $ajuda = $aux['ajuda'];
                $tempo = $aux['tempo'];
                $comentario = $aux['comentario'];

                include_once("templates/respostas6.php");
          ?>


    <?php endif; ?>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
  <?php
    include_once("footer.php");
?>
