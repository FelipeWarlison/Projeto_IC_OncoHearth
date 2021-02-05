<form class="" action="includes/editquestionario.inc.php?tipo=<?php echo $tipo?>&questId=<?php echo $questId?>&pid=<?php echo $pid?>" method="post">
  <br>
  <h3 class="text-center">EDITAR: TESTE DE ORIENTAÇÃO DE VIDA (TOV-R)</h3>
  <h4 class="text-center">Paciente: <?php echo $pessoa;?></h4>
  <br>
  <div>
    <div class="form-group col-sm-3">
      <label for="idade5">IDADE: </label>
      <input id="idade5" type="text" name="idade5" placeholder="Idade" class="form-control q5" value="<?php echo $idade5 ?>">
    </div>
    <div class="form-group col-sm-3">
      <label for="data5">DATA DO EXAME:</label>
      <input id="data5" type="date" name="data5" class="form-control q5" value="<?php echo $data ?>">
    </div>
  </div><hr>
  
  <P class="text-center"><b>ATENÇÃO!</b></P>
  <p>Caro paciente responda as questões abaixo a respeito de você, indicando o seu grau de acordo. Seja a mais sincera possível e procure não deixar sua resposta a uma questão influenciar suas respostas às outras questões. Lembre-se que não há respostas certas nem erradas.</p><hr><br>
  <div>
    <div class="form-group col-sm-6">
      <label for="tovr1">Diante de dificuldade, acho que tudo vai dar certo:</label>
      <select class="custom-select form-control" required name="tovr1" id="tovr1" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="tovr2">Para mim é fácil relaxar:</label>
      <select class="custom-select form-control" required name="tovr2" id="tovr2" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
  </div>
  <div>
    <div class="form-group col-sm-6">
      <label for="tovr3">Se alguma coisa pode dar errado comigo, com certeza vai dar errado:</label>
      <select class="custom-select form-control" required name="tovr3" id="tovr3" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="tovr4">Eu sou sempre otimista com relação ao meu futuro:</label>
      <select class="custom-select form-control" required name="tovr4" id="tovr4" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
  </div>
  <div>
    <div class="form-group col-sm-6">
      <label for="tovr5">Eu gosto muito dos meus amigos e amigas:</label>
      <select class="custom-select form-control" required name="tovr5" id="tovr5" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="tovr6">Eu considero importante me manter ocupado:</label>
      <select class="custom-select form-control" required name="tovr6" id="tovr6" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
  </div>
  <div>
    <div class="form-group col-sm-6">
      <label for="tovr7">Em geral, eu não espero que as coisas vão dar certo para mim:</label>
      <select class="custom-select form-control" required name="tovr7" id="tovr7" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="tovr8">Eu não me incomodo com facilidade:</label>
      <select class="custom-select form-control" required name="tovr8" id="tovr8" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
  </div>
  <div>
    <div class="form-group col-sm-6">
      <label for="tovr9">Eu não espero que coisas boas aconteçam comigo:</label>
      <select class="custom-select form-control" required name="tovr9" id="tovr9" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">1 - Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="tovr10">Em geral, eu espero que aconteçam mais coisas boas do que ruins para mim:</label>
      <select class="custom-select form-control" required name="tovr10" id="tovr10" >
        <option value= "">Escolha</option>
        <option value= "Discordo totalmente">Discordo totalmente</option>
        <option value= "Discordo">Discordo</option>
        <option value= "Neutro">Neutro</option>
        <option value= "Concordo">Concordo</option>
        <option value= "Concordo totalmente">Concordo totalmente</option>
      </select>
    </div>
  </div><br>
  <div class="row">
  <div class="col-sm-12">
    <div class="text-center">
    <button type="submit" name="ed-questionario-submit" align="center" class="btn btn-danger btn-lg center">Atualizar</button>
  </div>
</div>
</div>
  </div>
  <br>
</form>
