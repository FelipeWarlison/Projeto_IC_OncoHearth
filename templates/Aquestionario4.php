<form class="" action="includes/editquestionario.inc.php?tipo=<?php echo $tipo?>&questId=<?php echo $questId?>&pid=<?php echo $pid?>" method="post">
  <br>
  <h3 class="text-center">QUESTIONÁRIO DE INFORMAÇÕES SOCIODEMOGRÁFICAS E DE SAÚDE</h3>
  <h4 class="text-center"><?php echo $pessoa;?></h4>
  <br>
  <div class="form group">
    <label for="endereco">Endereço completo:</label>
    <input required required value="<?php echo $endereco?>" class="form-control q4" type="text" name="endereco" id="endereco" placeholder="Rua, número, ...">
  </div>
  <div class="form-row">
      <div class="form-group col-sm-4">
        <label for="data4">Data:</label>
        <input required value="<?php echo $data?>" type="date" name="data4" class="form-control q4" id="data4">
      </div>
      <div class="form-group col-sm-4">
        <label for="telefone">Telefone para contato:</label>
        <input required value="<?php echo $telefone?>" type="text" name="telefone" class="form-control q4" id="telefone" placeholder="Número com DDD">
      </div>
      <div class="form-group col-sm-4">
        <label for="nascimento4">Data de nascimento:</label>
        <input required value="<?php echo $nascimento4?>" type="date" name="nascimento4" class="form-control q4" id="nascimento4">
      </div>
    </div>
    <div class="form-group">
      <label for="meio">Meio onde vive:</label>
      <select required required class="form-control q4" name="meio" id="meio" >
        <option value= "">Escolha</option>
        <option value="Rural">Rural</option>
        <option value="Urbano">Urbano</option>
      </select>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-6">
        <label for="estCivil">Estado Civil:</label>
        <select required class="form-control q4" name="estCivil" id="estCivil" >
          <option value= "">Escolha</option>
          <option value="Solteira">Solteira</option>
          <option value="Casada">Casada</option>
          <option value="Divorciada">Divorciada</option>
          <option value=" Divorciada com companheiro"> Divorciada com companheiro</option>
          <option value="Viúva">Viúva</option>
          <option value="Viúva com companheiro">Viúva com companheiro</option>
          <option value="União estável"> União estável</option>
        </select>
      </div>
      <div class="form-group col-sm-6">
        <label for="renda">Qual a renda da sua família?</label>
        <select required class="form-control q4" name="renda" id="renda" >
          <option value= "">Escolha</option>
          <option value="Até 1 SM">Até 1 SM</option>
          <option value="Entre 1 SM e 3 SM">Entre 1 SM e 3 SM</option>
          <option value="Entre 3 SM e 6 SM">Entre 3 SM e 6 SM</option>
          <option value="Entre 6 e 9 SM">Entre 6 e 9 SM</option>
          <option value="Acima de 9 SM">Acima de 9 SM</option>
          <option value="Não sabe/Não respondeu">Não sabe/Não respondeu</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-6">
        <label for="cor">Qual a sua cor (raça)?</label>
        <select required class="form-control q4" name="cor" id="cor" >
          <option value= "">Escolha</option>
          <option value="Branca">Branca</option>
          <option value="Preta">Preta</option>
          <option value="Parda">Parda</option>
          <option value="Amarela">Amarela</option>
          <option value="Indígena">Indígena</option>
          <option value="Não sabe/Não respondeu">Não sabe/Não respondeu</option>
        </select>
      </div>
      <div class="form-group col-sm-6">
        <label for="grau">Qual seu grau de instrução? </label>
        <select required class="form-control q4" name="grau" id="grau" >
          <option value= "">Escolha</option>
          <option value="Analfabeto">Analfabeto</option>
          <option value="Elementar incompleto">Elementar incompleto</option>
          <option value="Elementar completo e fundamental incompleto">Elementar completo e fundamental incompleto</option>
          <option value="Fundamental completo e ensino médio incompleto">Fundamental completo e ensino médio incompleto</option>
          <option value="Ensino médio completo e superior incompleto">Ensino médio completo e superior incompleto</option>
          <option value="Superior completo ou mais">Superior completo ou mais</option>
          <option value="Não sabe/Não respondeu">Não sabe/Não respondeu</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="fuma">Você fuma atualmente?</label>
      <select required class="custom-select q4" name="fuma" id="fuma" >
        <option value= "">Escolha</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
        <option value="Parou">Parou</option>
        <option value="Não sabe/Não respondeu">Não sabe/Não respondeu</option>
      </select>
    </div>
    <p>Se não, ignore a seguinte linha:</p>
    <div class="form-row">
        <div class="form-group col-sm-4">
          <label for="fuma1">Fuma o que?</label>
          <input required value="<?php echo $fuma1?>" type="text" name="fuma1" class="form-control" id="fuma1">
        </div>
        <div class="form-group col-sm-4">
          <label for="fuma2">Quantos cigarros fuma por dia?</label>
          <input required value="<?php echo $fuma2?>" type="text" name="fuma2" class="form-control" id="fuma2">
        </div>
        <div class="form-group col-sm-4">
          <label for="fuma3">Com quantos anos começou?</label>
          <input required value="<?php echo $fuma3?>" type="text" name="fuma3" class="form-control" id="fuma3">
        </div>
      </div>
      <div class="form-group">
        <label for="fuma4">Parou há quanto tempo?</label>
        <input required value="<?php echo $fuma4?>" type="text" name="fuma4" class="form-control" id="fuma4">
      </div>
      <div class="form-group">
        <label for="bebe">Você consome bebidas alcoólicas atualmente?</label>
        <select required class="custom-select q4" name="bebe" id="bebe" >
          <option value= "">Escolha</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
          <option value="Parou">Parou</option>
          <option value="Não sabe/Não respondeu">Não sabe/Não respondeu</option>
        </select>
      </div>
      <p>Se não, ignore a seguinte linha:</p>
      <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="bebe1">Com qual frequência?</label>
            <input required value="<?php echo $bebe1?>" type="text" name="bebe1" class="form-control" id="bebe1">
          </div>
          <div class="form-group col-sm-6">
            <label for="bebe2">Qual a quantidade ingerida por semana?</label>
            <input required value="<?php echo $bebe2?>" type="text" name="bebe2" class="form-control" id="bebe2">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="hipertensa">Algum médico já falou que você é hipertensa/pressão alta?</label>
            <select required class="custom-select q4" name="hipertensa" id="hipertensa" >
              <option value= "">Escolha</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
              </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="diabetica">Algum médico já falou que você é diabética?</label>
            <select required class="custom-select q4" name="diabetica" id="diabetica" >
              <option value= "">Escolha</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="colesterol">Algum médico já falou que você tem colesterol alto? </label>
            <select required class="custom-select q4" name="colesterol" id="colesterol" >
              <option value= "">Escolha</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
            </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="arritmia">Algum médico já falou que você tem arritmia cardíaca?</label>
            <select required class="custom-select q4" name="arritmia" id="arritmia" >
              <option value= "">Escolha</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-5">
            <label for="coracao">Algum médico já falou que você tem problema no coração?</label>
            <select required class="custom-select q4" name="coracao" id="coracao" >
              <option value= "">Escolha</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
            </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="cirurgia">Já realizou alguma cirurgia no coração?</label>
            <select required class="custom-select q4" name="cirurgia" id="cirurgia" >
              <option value= "">Escolha</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
            </select>
          </div>
          <div class="form-group col-sm-3">
            <label for="avc">Já teve algum AVC/derrame?</label>
            <select required class="custom-select q4" name="avc" id="avc" >
              <option value= "">Escolha</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="paisCoracao">O seu pai ou a sua mãe tem problema de coração?</label>
            <select required class="custom-select q4" name="paisCoracao" id="paisCoracao" >
              <option value= "">Escolha</option>
              <option value="Sim, meu pai">Sim, meu pai</option>
              <option value="Sim, minha mãe">Sim, minha mãe</option>
              <option value="Sim, meu pai e minha mãe">Sim, meu pai e minha mãe</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
            </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="paisAvc">O seu pai ou a sua mãe teve AVC/derrame?</label>
            <select required class="custom-select q4" name="paisAvc" id="paisAvc" >
              <option value= "">Escolha</option>
              <option value="Sim, meu pai">Sim, meu pai</option>
              <option value="Sim, minha mãe">Sim, minha mãe</option>
              <option value="Sim, meu pai e minha mãe">Sim, meu pai e minha mãe</option>
              <option value="Não">Não</option>
              <option value="Não sei">Não sei</option>
              <option value="Não quero responder">Não quero responder</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="mPrimeira">Qual a sua idade quando menstruou pela primeira vez? (Se não se lembra, responda isso no campo)</label>
          <input required value="<?php echo $mPrimeira?>" type="text" name="mPrimeira" class="form-control q4" id="mPrimeira">
        </div>
        <div class="form-group">
          <label for="mUltima">Qual a sua idade quando menstruou pela última vez? (Se não se lembra ou ainda não aconteceu, responda isso no campo)</label>
          <input required value="<?php echo $mUltima?>" type="text" name="mUltima" class="form-control q4" id="mUltima">
        </div>
        <div class="form-group">
          <label for="anticon">Usa algum anticoncepcional? (Responda sim ou não. Se sim, descreva qual) </label>
          <input required value="<?php echo $anticon?>" type="text" name="anticon" class="form-control q4" id="anticon">
        </div>
        <div class="form-row">
          <div class="form-group col-sm-3">
            <label for="gestacoes">Número de gestações:</label>
            <input required value="<?php echo $gestacoes?>" type="text" name="gestacoes" class="form-control q4" id="gestacoes">
          </div>
          <div class="form-group col-sm-3">
            <label for="nascidosV">N. de nascidos vivos:</label>
            <input required value="<?php echo $nascidosV?>" type="text" name="nascidosV" id="nascidosV" class="form-control q4">
          </div>
          <div class="form-group col-sm-3">
            <label for="nascidosM">N. de nascidos mortos:</label>
            <input required value="<?php echo $nascidosM?>" type="text" name="nascidosM" id="nascidosM" class="form-control q4">
          </div>
          <div class="form-group col-sm-3">
            <label for="partoP">Algum parto prematuro?</label>
            <input required value="<?php echo $partoP?>" type="text" name="partoP" id="partoP" class="form-control q4">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-4">
            <label for="partoN">Algum parto normal?</label>
            <input required value="<?php echo $partoN?>" type="text" name="partoN" class="form-control q4" id="partoN">
          </div>
          <div class="form-group col-sm-4">
            <label for="partoC">Algum parto cesárea?</label>
            <input required value="<?php echo $partoC?>" type="text" name="partoC" id="partoC" class="form-control q4">
          </div>
          <div class="form-group col-sm-4">
            <label for="aborto">Algum aborto espontâneo?</label>
            <input required value="<?php echo $aborto?>" type="text" name="aborto" id="aborto" class="form-control q4">
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
</form>
