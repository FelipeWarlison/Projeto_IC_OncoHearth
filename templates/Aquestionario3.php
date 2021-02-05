<form class="" action="includes/editquestionario.inc.php?tipo=<?php echo $tipo?>&questId=<?php echo $questId?>&pid=<?php echo $pid?>" method="post">
  <br>
  <h3 class="text-center">FICHA DE INVESTIGAÇÃO</h3>
  <h4 class="text-center">EDITAR QUESTIONÁRIO:</h4>
  <br>
  <hr><p><b>PACIENTE: </b><?php echo $pessoa;?></p>
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="visita3">Visita: </label>
      <input value="<?php echo $visita3?>" required required class="form-control q3" id="visita3" type="text" name="visita3" placeholder="Visita" >
    </div>
    <div class="form-group col-sm-4">
      <label for="data3">Data de aplicação</label>
      <input value="<?php echo $data?>" required required class="form-control q3" id="data3" type="date" name="data3" >
    </div>
    <div class="form-group col-sm-4">
      <label for="grupoRisco">Grupo de Risco:</label>
      <input value="<?php echo $grupoRisco?>" required required class="form-control q3" id="grupoRisco" type="text" name="grupoRisco" placeholder="Grupo de Risco">
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-sm-4">
        <label for="idade3">Idade:</label>
        <input value="<?php echo $idade3?>" required required type="text" name="idade3" class="form-control q3" id="idade3" placeholder="(Anos)">
      </div>
      <div class="form-group col-sm-4">
        <label for="peso3">Peso:</label>
        <input value="<?php echo $peso3?>" required required type="text" name="peso3" class="form-control q3" id="peso3" placeholder="(Kg)">
      </div>
      <div class="form-group col-sm-4">
        <label for="estatura3">Estatura:</label>
        <input value="<?php echo $estatura3?>" required required type="text" name="estatura3" class="form-control q3" id="estatura3" placeholder="(cm)">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-4">
        <label for="circAbd">Circ. Abdom.</label>
        <input value="<?php echo $circAbd?>" required type="text" name="circAbd" class="form-control q3" id="circAbd" placeholder="(cm)">
      </div>
      <div class="form-group col-sm-4">
        <label for="gordCorp">Gordura corporal:</label>
        <input value="<?php echo $gordCorp?>" required type="text" name="gordCorp" class="form-control q3" id="gordCorp" placeholder="(%)">
      </div>
      <div class="form-group col-sm-4">
          <label for="muscEsq">Músculo esquelético:</label>
          <input value="<?php echo $muscEsq?>" required type="text" name="muscEsq" class="form-control q3" id="muscEsq" placeholder="(%)">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-4">
        <label for="matabolismo">Metabolismo:</label>
        <input value="<?php echo $matabolismo?>" required type="text" name="matabolismo" class="form-control q3" id="matabolismo" placeholder="(Kcal)">
      </div>
      <div class="form-group col-sm-4">
        <label for="idadeC">Idade corporal:</label>
        <input value="<?php echo $idadeC?>" required type="text" name="idadeC" class="form-control q3" id="idadeC" placeholder="(Anos)">
      </div>
      <div class="form-group col-sm-4">
        <label for="gordVisc">Gordura visceral:</label>
        <input value="<?php echo $gordVisc?>" required type="text" name="gordVisc" class="form-control q3" id="gordVisc" placeholder="(Nível)">
      </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-4">
          <label for="pas1">PAS 1:</label>
          <input value="<?php echo $pas1?>" required type="text" name="pas1" class="form-control q3" id="pas1">
        </div>
        <div class="form-group col-sm-4">
          <label for="pad1">PAD 1:</label>
          <input value="<?php echo $pad1?>" required type="text" name="pad1" class="form-control q3" id="pad1">
        </div>
        <div class="form-group col-sm-4">
          <label for="fc1">FC 1:</label>
          <input value="<?php echo $fc1?>" required type="text" name="fc1" class="form-control q3" id="fc1">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-4">
          <label for="pas2">PAS 2:</label>
          <input value="<?php echo $pas2?>" required type="text" name="pas2" class="form-control q3" id="pas2">
        </div>
        <div class="form-group col-sm-4">
          <label for="pad2">PAD 2:</label>
          <input value="<?php echo $pad2?>" required type="text" name="pad2" class="form-control q3" id="pad2">
        </div>
        <div class="form-group col-sm-4">
          <label for="fc2">FC 2:</label>
          <input value="<?php echo $fc2?>" required type="text" name="fc2" class="form-control q3" id="fc2">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-4">
          <label for="pas3">PAS 3:</label>
          <input value="<?php echo $pas3?>" required type="text" name="pas3" class="form-control q3" id="pas3">
        </div>
        <div class="form-group col-sm-4">
          <label for="pad3">PAD 3:</label>
          <input value="<?php echo $pad3?>" required type="text" name="pad3" class="form-control q3" id="pad3">
        </div>
        <div class="form-group col-sm-4">
          <label for="fc3">FC 3:</label>
          <input value="<?php echo $fc3?>" required type="text" name="fc3" class="form-control q3" id="fc3">
        </div>
      </div>
      <div class="form-group">
        <label for="bracoDom">Braço dominante:</label>
        <select required class="custom-select" name="bracoDom" id="bracoDom" >
          <option value= "">Escolha</option>
          <option value="Esquerdo">Esquerdo</option>
          <option value="Direito">Direito</option>
        </select>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-4">
          <p>Força de preensão (braço direito):</p>
        </div>
        <div class="form-group col-sm-4">
          <input value="<?php echo $m1d?>" required type="text" name="m1d" class="form-control q3" id="m1d" placeholder="M1">
        </div>
        <div class="form-group col-sm-4">
          <input value="<?php echo $m2d?>" required type="text" name="m2d" class="form-control q3" id="m2d" placeholder="M2">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-4">
          <p>Força de preensão (braço esquerdo):</p>
        </div>
        <div class="form-group col-sm-4">
          <input value="<?php echo $m1e?>" required type="text" name="m1e" class="form-control q3" id="m1e" placeholder="M1">
        </div>
        <div class="form-group col-sm-4">
          <input value="<?php echo $m2e?>" required type="text" name="m2e" class="form-control q3" id="m2e" placeholder="M2">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-3">
          <label for="ecgR">ECG repouso:</label>
          <input value="<?php echo $ecgR?>" required type="text" name="ecgR" class="form-control q3" id="ecgR">
        </div>
        <div class="form-group col-sm-3">
          <label for="ecg10">ECG (10 minutos):</label>
          <input value="<?php echo $ecg10?>" required type="text" name="ecg10" class="form-control q3" id="ecg10">
        </div>
        <div class="form-group col-sm-3">
          <label for="eco">ECO:</label>
          <input value="<?php echo $eco?>" required type="text" name="eco" class="form-control q3" id="eco">
        </div>
        <div class="form-group col-sm-3">
          <label for="holter">HOLTER:</label>
          <input value="<?php echo $holter?>" required type="text" name="holter" class="form-control q3" id="holter">
        </div>
      </div><hr>
      <p class="h4 text-center"><b>MONITORAMENTO DA PA DURANTE A QUIMIOTERAPIA</b></p><hr><br>
      <div class="form-row">
        <div class="form-group col-sm-3">
          <p>Basal:</p>
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $pasB?>" required type="text" name="pasB" class="form-control q3" id="pasB" placeholder="PAS">
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $padB?>" required type="text" name="padB" class="form-control q3" id="padB" placeholder="PAD">
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $fcB?>" required type="text" name="fcB" class="form-control q3" id="fcB" placeholder="FC">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-3">
          <p>30 min:</p>
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $pas30?>" required type="text" name="pas30" class="form-control q3" id="pas30" placeholder="PAS">
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $pad30?>" required type="text" name="pad30" class="form-control q3" id="pad30" placeholder="PAD">
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $fc30?>" required type="text" name="fc30" class="form-control q3" id="fc30" placeholder="FC">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-3">
          <p>60 min:</p>
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $pas60?>" required type="text" name="pas60" class="form-control q3" id="pas60" placeholder="PAS">
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $pad60?>" required type="text" name="pad60" class="form-control q3" id="pad60" placeholder="PAD">
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $fc60?>" required type="text" name="fc60" class="form-control q3" id="fc60" placeholder="FC">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-3">
          <p>120 min:</p>
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $pas120?>" required type="text" name="pas120" class="form-control q3" id="pas120" placeholder="PAS">
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $pad120?>" required type="text" name="pad120" class="form-control q3" id="pad120" placeholder="PAD">
        </div>
        <div class="form-group col-sm-3">
          <input value="<?php echo $fc120?>" required type="text" name="fc120" class="form-control q3" id="fc120" placeholder="FC">
        </div>
      </div>
      <div class="form-group col-sm-6"><hr>
        <label for="medicamentos">Transcrever os medicamentos que a paciente utiliza (preferencialmente nome químico e posologia): </label><hr>
        <textarea required class="form-control q3" name="medicamentos" id="medicamentos" rows="4"><?php echo $medicamentos?></textarea>
      </div>
      <div class="form-group col-sm-6"><hr>
        <label for="resultados">Transcrever os resultados dos exames da paciente: </label><hr>
        <textarea required class="form-control q3" name="resultados" id="resultados" rows="4"><?php echo $resultados?></textarea>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-2">
          <label for="dataCol">Data da coleta:</label>
          <input value="<?php echo $dataCol?>" required type="date" name="dataCol" class="form-control q3" id="dataCol">
        </div>
      </div>
    <div class="row">
  <div class="col-sm-12">
    <div class="text-center">
    <button type="submit" name="ed-questionario-submit" align="center" class="btn btn-danger btn-lg center">ATUALIZAR</button>
  </div>
</div>
</div>
<br>
    <br>
  </div>
</form>
