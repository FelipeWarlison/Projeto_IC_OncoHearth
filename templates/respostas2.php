<div class="container">
     <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
       <div class="container clearfix width-full text-center">
            <img src="images/oncohearthpr.png" alt="">
            <a class="header-logo"  aria-label="Homepage" >
          </a>
       </div>
    </div>
  <br>
  <h3 class="text-center">RESULTADO: FICHA DA CONSULTA CARDIOLÓGICA</h3>
  <br>
  <div class="jumbotron">
    <h5><b>DADOS DO PACIENTE</b></h5><hr>
    <p><b>PACIENTE: </b><?php echo $pessoa;?></p>
    <p><b>DATA DE NASCIMENTO: </b><?php $nasc2 = strtotime($nasc2); echo date('d/m/Y', $nasc2);;?></p>
    <p><b>VISITA: </b><?php echo $visita2;?></p>
    <p><b>DATA DO EXAME: </b><?php $data = strtotime($data); echo date('d/m/Y', $data);?></p><hr><br>

    <h4>ECTOSCOPIA</h4>
    <p><b><?php echo $ectoscopia;?></b></p>
    <hr><br>

    <h4>INSPEÇÃO</h4>
    <p>Inspeção geral do tórax: <b><?php echo $inspTorax;?></b></p>
    <p>Ictus cordis: <b><?php echo $ictuscordis1;?></b></p>
    <hr><br>

    <h4>PALPAÇÃO</h4>
    <p>Pulsos arteriais (Carótida/Aorta): <b><?php echo $pulsosA;?></b></p>
    <p>Pulsos periféricos (Radial/Pedioso/Tibial posterior): <b><?php echo $pulsosP;?></b></p>
    <p>Ictus cordis: <b><?php echo $ictuscordis2;?></b>EIC</p>
    <hr><br>

    <h4>AUSCULTA</h4>
    <p>FC: <b><?php echo $fc;?></b></p>
    <p>SO₂: <b><?php echo $SO2;?></b>%</p>
    <hr><br>

    <h4>RITMO CARDÍACO</h4>
    <p><b><?php echo $rCardiaco;?></b></p>
    <hr><br>

    <h4>BULHAS</h4>
    <p><b><?php echo $bulhas;?></b></p>
    <hr><br>

    <h4>SOPROS: ( <?php echo $sopro1;?> )</h4>
    <p>Foco: <b><?php echo $foco;?></b></p>
    <p>Irradiação: <b><?php echo $irradiacao;?></b></p>
    <p>Intensidade: <b><?php echo $intensidade;?></b></p>
    <p>Sopros: <b><?php echo $sopros;?></b></p>
    <p>Sopros em artérias: <b><?php echo $soproArteria;?></b></p>
    <hr><br>

    <h4>EXAME FÍSICO GERAL</h4>
    <p>Ausculta Pulmonar: <b><?php echo $auscultaP;?></b></p>
    <p>Visceromegalias: <b><?php echo $visc;?></b></p>
    <hr>
  </div>
</div>
