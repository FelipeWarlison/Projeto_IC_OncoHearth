<form class="" action="includes/editquestionario.inc.php?tipo=<?php echo $tipo?>&questId=<?php echo $questId?>&pid=<?php echo $pid?>" method="post">
  <br>
  <h3 class="text-center">THE WORLD HEALTH ORGANIZATION QUALITY OF LIFE (WHOQOL-BREF)</h3><br>
  <h4 class="text-center">EDITAR QUESTIONÁRIO:</h4>
  <br>
    <p><b>PACIENTE: </b><?php echo $pessoa;?></p>
    <div class="form-group col-sm-3">
      <label for="data6">DATA DO EXAME</label>
      <input value="<?php echo $data?>" id="data6" type="date" name="data6" class="form-control q6" required >
    </div>
    <div class="form-group  col-sm-3">
      <label for="idade6">IDADE </label>
      <input value="<?php echo $idade6?>" id="idade6" type="text" name="idade6" placeholder="Idade" class="form-control q6" required>
    </div><hr>

  <div class="card">
  <P class="text-center"><b>ATENÇÃO!</b></P>
  <div class="card-body" style="text-align: justify;"><b>
    Este questionário é sobre como você se sente a respeito de sua qualidade de vida, saúde e outras áreas de sua vida. Por favor responda a todas as questões. Se você não tem certeza sobre que resposta dar em uma questão, por favor, escolha entre as alternativas a que lhe parece mais apropriada. Esta, muitas vezes, poderá ser sua primeira escolha. Por favor, tenha em mente seus valores, aspirações, prazeres e preocupações. Nós estamos perguntando o que você acha de sua vida, tomando como  referência as duas últimas semanas.
  </b></div>
</div><hr><br>
  <div class="form-group col-sm-6">
    <label for="whoqol1">1 - Como você avaliaria sua qualidade de vida? </label>
    <select class="custom-select form-control q6" name="whoqol1" id="whoqol1" >
      <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem boa">Nem ruim nem boa</option>
      <option value= "Boa">Boa</option>
      <option value= "Muito boa">Muito boa</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol2">2 - Quão satisfeita você está com a sua saúde? </label>
    <select class="custom-select form-control q6" name="whoqol2" id="whoqol2" >
      <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem boa">Nem ruim nem boa</option>
      <option value= "Boa">Boa</option>
      <option value= "Muito boa">Muito boa</option>
    </select>
  </div><hr>
  <div class="card">
  <div class="card-body">
    <b>As questões seguintes são sobre o quanto você tem sentido algumas coisas nas últimas duas semanas.</b></div>
  </div><hr>
  <div class="form-group col-sm-8">
    <label for="whoqol3">3 - Em que medida você acha que sua dor (física) impede você de fazer o que você precisa?</label>
    <select class="custom-select form-control q6" name="whoqol3" id="whoqol3" >
      <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
    </select>
  </div>
  <div class="form-group col-sm-8">
    <label for="whoqol4">4 - O quanto você precisa de algum tratamento médico para levar sua vida diária?</label>
    <select class="custom-select form-control q6" name="whoqol4" id="whoqol4" >
      <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol5">5 - O quanto você aproveita a vida?</label>
    <select class="custom-select form-control q6" name="whoqol5" id="whoqol5" >
      <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol6">6 - Em que medida você acha que a sua vida tem sentido?</label>
    <select class="custom-select form-control q6" name="whoqol6" id="whoqol6" >
      <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol7">7 - O quanto você consegue se concentrar?</label>
    <select class="custom-select form-control q6" name="whoqol7" id="whoqol7" >
      <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol8">8 - Quão segura você se sente em sua vida diária?</label>
    <select class="custom-select form-control q6" name="whoqol8" id="whoqol8" >
      <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
    </select>
  </div>
<div class="form-group col-sm-8">
  <label for="whoqol9">9 - Quão saudável é o seu ambiente físico (clima, barulho, poluição, atrativos)?</label>
  <select class="custom-select form-control q6" name="whoqol9" id="whoqol9" >
    <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
  </select>
</div><hr>
<div class="card">
  <div class="card-body">
    <b>As questões seguintes perguntam sobre quão completamente você tem sentido ou é capaz de fazer certas coisas nestas últimas duas semanas.</b>
  </div>
</div><hr>
  <div class="form-group col-sm-6">
    <label for="whoqol10">10 - Você tem energia suficiente para seu dia-a- dia?</label>
    <select class="custom-select form-control q6" name="whoqol10" id="whoqol10" >
      <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol11">11 - Você é capaz de aceitar sua aparência física?</label>
    <select class="custom-select form-control q6" name="whoqol11" id="whoqol11" >
      <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
  <label for="whoqol12">12 - Você tem dinheiro suficiente para satisfazer suas necessidades?</label>
  <select class="custom-select form-control q6" name="whoqol12" id="whoqol12" >
    <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
  </select>
  </div>
  <div class="form-group col-sm-8">
  <label for="whoqol13">13 - Quão disponíveis para você estão as informações que precisa no seu dia-a-dia?</label>
  <select class="custom-select form-control q6" name="whoqol13" id="whoqol13" >
    <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
  </select>
  </div>
  <div class="form-group col-sm-6">
  <label for="whoqol14">14 - Em que medida você tem oportunidades de atividade de lazer?</label>
  <select class="custom-select form-control q6" name="whoqol14" id="whoqol14" >
    <option value= "">Escolha</option>
      <option value= "Nada" >Nada</option>
      <option value= "Muito pouco">Muito pouco</option>
      <option value= "Mais ou menos">Mais ou menos</option>
      <option value= "Bastante">Bastante</option>
      <option value= "Extremamente">Extremamente</option>
  </select>
  </div><hr>
  <div class="card">
  <div class="card-body">
    <b>As questões seguintes perguntam sobre quão bem ou satisfeito você se sentiu a respeito de vários aspectos de sua vida nas últimas duas semanas.</b>
  </div>
