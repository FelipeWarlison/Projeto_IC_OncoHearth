<h3 class="text-center">FICHA DE CONSULTA CARDIOLÓGICA</h3><hr><br>
<div class="form-group">
  <div class="form-group col-sm-3">
    <label for="visita2">VISITA: </label>
    <input id="visita2" type="text" name="visita2" placeholder="Visita" class="form-control q2">
  </div>
  <div class="form-group col-sm-3">
    <label for="data2">DATA DO EXAME:</label>
    <input id="data2" type="date" name="data2" class="form-control q2">
  </div>
  <div class="form-group col-sm-3">
    <label for="nasc2">DATA DE NASCIMENTO: </label>
    <input id="nasc2" type="date" name="nasc2" class="form-control q2">
  </div>
</div><hr>

<h4>ECTOSCOPIA</h4>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="ectoscopia[]" id="semAlt" value="Sem alterações">
  <label class="form-check-label" for="semAlt">Sem alterações</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="ectoscopia[]" id="edema" value="Edema">
  <label class="form-check-label" for="edema">Edema</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="ectoscopia[]" id="cianose" value="Cianose">
  <label class="form-check-label" for="cianose">Cianose</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="ectoscopia[]" id="hipocor" value="Hipocorado">
  <label class="form-check-label" for="hipocor">Hipocorado</label>
</div>
<div class="form-group">
  <label for="ectoscopia2">Outros: </label>
  <input id="ectoscopia2" type="text" name="ectoscopia[]" placeholder="Outros..." class="form-control" value="">
</div><hr>
<h4>INSPEÇÃO</h4>
<div class="form-row">
  <div class="form-group col-sm-6">
    <label for="inspTorax">Inspeção geral do tórax: </label>
    <input id="inspTorax" type="text" name="inspTorax" placeholder="Inspeção geral do tórax..." class="form-control q2" >
  </div>
  <div class="form-group col-sm-6">
  <label for="ictuscordis1">Ictus cordis:</label>
  <select class="custom-select q2" name="ictuscordis1" id="ictuscordis1" >
    <option value= "">Escolha</option>
    <option value="Visível">Visível</option>
    <option value="Não visível">Não visível</option>
  </select>
  </div>
</div><hr>

<h4>PALPAÇÃO</h4>
<div class="form-row">
  <div class="form-group col-sm-4">
    <label for="pulsosA">Pulsos arteriais (Carótida/Aorta): </label>
    <input id="pulsosA" type="text" name="pulsosA" placeholder="Pulsos arteriais" class="form-control q2">
  </div>
  <div class="form-group col-sm-6">
    <label for="pulsosP">Pulsos periféricos (Radial/Pedioso/Tibial posterior): </label>
    <input id="pulsosP" type="text" name="pulsosP" placeholder="Pulsos periféricos" class="form-control q2">
  </div>
  <div class="form-group col-sm-2">
    <label for="ictuscordis2">Ictus cordis: </label>
    <input id="ictuscordis2" type="text" name="ictuscordis2" placeholder="EIC" class="form-control q2">
  </div>
</div><hr>

<h4>AUSCULTA</h4>
<div class="form-row">
  <div class="form-group col-sm-6">
    <label for="fc">FC: </label>
    <input id="fc" type="text" name="fc" placeholder="bpm" class="form-control q2">
  </div>
  <div class="form-group col-sm-6">
    <label for="SO2">SO₂: </label>
    <input id="SO2" type="text" name="SO2" placeholder="%" class="form-control q2">
  </div>
</div><hr>

<h4>RITMO CARDÍACO</h4>
<div class="form-group">
<select class="custom-select q2" name="rCardiaco" id="rCardiaco" >
  <option value= "">Escolha</option>
  <option value="Regular">Regular</option>
  <option value="Irregular">Irregular</option>
</select>
</div><hr>

<h4>BULHAS</h4>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="bulhas[]" id="bNormo" value="Normofonéticas">
  <label class="form-check-label" for="bNormo">Normofonéticas</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="bulhas[]" id="bHiper" value="Hiperfonese">
  <label class="form-check-label" for="bHiper">Hiperfonese</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="bulhas[]" id="bHipo" value="Hipofonese">
  <label class="form-check-label" for="bHipo">Hipofonese</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="bulhas[]" id="bAcess" value="Acessórias">
  <label class="form-check-label" for="bAcess">Acessórias</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="bulhas[]" id="bDesdo" value="Desdobramentos">
  <label class="form-check-label" for="bDesdo">Desdobramentos</label>
