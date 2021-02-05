<?php
if (isset($_POST["add-questionario-submit"])) {
  require "..\database\db.dashboard.php";

  if(isset($_GET['paciente'])){
    $pid = $_GET['paciente'];}

  $tipoquestionario = $_POST['questionario'];

  if($tipoquestionario == 1){
    $data1 = $_POST['data1'];
    $idade1 = $_POST['idade1'];
    $essbr1 = $_POST['essbr1'];
    $essbr2 = $_POST['essbr2'];
    $essbr3 = $_POST['essbr3'];
    $essbr4 = $_POST['essbr4'];
    $essbr5 = $_POST['essbr5'];
    $essbr6 = $_POST['essbr6'];
    $essbr7 = $_POST['essbr7'];
    $essbr8 = $_POST['essbr8'];

    // $pid = 1;
    if(empty($data1) || empty($idade1) || $essbr1 == 5 || $essbr2 == 5 || $essbr3 == 5 || $essbr4 == 5 || $essbr5 == 5 || $essbr6 == 5 || $essbr7 == 5 || $essbr8 == 5){
        header("Location: ../questionario.php?error=emptyfields");
        exit();
      } else{
        $sql = "INSERT INTO questionarios (pid, tipo, data, idade, essbr1, essbr2, essbr3, essbr4, essbr5, essbr6, essbr7, essbr8) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../questionario.php?error=sqlerror");
          exit();
        } else {
          mysqli_stmt_bind_param($stmt,"ssssssssssss", $pid,$tipoquestionario,$data1,$idade1,$essbr1,$essbr2,$essbr3,$essbr4,$essbr5,$essbr6,$essbr7,$essbr8);
          mysqli_stmt_execute($stmt);
            header("Location: ../dashboard.php?error=NoS");
            exit();
          }
      }
    }

    else if($tipoquestionario == 2){

      $visita2 = $_POST['visita2'];
      $data2 = $_POST['data2'];
      $nasc2 = $_POST['nasc2'];
      $ectoscopia = implode(", ", $_POST['ectoscopia']);
      $inspTorax = $_POST['inspTorax'];
      $ictuscordis1 = $_POST['ictuscordis1'];
      $pulsosA = $_POST['pulsosA'];
      $pulsosP = $_POST['pulsosP'];
      $ictuscordis2 = $_POST['ictuscordis2'];
      $fc = $_POST['fc'];
      $SO2 = $_POST['SO2'];
      $rCardiaco = $_POST['rCardiaco'];
      $bulhas = implode(", ", $_POST['bulhas']);
      $sopro1 = implode(", ", $_POST['sopro1']);
      $foco = $_POST['foco'];
      $irradiacao = $_POST['irradiacao'];
      $intensidade = $_POST['intensidade'];
      $sopros = implode(", ", $_POST['sopros']);
      $soproArteria = implode(", ", $_POST['soproArteria']);
      $auscultaP = implode(", ", $_POST['auscultaP']);
      $visc = $_POST['visc'];

      if (empty($foco)) { $foco = "-";}
      if (empty($irradiacao)) { $irradiacao = "-";}
      if (empty($intensidade)) { $intensidade = "-";}
      if (empty($sopros)) { $sopros = "-";}
      if (empty($soproArteria)) { $soproArteria = "-";}

       // || empty($data2) || empty($nasc2) || empty($ectoscopia) || empty($inspTorax) || empty($ictuscordis1) || empty($pulsosA) || empty($pulsosP) || empty($ictuscordis2) || empty($fc) || empty($SO2)
 // || empty($bulhas) || empty($sopro1) || empty($foco) || empty($irradiacao) || empty($intensidade) || empty($sopros) || empty($soproArteria)|| empty($auscultaP) || empty($visc)
      // $pid = 2;

      if(empty($visita2)){
        header("Location: ../questionario.php?#error=emptyfields");
        exit();
      } elseif (empty($rCardiaco)) {
          header("Location: ../questionario.php?#error=emptyfields");
          exit();
        } else{
          $sql = "INSERT INTO questionarios (visita, data, nasc, ectoscopia, inspTorax, ictuscordis1, pulsosA, pulsosP, ictuscordis2, fc, SO2, rCardiaco, bulhas, sopro1, foco, irradiacao, intensidade, sopros, soproArteria, auscultaP, visc, tipo, pid) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../questionario.php?#error=sqlerror");
            exit();
          } else {
            mysqli_stmt_bind_param($stmt,"issssssssssssssssssssss", $visita2, $data2, $nasc2, $ectoscopia, $inspTorax, $ictuscordis1, $pulsosA, $pulsosP, $ictuscordis2, $fc, $SO2, $rCardiaco, $bulhas, $sopro1, $foco, $irradiacao, $intensidade, $sopros, $soproArteria, $auscultaP, $visc, $tipoquestionario, $pid);
            mysqli_stmt_execute($stmt);
            header("Location: ../dashboard.php?error=NoS");
            }
        }
      }
      else if($tipoquestionario == 3){
        $visita3 = $_POST['visita3'];
        $data3 = $_POST['data3'];
        $grupoRisco = $_POST['grupoRisco'];
        $idade3 = $_POST['idade3'];
        $peso3 = $_POST['peso3'];
        $estatura3 = $_POST['estatura3'];
        $circAbd = $_POST['circAbd'];
        $gordCorp = $_POST['gordCorp'];
        $muscEsq = $_POST['muscEsq'];
        $matabolismo = $_POST['matabolismo'];
        $idadeC = $_POST['idadeC'];
        $gordVisc = $_POST['gordVisc'];
        $pas1 = $_POST['pas1'];
        $pad1 = $_POST['pad1'];
        $fc1 = $_POST['fc1'];
        $pas2 = $_POST['pas2'];
        $pad2 = $_POST['pad2'];
        $fc2 = $_POST['fc2'];
        $pas3 = $_POST['pas3'];
        $pad3 = $_POST['pad3'];
        $fc3 = $_POST['fc3'];
        $bracoDom = $_POST['bracoDom'];
        $m1d = $_POST['m1d'];
        $m2d = $_POST['m2d'];
        $m1e = $_POST['m1e'];
        $m2e = $_POST['m2e'];
        $ecgR = $_POST['ecgR'];
        $ecg10 = $_POST['ecg10'];
        $eco = $_POST['eco'];
        $holter = $_POST['holter'];
        $pasB = $_POST['pasB'];
        $padB = $_POST['padB'];
        $fcB = $_POST['fcB'];
        $pas30 = $_POST['pas30'];
        $pad30 = $_POST['pad30'];
        $fc30 = $_POST['fc30'];
        $pas60 = $_POST['pas60'];
        $pad60 = $_POST['pad60'];
        $fc60 = $_POST['fc60'];
        $pas120 = $_POST['pas120'];
        $pad120 = $_POST['pad120'];
        $fc120 = $_POST['fc120'];
        $medicamentos = $_POST['medicamentos'];
        $resultados = $_POST['resultados'];
        $dataCol = $_POST['dataCol'];

        // $pid = 3;

        if(empty($visita3)){
          header("Location: ../questionario.php?error=emptyfields");
          exit();
        } elseif (empty($data3)) {
            header("Location: ../questionario.php?error=emptyfields");
            exit();
          } else{
            $sql = "INSERT INTO questionarios (visita, data, grupoRisco, idade, peso3, estatura3, circAbd, gordCorp, muscEsq, matabolismo, idadeC, gordVisc, pas1, pad1, fc1, pas2, pad2, fc2, pas3, pad3, fc3, bracoDom, m1d, m2d, m1e, m2e, ecgR, ecg10, eco, holter, pasB, padB, fcB, pas30, pad30, fc30, pas60, pad60, fc60, pas120, pad120, fc120, medicamentos, resultados, dataCol, tipo, pid) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
              header("Location: ../questionario.php?error=sqlerror");
              exit();
            } else {
              mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssssssssssssssssssssssssss", $visita3, $data3, $grupoRisco, $idade3, $peso3, $estatura3, $circAbd, $gordCorp, $muscEsq, $matabolismo, $idadeC, $gordVisc, $pas1, $pad1, $fc1, $pas2, $pad2, $fc2, $pas3, $pad3, $fc3, $bracoDom, $m1d, $m2d, $m1e, $m2e, $ecgR, $ecg10, $eco, $holter, $pasB, $padB, $fcB, $pas30, $pad30, $fc30, $pas60, $pad60, $fc60, $pas120, $pad120, $fc120, $medicamentos, $resultados, $dataCol, $tipoquestionario, $pid);
              mysqli_stmt_execute($stmt);
              header("Location: ../dashboard.php?error=NoS");
              }
          }

      }
      elseif ($tipoquestionario == 4) {
        $endereco = $_POST['endereco'];
        $data4 = $_POST['data4'];
        $telefone = $_POST['telefone'];
        $nascimento4 = $_POST['nascimento4'];
        $meio = $_POST['meio'];
        $estCivil = $_POST['estCivil'];
        $renda = $_POST['renda'];
        $cor = $_POST['cor'];
        $grau = $_POST['grau'];
        $fuma = $_POST['fuma'];
        $fuma1 = $_POST['fuma1'];
        $fuma2 = $_POST['fuma2'];
        $fuma3 = $_POST['fuma3'];
        $fuma4 = $_POST['fuma4'];
        $bebe = $_POST['bebe'];
        $bebe1 = $_POST['bebe1'];
        $bebe2 = $_POST['bebe2'];
        $hipertensa = $_POST['hipertensa'];
        $diabetica = $_POST['diabetica'];
        $colesterol = $_POST['colesterol'];
        $arritmia = $_POST['arritmia'];
        $coracao = $_POST['coracao'];
        $cirurgia = $_POST['cirurgia'];
        $avc = $_POST['avc'];
        $paisCoracao = $_POST['paisCoracao'];
        $paisAvc = $_POST['paisAvc'];
        $mPrimeira = $_POST['mPrimeira'];
        $mUltima = $_POST['mUltima'];
        $anticon = $_POST['anticon'];
        $gestacoes = $_POST['gestacoes'];
        $nascidosV = $_POST['nascidosV'];
        $nascidosM = $_POST['nascidosM'];
        $partoP = $_POST['partoP'];
        $partoN = $_POST['partoN'];
        $partoC = $_POST['partoC'];
        $aborto = $_POST['aborto'];

        if(empty($fuma1)){$fuma1 = "-";}
        if(empty($fuma2)){$fuma2 = "-";}
        if(empty($fuma3)){$fuma3 = "-";}
        if(empty($fuma4)){$fuma4 = "-";}
        if(empty($bebe1)){$bebe1 = "-";}
        if(empty($bebe2)){$bebe2 = "-";}

        if (empty($endereco) || empty($data4) || empty($telefone) ||
        empty($nascimento4) || empty($meio) || empty($estCivil) ||
        empty($renda) || empty($cor) || empty($grau) ||
        empty($fuma) || empty($bebe) || empty($hipertensa) ||
        empty($diabetica) || empty($colesterol) || empty($arritmia) ||
        empty($coracao) || empty($cirurgia) || empty($avc) ||
        empty($paisCoracao) || empty($paisAvc) || empty($mPrimeira) ||
        empty($mUltima) || empty($anticon) || empty($gestacoes)||
        empty($nascidosV) || empty($nascidosM) || empty($partoP)||
        empty($partoN) || empty($partoC) || empty($aborto)) {
            header("Location: ../questionario.php?error=emptyfields");
            exit();
          } else{
            $sql = "INSERT INTO questionarios (endereco, data, telefone, nasc, meio, estCivil, renda, cor, grau, fuma, fuma1, fuma2, fuma3, fuma4, bebe, bebe1, bebe2, hipertensa, diabetica, colesterol, arritmia, coracao, cirurgia, avc, paisCoracao, paisAvc, mPrimeira, mUltima, anticon, gestacoes, nascidosV, nascidosM, partoP, partoN, partoC, aborto, tipo, pid) VALUES
            (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
              header("Location: ../questionario.php?error=sqlerror");
              exit();
            } else {
              mysqli_stmt_bind_param($stmt,"ssssssssssssssssssssssssssssssssssssss", $endereco, $data4, $telefone, $nascimento4, $meio, $estCivil, $renda, $cor, $grau, $fuma, $fuma1, $fuma2, $fuma3, $fuma4, $bebe, $bebe1, $bebe2, $hipertensa, $diabetica, $colesterol, $arritmia, $coracao, $cirurgia, $avc, $paisCoracao, $paisAvc, $mPrimeira, $mUltima, $anticon, $gestacoes, $nascidosV, $nascidosM, $partoP, $partoN, $partoC, $aborto, $tipoquestionario, $pid);
              mysqli_stmt_execute($stmt);
              header("Location: ../dashboard.php?error=NoS");
              }
          }
      } elseif($tipoquestionario == 5){
        $data5 = $_POST['data5'];
        $idade5 = $_POST['idade5'];
        $tovr1 = $_POST['tovr1'];
        $tovr2 = $_POST['tovr2'];
        $tovr3 = $_POST['tovr3'];
        $tovr4 = $_POST['tovr4'];
        $tovr5 = $_POST['tovr5'];
        $tovr6 = $_POST['tovr6'];
        $tovr7 = $_POST['tovr7'];
        $tovr8 = $_POST['tovr8'];
        $tovr9 = $_POST['tovr9'];
        $tovr10 = $_POST['tovr10'];

        // $pid = 5;
        if(empty($data5) || empty($idade5) || empty($tovr1) || empty($tovr2) || empty($tovr3) || empty($tovr4) || empty($tovr5) || empty($tovr6) || empty($tovr7) || empty($tovr8) || empty($tovr9) || empty($tovr10)){
            header("Location: ../questionario.php?error=emptyfields");
            exit();
          } else{
            $sql = "INSERT INTO questionarios (pid, tipo, data, idade, tovr1, tovr2, tovr3, tovr4, tovr5, tovr6, tovr7, tovr8, tovr9, tovr10) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
              header("Location: ../questionario.php?error=sqlerror");
              exit();
            } else {
              mysqli_stmt_bind_param($stmt,"ssssssssssssss", $pid,$tipoquestionario,$data5,$idade5, $tovr1, $tovr2, $tovr3, $tovr4, $tovr5, $tovr6, $tovr7, $tovr8, $tovr9, $tovr10);
              mysqli_stmt_execute($stmt);
              header("Location: ../dashboard.php?error=NoS");
                exit();
              }
          }
        } elseif($tipoquestionario == 6){
          $data6 = $_POST['data6'];
          $idade6 = $_POST['idade6'];
          $whoqol1 = $_POST['whoqol1'];
          $whoqol2 = $_POST['whoqol2'];
          $whoqol3 = $_POST['whoqol3'];
          $whoqol4 = $_POST['whoqol4'];
          $whoqol5 = $_POST['whoqol5'];
          $whoqol6 = $_POST['whoqol6'];
          $whoqol7 = $_POST['whoqol7'];
          $whoqol8 = $_POST['whoqol8'];
          $whoqol9 = $_POST['whoqol9'];
          $whoqol10 = $_POST['whoqol10'];
          $whoqol11 = $_POST['whoqol11'];
          $whoqol12 = $_POST['whoqol12'];
          $whoqol13 = $_POST['whoqol13'];
          $whoqol14 = $_POST['whoqol14'];
          $whoqol15 = $_POST['whoqol15'];
          $whoqol16 = $_POST['whoqol16'];
          $whoqol17 = $_POST['whoqol17'];
          $whoqol18 = $_POST['whoqol18'];
          $whoqol19 = $_POST['whoqol19'];
          $whoqol20 = $_POST['whoqol20'];
          $whoqol21 = $_POST['whoqol21'];
          $whoqol22 = $_POST['whoqol22'];
          $whoqol23 = $_POST['whoqol23'];
          $whoqol24 = $_POST['whoqol24'];
          $whoqol25 = $_POST['whoqol25'];
          $whoqol26 = $_POST['whoqol26'];
          $ajuda = $_POST['ajuda'];
          $tempo = $_POST['tempo'];
          $comentario = $_POST['comentario'];

          if(empty($comentario)){$comentario = "-";}

          // $pid = 6;
          if(empty($data6) || empty($idade6) || empty($whoqol1) ||
          empty($whoqol2) || empty($whoqol3) || empty($whoqol4) ||
          empty($whoqol5) || empty($whoqol6) || empty($whoqol7) ||
          empty($whoqol8) || empty($whoqol9) || empty($whoqol10) ||
          empty($whoqol11) || empty($whoqol12) || empty($whoqol13) ||
          empty($whoqol14) || empty($whoqol15) || empty($whoqol16) ||
          empty($whoqol17) || empty($whoqol18) || empty($whoqol19) ||
          empty($whoqol20) || empty($whoqol21) || empty($whoqol22) ||
          empty($whoqol23) || empty($whoqol24) || empty($whoqol25) ||
          empty($whoqol26) || empty($ajuda) || empty($tempo)){
              header("Location: ../questionario.php?error=emptyfields");
              exit();
            } else{
              $sql = "INSERT INTO questionarios (pid, tipo, data, idade, whoqol1, whoqol2, whoqol3, whoqol4, whoqol5, whoqol6, whoqol7, whoqol8, whoqol9, whoqol10, whoqol11, whoqol12, whoqol13, whoqol14, whoqol15, whoqol16, whoqol17, whoqol18, whoqol19, whoqol20, whoqol21, whoqol22, whoqol23, whoqol24, whoqol25, whoqol26, ajuda, tempo, comentario) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../questionario.php?error=sqlerror");
                exit();
              } else {
                mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssssssssssss", $pid,$tipoquestionario,$data6,$idade6, $whoqol1, $whoqol2, $whoqol3, $whoqol4, $whoqol5, $whoqol6, $whoqol7, $whoqol8, $whoqol9, $whoqol10, $whoqol11, $whoqol12, $whoqol13, $whoqol14, $whoqol15, $whoqol16, $whoqol17, $whoqol18, $whoqol19, $whoqol20, $whoqol21, $whoqol22, $whoqol23, $whoqol24, $whoqol25, $whoqol26, $ajuda, $tempo, $comentario);
                mysqli_stmt_execute($stmt);
                header("Location: ../dashboard.php?error=NoS");
                  exit();
                }
            }
          }
}
 ?>
