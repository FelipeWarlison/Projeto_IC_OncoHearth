<div class="container">
   <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
       <div class="container clearfix width-full text-center">
            <img src="images/oncohearthpr.png" alt="">
            <a class="header-logo"  aria-label="Homepage" >
          </a>
       </div>
    </div>
  <br>
  <h3 class="text-center">RESULTADO: FICHA DE INVESTIGAÇÃO CLÍNICA</h3>
  <br>
  
  <div class="jumbotron">
    <p><b>DADOS DO PACIENTE</b></p><hr>
    <p><b>PACIENTE: </b><?php echo $pessoa;?></p>
    <p><b>DATA DO EXAME: </b><?php $data = strtotime($data); echo date('d/m/Y', $data);?></p>
    <p><b>VISITA: </b><?php echo $visita3;?></p><hr>
    
    <h5 class="text-center"><b>QUESTIONÁRIO</b></h5><hr>
    
    <p>Grupo de Risco: <b><?php echo $grupoRisco;?></b></p>
    <div class="row">
      <div class="col-md-4">
        <p>Idade: <b><?php echo $idade3;?> anos</b></p>
      </div>
      <div class="col-md-4">
        <p>Peso: <b><?php echo $peso3;?>kg</b></p>
      </div>
      <div class="col-md-4">
        <p>Estatura: <b><?php echo $estatura3;?>cm</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <p>Circunferência abdominal: <b><?php echo $circAbd;?>cm</b></p>
      </div>
      <div class="col-md-4">
        <p>Gordura corporal: <b><?php echo $gordCorp;?>%</b></p>
      </div>
      <div class="col-md-4">
        <p>Músculo esquelético: <b><?php echo $muscEsq;?>%</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <p>Metabolismo: <b><?php echo $matabolismo;?>kcal</b></p>
      </div>
      <div class="col-md-4">
        <p>Idade corporal: <b><?php echo $idadeC;?> anos</b></p>
      </div>
      <div class="col-md-4">
        <p>Gordura visceral: <b><?php echo $gordVisc;?></b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <p>PAS 1: <b><?php echo $pas1;?> mmhg</b></p>
      </div>
      <div class="col-md-4">
        <p>PAD 1: <b><?php echo $pad1;?> mmhg</b></p>
      </div>
      <div class="col-md-4">
        <p>FC 1: <b><?php echo $fc1;?> bpm</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <p>PAS 2: <b><?php echo $pas2;?> mmhg</b></p>
      </div>
      <div class="col-md-4">
        <p>PAD 2: <b><?php echo $pad2;?> mmhg</b></p>
      </div>
      <div class="col-md-4">
        <p>FC 2: <b><?php echo $fc2;?> bpm</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <p>PAS 3: <b><?php echo $pas3;?> mmhg</b></p>
      </div>
      <div class="col-md-4">
        <p>PAD 3: <b><?php echo $pad3;?> mmhg</b></p>
      </div>
      <div class="col-md-4">
        <p>FC 3: <b><?php echo $fc3;?> bpm</b></p>
      </div>
    </div>
    <p>Braço dominante: <b><?php echo $bracoDom;?></b></p>
    <p>Força de preensão (braço direito): M1<b> <?php echo $m1d;?></b> M2 <b><?php echo $m2d;?></b></p>
    <p>Força de preensão (braço esquerdo): M1<b> <?php echo $m1e;?></b> M2 <b><?php echo $m2e;?></b></p>
    <div class="row">
      <div class="col-md-3">
        <p>ECG repouso: <b><?php echo $ecgR;?></b></p>
      </div>
      <div class="col-md-3">
        <p>ECG (10 minutos): <b><?php echo $ecg10;?></b></p>
      </div>
      <div class="col-md-3">
        <p>ECO: <b>M2<?php echo $eco;?></b></p>
      </div>
      <div class="col-md-3">
        <p>HOLTER: <b>M2<?php echo $holter;?></b></p>
      </div>
    </div>
    <br><hr>
    <h4 class="text-center">MONITORAMENTO DA PA DURANTE A QUIMIOTERAPIA</h4>
    <hr><br>
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
        <p><u>PAS</u></p>
      </div>
      <div class="col-md-3">
        <p><u>PAD</u></p>
      </div>
      <div class="col-md-3">
        <p><u>FC</u></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <p>Basal:</p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $pasB;?> mmhg</b></p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $padB;?> mmhg</b></p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $fcB;?> bpm</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <p>30 min:</p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $pas30;?> mmhg</b></p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $pad30;?> mmhg</b></p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $fc30;?> bpm</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <p>60 min:</p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $pas60;?> mmhg</b></p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $pad60;?> mmhg</b></p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $fc60;?> bpm</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <p>120 min:</p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $pas120;?> mmhg</b></p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $pad120;?> mmhg</b></p>
      </div>
      <div class="col-md-3">
        <p><b><?php echo $fc120;?> bpm</b></p>
      </div>
    </div>
    <br>
    <p>Medicamentos que o paciente utiliza (preferencialmente nome químico e posologia): <b><?php echo $medicamentos;?></b></p>
    <br>
    <p>Resultados dos exames da paciente: <b><?php echo $resultados;?></b></p><br>
    <p>Data da coleta: <b><?php $dataCol = strtotime($dataCol); echo date('d/m/Y', $dataCol)?></b></p>
  </div>
</div>