</div>
<br>
<br><hr>
<h4>SOPROS</h4>
<p>Se ausentes, ignore o resto do campo 'SOPROS'.</p>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="sopro1[]" id="sAusentes" value="Ausentes">
  <label class="form-check-label" for="sAusentes">Ausentes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sopro1[]" id="sPresentes" value="Presentes">
  <label class="form-check-label" for="sPresentes">Presentes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sopro1[]" id="sSistolico" value="Sistólico">
  <label class="form-check-label" for="cianose">Sistólico</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sopro1[]" id="sDiastolico" value="Diastólico">
  <label class="form-check-label" for="hipocor">Diastólico</label>
</div>
<div class="form-row">
  <div class="form-group col-sm-4">
    <label for="foco">Foco: </label>
    <input id="foco" type="text" name="foco" placeholder="Foco" class="form-control">
  </div>
  <div class="form-group col-sm-4">
    <label for="irradiacao">Irradiação: </label>
    <input id="irradiacao" type="text" name="irradiacao" placeholder="Irradiação" class="form-control">
  </div>
  <div class="form-group col-sm-4">
    <label for="intensidade">Intensidade: </label>
    <input id="intensidade" type="text" name="intensidade" placeholder="/VI" class="form-control">
  </div>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sopros[]" id="sEstalidos" value="Estalidos">
  <label class="form-check-label" for="sEstalidos">Estalidos</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sopros[]" id="sCAbertura" value="Cliques de Abertura">
  <label class="form-check-label" for="sCAbertura">Cliques de Abertura</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sopros[]" id="sAtritos" value="Atritos">
  <label class="form-check-label" for="sAtritos">Atritos</label>
</div>
<br>
<p>Sopros em artérias:</p>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="soproArteria[]" id="sAorta" value="Aorta">
  <label class="form-check-label" for="sAorta">Aorta</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="soproArteria[]" id="sCarotida" value="Carótida">
  <label class="form-check-label" for="sCarotida">Carótida</label>
</div>
<br>
<br><hr>
<h4>EXAME FÍSICO GERAL</h4>
<p>Ausculta Pulmonar:</p>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="auscultaP[]" id="mvr" value="MVR">
  <label class="form-check-label" for="mvr">MVR</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="auscultaP[]" id="crep" value="Crepitações">
  <label class="form-check-label" for="crep">Crepitações</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="auscultaP[]" id="sibilos" value="Sibilos">
  <label class="form-check-label" for="sibilos">Sibilos</label>
</div>
<div class="form-group">
  <label for="visc">Visceromegalias: </label>
  <input id="visc" type="text" name="visc" placeholder="Visceromegalias" class="form-control q2">
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="text-center">
    <button type="submit" name="add-questionario-submit" align="center" class="btn btn-danger btn-lg center">SALVAR</button>
  </div>
</div>
</div>
<br>

<script type="text/javascript">

  function checkForEmpty(){
    var x = document.getElementById("questionarios").selectedIndex;
    if (x == 2) {
      var a1 = document.getElementById("semAlt");
      var a2 = document.getElementById("edema");
      var a3 = document.getElementById("cianose");
      var a4 = document.getElementById("hipocor");
      var a5 = document.getElementById("ectoscopia2");
      var a6 = document.getElementById("mvr");
      var a7 = document.getElementById("crep");
      var a8 = document.getElementById("sibilos");
      var a9 = document.getElementById("bNormo");
      var a10 = document.getElementById("bHiper");
      var a11 = document.getElementById("bHipo");
      var a12 = document.getElementById("bAcess");
      var a13 = document.getElementById("bDesdo");
      var a14 = document.getElementById("sAusentes");
      var a15 = document.getElementById("sPresentes");

      if ((a1.checked == false && a2.checked == false && a3.checked == false &&
      a4.checked == false && a5.value == "")||(a6.checked == false && a7.checked
      == false && a8.checked == false)||(a9.checked == false && a10.checked ==
      false && a11.checked == false && a12.checked == false && a13.checked == false)||(a14.checked == false && a15.checked
      == false))
      {
        alert('O(s) campo(s) "ECTOSCOPIA", "BULHAS", "SOPROS" e(ou) "EXAME FÍSICO GERAL",  está(ão) incompleto(s)');
        return false;
      }
    }
  }

</script>
