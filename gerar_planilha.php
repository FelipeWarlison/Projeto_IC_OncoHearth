

<!DOCTYPE html>
<html lang="pt" dir="ltr"">

	<head>
		 <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Contato</title>
	<head>
	<body>
       <?php

       // Definimos o nome do arquivo que será exportado
		$arquivo = 'msgcontatos.xls';

      include_once("includes/resp.inc.php");

      $aux1 = mysqli_fetch_assoc($result2);
      $pessoa = $aux1['nome'];

      $aux = mysqli_fetch_assoc($result1);
      $tipo = $aux['tipo'];
      $data = date('d/m/Y', strtotime($aux["data"]));

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

        // Criamos uma tabela HTML com o formato da planilha
    $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="6">LAUDO DA ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)</tr>';
    $html .= '</tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DADOS PESSOAIS:<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">Paciente: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">Idade: '.$aux["idade"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">Data do Exame: '.$aux["data"].'<\th>
              </tr>';

     $html .= '<tr>
               <th colspan="4" scope="row">Probabilidade</th>
               <th colspan="2" scope="row">Conclusão</th>
              </tr>';
    $html .= '<tr>
                <th colspan="4" scope="row">Sentando e lendo</th>
                    <td colspan="2">'.$aux["essbr1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Assistindo TV</th>
                    <td colspan="2">'.$aux["essbr2"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Sentado, quieto, em um lugar público por exemplo: (teatro, reunião, palestra, etc...)</th>
                <td colspan="2">'.$aux["essbr3"].'</td>
                </tr>';
    $html .= '<tr>
                <th colspan="4" align=left scope="row">Andando de carro por uma hora sem parar, como passageiro</th>
                <td colspan="2">'.$aux["essbr4"].'</td>
              </tr>';
    $html .= '<tr>
                <th colspan="4" align=left scope="row">Ao deitar-se à tarde para descansar, quando possível</th>
                <td colspan="2">'.$aux["essbr5"].'</td>
              </tr>';
    $html .= '<tr>
                <th colspan="4" align=2 scope="row">Sentado conversando com alguém</th>
                <td colspan="2">'.$aux["essbr6"].'</td>
              </tr>';
    $html .= '<tr>
                <th colspan="4" align=left scope="row">Sentado quieto após o almoço sem bebida alcoólicas</th>
                <td colspan="2">'.$aux["essbr7"].'</td>
              </tr>';
    $html .= '<tr>
                <th colspan="4" align=left scope="row">Em um carro parado no trânsito por alguns minutos</th>
                <td colspan="2">'.$aux["essbr7"].'</td>
               </tr>';
    $html .= '</table>';
    // Configurações header para forçar o download
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );
     //Envia o conteúdo do arquivo
    echo $html;

    exit;
    
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

      $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="6">FICHA DE CONSULTA CARDIOLÓGICA</tr>';
    $html .= '</tr>';
    
    $html .= '<tr>
                   <th align=left colspan="6">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DATA DA CONSULTA: '.$aux["data"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">VISITA: '.$aux["visita"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DATA DE NASCIMENTO: '.$aux["nasc"].'<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="3" scope="row">ECTOSCOPIA</th>
                    <td colspan="3">'.$aux["ectoscopia"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left rowspan="2" colspan="3">INSPEÇÃO</th>
                <td colspan="3">Inspeção geral do tórax: <b>'.$aux["inspTorax"].'</b></td>
             </tr>
             <tr>
                <td colspan="3">Ictus cordis: <b>'.$aux["ictuscordis1"].'</b></td>
             </tr>';
    $html .= '<tr>
                <th align=left rowspan="3" colspan="3">PALPAÇÃO</th>
                <td colspan="3">Pulsos arteriais (Carótida/Aorta): <b>'.$aux["pulsosA"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Pulsos periféricos (Radial/Pedioso/Tibial posterior): <b>'.$aux["pulsosP"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Ictus cordis: <b>'.$aux["ictuscordis2"].'</b></td>
              </tr>';
    $html .= '<tr>
                <th align=left rowspan="2" colspan="3">AUSCULTA</th>
                <td colspan="3">FC: <b>'.$aux["fc"].'</b></td>
             </tr>
             <tr>
                <td colspan="3">SO₂: <b>'.$aux["SO2"].'</b></td>
             </tr>';
    $html .= '<tr>
                <th align=left colspan="3" scope="row">RITMO CARDÍACO</th>
                    <td colspan="3">'.$aux["rCardiaco"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="3" scope="row">BULHAS</th>
                    <td colspan="3">'.$aux["bulhas"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left rowspan="5" colspan="3">SOPROS: <b>('.$aux["sopro1"].')</b></th>
              </tr>
              <tr>
                <td colspan="3">foco: <b>'.$aux["foco"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Irradiação: <b>'.$aux["irradiacao"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Intensidade: <b>'.$aux["intensidade"].'</b></td>
              </tr>
              <tr>
                <td colspan="3"> <b>'.$aux["sopros"].'</b></td>
              </tr>
              <tr>
                <td colspan="3">Sopros em artérias: <b>'.$aux["soproArteria"].'</b></td>
              </tr>';
    $html .= '<tr>
                <th align=left rowspan="2" colspan="3">EXAME FÍSICO GERAL</th>
                <td colspan="3">Ausculta Pulmonar: <b>'.$aux["auscultaP"].'</b></td>
             </tr>
             <tr>
                <td colspan="3">Visceromegalias: <b>'.$aux["visc"].'</b></td>
             </tr>';

    $html .= '</table>';
    // Configurações header para forçar o download
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );
     //Envia o conteúdo do arquivo
    echo $html;

    exit;
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

      $html = '';
      $html .= '<table border="1">';

      $html .= '<tr>';
      $html .= '<th align=center colspan="6">RESULTADO: FICHA DE INVESTIGAÇÃO</tr>';
      $html .= '</tr>';

      $html .= '<tr>
                   <th align=left colspan="6">DADOS PESSOAIS:<\th>
              </tr>';
      $html .= '<tr>
                   <th align=left colspan="6">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
      $html .= '<tr>
                   <th align=left colspan="6">IDADE: '.$aux["idade"].'<\th>
              </tr>';
      $html .= '<tr>
                   <th align=left colspan="6">DATA DO EXAME: '.$aux["data"].'<\th>
              </tr>';
      $html .= '<tr>
                   <th align=left colspan="6">VISITA: '.$aux["visita"].'<\th>
              </tr>';
      $html .= '<tr>
                   <th align=center colspan="6">QUESTIONÁRIO<\th>
                </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Grupo de Risco</th>
                <td colspan="3">'.$aux["grupoRisco"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Peso</th>
                <td colspan="3" align=left>'.$aux["peso3"].'Kg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Estatura</th>
                <td colspan="3" align=left>'.$aux["estatura3"].'cm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Circunferência abdominal</th>
                <td colspan="3" align=left>'.$aux["circAbd"].'cm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Gordura corporal</th>
                <td align=left colspan="3">'.$aux["gordCorp"].'%</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Músculo esquelético</th>
                <td align=left colspan="3">'.$aux["muscEsq"].'%</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Metabolismo</th>
                <td colspan="3">'.$aux["matabolismo"].'Kcal</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Idade corporal</th>
                <td colspan="3">'.$aux["idadeC"].' anos</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Gordura visceral</th>
                <td colspan="3">'.$aux["gordVisc"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAS 1</th>
                <td colspan="3">'.$aux["pas1"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAS 2</th>
                <td colspan="3">'.$aux["pas2"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAS 3</th>
                <td colspan="3">'.$aux["pas3"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAD 1</th>
                <td colspan="3">'.$aux["pad1"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAD 2</th>
                <td colspan="3">'.$aux["pad2"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">PAD 3</th>
                <td colspan="3">'.$aux["pad3"].' mmhg</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">FC 1</th>
                <td colspan="3">'.$aux["fc1"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">FC 2</th>
                <td colspan="3">'.$aux["fc2"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">FC 3</th>
                <td colspan="3">'.$aux["fc3"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Braço dominante</th>
                <td colspan="3">'.$aux["bracoDom"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Força de preensão (braço direito)</th>
                <td colspan="2">M1 '.$aux["m1d"].'</td>
                <td colspan="1">M2 '.$aux["m2d"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Força de preensão (braço esquerdo)</th>
                <td colspan="2"> M1'.$aux["m1e"].'</td>
                <td colspan="1"> M2'.$aux["m2e"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">ECG repouso</th>
                <td colspan="3">'.$aux["ecgR"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">ECG (10 minutos)</th>
                <td colspan="3">'.$aux["ecg10"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">ECO</th>
                <td colspan="3">M2 '.$aux["eco"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">HOLTER</th>
                <td colspan="3">M2 '.$aux["holter"].'</td>
              </tr>';
       $html .= '<tr>
                   <th align=center colspan="6">MONITORAMENTO DA PA DURANTE A QUIMIOTERAPIA<\th>
              </tr>';
       $html .= '<tr>
                   <td colspan="3"></td>
                   <th colspan="1">PAS</th>
                   <th colspan="1">PAD</th>
                   <th colspan="1">FC</th>
                </tr>';
       $html .= '<tr>
                <th align=left colspan="3" scope="row">BASAL</th>
                <td colspan="1">'.$aux["pasB"].' mmhg</td>
                <td colspan="1">'.$aux["padB"].' mmhg</td>
                <td colspan="1">'.$aux["fcB"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">30min</th>
                <td colspan="1">'.$aux["pas30"].' mmhg</td>
                <td colspan="1">'.$aux["pad30"].' mmhg</td>
                <td colspan="1">'.$aux["fc30"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">60min</th>
                <td colspan="1">'.$aux["pas60"].' mmhg</td>
                <td colspan="1">'.$aux["pad60"].' mmhg</td>
                <td colspan="1">'.$aux["fc60"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">120min</th>
                <td colspan="1">'.$aux["pas120"].' mmhg</td>
                <td colspan="1">'.$aux["pad120"].' mmhg</td>
                <td colspan="1">'.$aux["fc120"].' bpm</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Medicamentos que o paciente utiliza</th>
                <td colspan="3">'.$aux["medicamentos"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="3" scope="row">Resultados dos exames do paciente</th>
                <td colspan="3">'.$aux["resultados"].'</td>
              </tr>';
      $html .= '<tr>
                <th align=left colspan="6" scope="row">Data da coleta: '.$aux["dataCol"].'</th>
              </tr>';
      $html .= '</table>';
      // Configurações header para forçar o download
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );
     //Envia o conteúdo do arquivo
    echo $html;

    exit;
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

    $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="7">QUESTIONÁRIO DE INFORMAÇÕES SOCIODEMOGRÁFICAS E DE SAÚDE</tr>';
    $html .= '</tr>';

    $html .= '<tr>
                   <th align=left colspan="7">DADOS PESSOAIS:<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">CONTATO: '.$aux["telefone"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">DATA DE NASCIMENTO: '.$aux["nasc"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">ENDEREÇO: '.$aux["endereco"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="7">DATA DA CONSULTA: '.$aux["data"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="7">QUESTIONÁRIO:<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4">Meio onde vive: <td colspan="3">'.$aux["meio"].'</td></th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Estado Civil:</th>
                <td colspan="3">'.$aux["estCivil"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a renda de sua família:</th>
                <td colspan="3">'.$aux["renda"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a sua cor (raça)?</th>
                <td colspan="3">'.$aux["cor"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual seu grau de instrução?</th>
                <td colspan="3">'.$aux["grau"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Você fuma atualmente?</th>
                <td colspan="3">'.$aux["fuma"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Fuma o que?</th>
                <td colspan="3">'.$aux["fuma1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Quantos cigarros fuma por dia?</th>
                <td colspan="3">'.$aux["fuma2"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Com quantos anos começou?</th>
                <td colspan="3">'.$aux["fuma3"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Parou há quanto tempo?</th>
                <td colspan="3">'.$aux["fuma4"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Você consome bebidas alcoólicas atualmente?</th>
                <td colspan="3">'.$aux["bebe"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Com qual frequência?</th>
                <td colspan="3">'.$aux["bebe1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a quantidade ingerida por semana?</th>
                <td colspan="3">'.$aux["bebe2"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você é hipertensa/pressão alta?</th>
                <td colspan="3">'.$aux["hipertensa"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você é diabética?</th>
                <td colspan="3">'.$aux["diabetica"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você tem colesterol alto?</th>
                <td colspan="3">'.$aux["colesterol"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você tem arritmia cardíaca?</th>
                <td colspan="3">'.$aux["arritmia"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum médico já falou que você tem problema no coração?</th>
                <td colspan="3">'.$aux["coracao"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Já realizou alguma cirurgia no coração?</th>
                <td colspan="3">'.$aux["cirurgia"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Já teve algum AVC/derrame?</th>
                <td colspan="3">'.$aux["avc"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">O seu pai ou a sua mãe tem problema de coração?</th>
                <td colspan="3">'.$aux["paisCoracao"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">O seu pai ou a sua mãe teve AVC/derrame?</th>
                <td colspan="3">'.$aux["paisAvc"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a sua idade quando menstruou pela primeira vez?</th>
                <td colspan="3">'.$aux["mPrimeira"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Qual a sua idade quando menstruou pela última vez?</th>
                <td colspan="3">'.$aux["mUltima"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Usa algum anticoncepcional?</th>
                <td colspan="3">'.$aux["anticon"].'</td>
              </tr>';  
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Nº de gestações:</th>
                <td colspan="3">'.$aux["gestacoes"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Nº de nascidos vivos:</th>
                <td colspan="3">'.$aux["nascidosV"].'</td>
              </tr>';  
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Nº de nascidos mortos:</th>
                <td colspan="3">'.$aux["nascidosM"].'</td>
              </tr>'; 
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum parto prematuro?</th>
                <td colspan="3">'.$aux["partoP"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum parto normal?</th>
                <td colspan="3">'.$aux["partoN"].'</td>
              </tr>'; 
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum parto cesárea?</th>
                <td colspan="3">'.$aux["partoC"].'</td>
              </tr>';    
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Algum aborto espontâneo?</th>
                <td colspan="3">'.$aux["aborto"].'</td>
              </tr>';

    $html .= '</table>';
    // Configurações header para forçar o download
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );
     //Envia o conteúdo do arquivo
    echo $html;

    exit;
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

    $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="6">RESULTADO: TESTE DE ORIENTAÇÃO DE VIDA (TOV-R)</tr>';
    $html .= '</tr>';

    $html .= '<tr>
                   <th align=left colspan="6">DADOS PESSOAIS:<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DATA DA CONSULTA: '.$aux["data"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">IDADE: '.$aux["idade"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">RESULTADO<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Diante de dificuldade, acho que tudo vai dar certo:</th>
                <td colspan="2">'.$aux["tovr1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Para mim é fácil relaxar:</th>
                <td colspan="2">'.$aux["tovr2"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Se alguma coisa pode dar errado comigo, com certeza vai dar errado:</th>
                <td colspan="2">'.$aux["tovr3"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu sou sempre otimista com relação ao meu futuro:</th>
                <td colspan="2">'.$aux["tovr4"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu gosto muito dos meus amigos e amigas:</th>
                <td colspan="2">'.$aux["tovr5"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu considero importante me manter ocupado:</th>
                <td colspan="2">'.$aux["tovr6"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Em geral, eu não espero que as coisas vão dar certo para mim:</th>
                <td colspan="2">'.$aux["tovr7"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu não me incomodo com facilidade:</th>
                <td colspan="2">'.$aux["tovr8"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Eu não espero que coisas boas aconteçam comigo:</th>
                <td colspan="2">'.$aux["tovr9"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="4" scope="row">Em geral, eu espero que aconteçam mais coisas boas do que ruins para mim:</th>
                <td colspan="2">'.$aux["tovr10"].'</td>
              </tr>';    

    $html .= '</table>';
    // Configurações header para forçar o download
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );
     //Envia o conteúdo do arquivo
    echo $html;

    exit;
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
         
    $html = '';
    $html .= '<table border="1">';

    $html .= '<tr>';
    $html .= '<th align=center colspan="6">RESULTADO: THE WORLD HEALTH ORGANIZATION QUALITY OF LIFE (WHOQOL-BREF)
</tr>';
    $html .= '</tr>';

    $html .= '<tr>
                   <th align=left colspan="6">DADOS PESSOAIS:<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">PACIENTE: '.$aux1["nome"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">DATA DO EXAME: '.$aux["data"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=left colspan="6">IDADE: '.$aux["idade"].'<\th>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">RESULTADO<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Como você avaliaria sua qualidade de vida?</th>
                <td colspan="1">'.$aux["whoqol1"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com a sua saúde?</th>
                <td colspan="1">'.$aux["whoqol2"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">As respostas seguintes são sobre o quanto você tem sentido algumas coisas nas últimas duas semanas.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Em que medida você acha que sua dor (física) impede você de fazer o que você precisa?</th>
                <td colspan="1">'.$aux["whoqol3"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">O quanto você precisa de algum tratamento médico para levar sua vida diária?</th>
                <td colspan="1">'.$aux["whoqol4"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">O quanto você aproveita a vida?</th>
                <td colspan="1">'.$aux["whoqol5"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Em que medida você acha que a sua vida tem sentido?</th>
                <td colspan="1">'.$aux["whoqol6"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">O quanto você consegue se concentrar?</th>
                <td colspan="1">'.$aux["whoqol7"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão segura você se sente em sua vida diária?</th>
                <td colspan="1">'.$aux["whoqol8"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão saudável é o seu ambiente físico (clima, barulho, poluição, atrativos)?</th>
                <td colspan="1">'.$aux["whoqol9"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">As Respostas seguintes perguntam sobre quão completamente você tem sentido ou é capaz de fazer certas coisas nestas últimas duas semanas.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Você tem energia suficiente para seu dia-a-dia?</th>
                <td colspan="1">'.$aux["whoqol10"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Você é capaz de aceitar sua aparência física?</th>
                <td colspan="1">'.$aux["whoqol11"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Você tem dinheiro suficiente para satisfazer suas necessidades?</th>
                <td colspan="1">'.$aux["whoqol12"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão disponíveis para você estão as informações que precisa no seu dia-a-dia?</th>
                <td colspan="1">'.$aux["whoqol13"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Em que medida você tem oportunidades de atividade de lazer?</th>
                <td colspan="1">'.$aux["whoqol14"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">As respostas seguintes perguntam sobre quão bem ou satisfeito você se sentiu a respeito de vários aspectos de sua vida nas últimas duas semanas.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão bem você é capaz de se locomover?</th>
                <td colspan="1">'.$aux["whoqol15"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o seu sono?</th>
                <td colspan="1">'.$aux["whoqol16"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com sua capacidade para o trabalho?</th>
                <td colspan="1">'.$aux["whoqol17"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está consigo mesmo?</th>
                <td colspan="1">'.$aux["whoqol18"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com suas relações pessoais (amigos, parentes, conhecidos, colegas)?</th>
                <td colspan="1">'.$aux["whoqol19"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com sua vida sexual?</th>
                <td colspan="1">'.$aux["whoqol20"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o apoio que você recebe de seus amigos?</th>
                <td colspan="1">'.$aux["whoqol21"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com as condições do local onde mora?</th>
                <td colspan="1">'.$aux["whoqol22"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o seu acesso aos serviços de saúde?</th>
                <td colspan="1">'.$aux["whoqol23"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o seu meio de transporte?</th>
                <td colspan="1">'.$aux["whoqol24"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quão satisfeita você está com o seu meio de transporte?</th>
                <td colspan="1">'.$aux["whoqol25"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">A resposta seguinte referem-se a com que freqüência você sentiu ou experimentou certas coisas nas últimas duas semanas.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Com que freqüência você tem sentimentos negativos tais como mau humor, desespero, ansiedade, depressão?</th>
                <td colspan="1">'.$aux["whoqol26"].'</td>
              </tr>';
    $html .= '<tr>
                   <th align=center colspan="6">Avalie como foi a realização deste questionário.<\th>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Alguém lhe ajudou a preencher este questionário?</th>
                <td colspan="1">'.$aux["ajuda"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Quanto tempo você levou para preencher este questionário?</th>
                <td colspan="1">'.$aux["tempo"].'</td>
              </tr>';
    $html .= '<tr>
                <th align=left colspan="5" scope="row">Você tem algum comentário sobre o questionário? (opcional)</th>
                <td colspan="1">'.$aux["comentario"].'</td>
              </tr>';
    
    $html .= '</table>';

    // Configurações header para forçar o download
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );
     //Envia o conteúdo do arquivo
    echo $html;

    exit;
      
    ?>
        <?php endif; ?>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
    </body> 
</html>