</div><hr>
  <div class="form-group col-sm-6">
    <label for="whoqol15">15 - Quão bem você é capaz de se locomover?</label>
    <select class="custom-select form-control q6" name="whoqol15" id="whoqol15" >
      <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol16">16 - Quão satisfeita você está com o seu sono?</label>
    <select class="custom-select form-control q6" name="whoqol16" id="whoqol16" >
      <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
    </select>
  </div>
  <div class="form-group col-sm-8">
  <label for="whoqol17">17 - Quão satisfeita você está com sua capacidade de desempenhar as atividades do seu dia-a-dia?</label>
  <select class="custom-select form-control q6" name="whoqol17" id="whoqol17" >
    <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
  </select>
</div>
<div class="form-group col-sm-6">
  <label for="whoqol18">18 - Quão satisfeita você está com sua capacidade para o trabalho?</label>
  <select class="custom-select form-control q6" name="whoqol18" id="whoqol18" >
    <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
  </select>
</div>
<div class="form-group col-sm-6">
  <label for="whoqol19">19 - Quão satisfeita você está consigo mesmo?</label>
  <select class="custom-select form-control q6" name="whoqol19" id="whoqol19" >
    <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
  </select>
</div>
<div class="form-group col-sm-8">
  <label for="whoqol20">20 - Quão satisfeita você está com suas relações pessoais (amigos, parentes, conhecidos, colegas)?</label>
  <select class="custom-select form-control q6" name="whoqol20" id="whoqol20" >
    <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
  </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol21">21 - Quão satisfeita você está com sua vida sexual?</label>
    <select class="custom-select form-control q6" name="whoqol21" id="whoqol21" >
      <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol22">22 - Quão satisfeita você está com o apoio que você recebe de seus amigos?</label>
    <select class="custom-select form-control q6" name="whoqol22" id="whoqol22" >
      <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol23">23 - Quão satisfeita você está com as condições do local onde mora?</label>
    <select class="custom-select form-control q6" name="whoqol23" id="whoqol23" >
      <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
    </select>
  </div>
  <div class="form-group col-sm-6">
    <label for="whoqol24">24 - Quão satisfeita você está com o seu acesso aos serviços de saúde? </label>
    <select class="custom-select form-control q6" name="whoqol24" id="whoqol24" >
      <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
    </select>
  </div>
<div class="form-group col-sm-6">
  <label for="whoqol25">25 - Quão satisfeita você está com o seu meio de transporte? </label>
  <select class="custom-select form-control q6" name="whoqol25" id="whoqol25" >
    <option value= "">Escolha</option>
      <option value= "Muito ruim" >Muito ruim</option>
      <option value= "Ruim">Ruim</option>
      <option value= "Nem ruim nem bom">Nem ruim nem bom</option>
      <option value= "Bom">Bom</option>
      <option value= "Muito bom">Muito bom</option>
  </select>
</div><hr>
<div class="card">
  <div class="card-body">
    <b>A questão seguinte referem-se a com que freqüência você sentiu ou experimentou certas coisas nas últimas duas semanas.</b>
  </div>
</div><hr>
<div class="form-group col-sm-8">
  <label for="whoqol26">26 - Com que freqüência você tem sentimentos negativos tais como mau humor, desespero, ansiedade, depressão?
</label>
  <select class="custom-select form-control q6" name="whoqol26" id="whoqol26" >
    <option value= "">Escolha</option>
    <option value= "Nunca" >Nunca</option>
    <option value= "Algumas vezes">Algumas vezes</option>
    <option value= "Frequentemente">Frequentemente</option>
    <option value= "Muito frequentemente">Muito frequentemente</option>
    <option value= "Sempre">Sempre</option>
  </select>
</div><hr>
<div class="card">
  <div class="card-body">
    <b>Avalie como foi a realização deste questionário.</b>
  </div>
</div><hr>
<div class="form-group col-sm-4">
  <label for="ajuda">Alguém lhe ajudou a preencher este questionário?(SIM/NÃO)</label>
  <input type="text" name="ajuda" class="form-control q6" id="ajuda">
</div>
<div class="form-group col-sm-8">
  <label for="tempo">Quanto tempo você levou para preencher este questionário?</label>
  <input type="text" name="tempo" class="form-control q6" id="tempo">
</div>
<div class="form-group col-sm-8">
  <label for="comentario">Você tem algum comentário sobre o questionário? (opcional)</label>
  <textarea class="form-control" type="text" name="comentario" id="comentario" rows="3"></textarea>
</div>
    <div class="row">
  <div class="col-sm-12">
    <div class="text-center">
    <button type="submit" name="ed-questionario-submit" align="center" class="btn btn-danger btn-lg center">ATUALIZAR</button>
  </div>
</div>
</div>
<br>
</form>
