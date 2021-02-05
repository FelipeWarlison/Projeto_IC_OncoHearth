<div class="container">
     <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
       <div class="container clearfix width-full text-center">
            <img src="images/oncohearthpr.png" alt="">
            <a class="header-logo"  aria-label="Homepage" >
          </a>
       </div>
    </div>
  <br>
  <h3 class="text-center">RESULTADO: THE WORLD HEALTH ORGANIZATION QUALITY OF LIFE (WHOQOL-BREF)</h3>
  <br>

  <div class="jumbotron">
    <h5><b>DADOS DO PACIENTE</b></h5><hr>
    <p><b>PACIENTE: </b><?php echo $pessoa;?></p>
    <p><b>IDADE: </b><?php echo $idade6;?> anos</p>
    <p><b>DATA DO EXAME: </b><?php $data = strtotime($data); echo date('d/m/Y', $data);?></p><hr>

    <h5 class="text-center"><b>QUESTIONÁRIO</b></h5><hr>

    <p>Como você avaliaria sua qualidade de vida? <b><?php echo $whoqol1;?></b></p>
    <p>Quão satisfeita você está com a sua saúde? <b><?php echo $whoqol2;?></b></p><hr>

    <p><b>As respostas seguintes são sobre o quanto você tem sentido algumas coisas nas últimas duas semanas.</b></p><hr>

    <p>Em que medida você acha que sua dor (física) impede você de fazer o que você precisa? <b><?php echo $whoqol3;?></b></p>
    <p>O quanto você precisa de algum tratamento médico para levar sua vida diária? <b><?php echo $whoqol4;?></b></p>
    <p>O quanto você aproveita a vida? <b><?php echo $whoqol5;?></b></p>
    <p>Em que medida você acha que a sua vida tem sentido? <b><?php echo $whoqol6;?></b></p>
    <p>O quanto você consegue se concentrar? <b><?php echo $whoqol7;?></b></p>
    <p>Quão segura você se sente em sua vida diária? <b><?php echo $whoqol8;?></b></p>
    <p>Quão saudável é o seu ambiente físico (clima, barulho, poluição, atrativos)? <b><?php echo $whoqol9;?></b></p><hr>

    <p><b>As Respostas seguintes perguntam sobre quão completamente você tem sentido ou é capaz de fazer certas coisas nestas últimas duas semanas.</b></p><hr>

    <p>Você tem energia suficiente para seu dia-a-dia? <b><?php echo $whoqol10;?></b></p>
    <p>Você é capaz de aceitar sua aparência física? <b><?php echo $whoqol11;?></b></p>
    <p>Você tem dinheiro suficiente para satisfazer suas necessidades? <b><?php echo $whoqol12;?></b></p>
    <p>Quão disponíveis para você estão as informações que precisa no seu dia-a-dia? <b><?php echo $whoqol13;?></b></p>
    <p>Em que medida você tem oportunidades de atividade de lazer? <b><?php echo $whoqol14;?></b></p><hr>

    <p><b>As respostas seguintes perguntam sobre quão bem ou satisfeito você se sentiu a respeito de vários aspectos de sua vida nas últimas duas semanas.</b></p><hr>

    <p>Quão bem você é capaz de se locomover? <b><?php echo $whoqol15;?></b></p>
    <p>Quão satisfeita você está com o seu sono? <b><?php echo $whoqol16;?></b></p>
    <p>Quão satisfeita você está com sua capacidade de desempenhar as atividades do seu dia-a-dia? <b><?php echo $whoqol17;?></b></p>
    <p>Quão satisfeita você está com sua capacidade para o trabalho? <b><?php echo $whoqol18;?></b></p>
    <p>Quão satisfeita você está consigo mesmo? <b><?php echo $whoqol19;?></b></p>
    <p>Quão satisfeita você está com suas relações pessoais (amigos, parentes, conhecidos, colegas)? <b><?php echo $whoqol20;?></b></p>
    <p>Quão satisfeita você está com sua vida sexual? <b><?php echo $whoqol21;?></b></p>
    <p>Quão satisfeita você está com o apoio que você recebe de seus amigos? <b><?php echo $whoqol22;?></b></p>
    <p>Quão satisfeita você está com as condições do local onde mora? <b><?php echo $whoqol23;?></b></p>
    <p>Quão satisfeita você está com o seu acesso aos serviços de saúde? <b><?php echo $whoqol24;?></b></p>
    <p>Quão satisfeita você está com o seu meio de transporte? <b><?php echo $whoqol25;?></b></p><hr>

    <p><b>A resposta seguinte referem-se a com que freqüência você sentiu ou experimentou certas coisas nas últimas duas semanas.</b></p><hr>

    <p>Com que freqüência você tem sentimentos negativos tais como mau humor, desespero, ansiedade, depressão? <b><?php echo $whoqol26;?></b></p><hr>

    <p><b>Avalie como foi a realização deste questionário.</b></p><hr>

    <p>Alguém lhe ajudou a preencher este questionário? <b><?php echo $ajuda;?></b></p>
    <p>Quanto tempo você levou para preencher este questionário? <b><?php echo $tempo;?></b></p>
    <p>Você tem algum comentário sobre o questionário? (opcional) <b><?php echo $comentario;?></b></p>
  </div>
</div>
