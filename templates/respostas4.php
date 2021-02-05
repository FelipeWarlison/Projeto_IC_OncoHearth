<div class="container">
     <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
       <div class="container clearfix width-full text-center">
            <img src="images/oncohearthpr.png" alt="">
            <a class="header-logo"  aria-label="Homepage" >
          </a>
       </div>
    </div>
  <br>
  <h3 class="text-center">RESULTADO: QUESTIONÁRIO DE INFORMAÇÕES SOCIODEMOGRÁFICAS E DE SAÚDE</h3>
  <br>
  <div class="jumbotron">
    <h5><b>DADOS DO PACIENTE</b></h5><hr>

    <p><b>PACIENTE: </b><?php echo $pessoa;?></p>
    <p><b>CONTATO: </b><?php echo $telefone;?></p>
    <p><b>DATA DE NASCIMENTO: </b><?php $nascimento4 = strtotime($nascimento4); echo date('d/m/Y', $nascimento4);?></p>
    <p><b>ENDEREÇO: </b><?php echo $endereco;?></p>
    <p><b>DATA DO EXAME: </b><?php $data = strtotime($data); echo date('d/m/Y', $data);?></p><hr>
    
    <h5 class="text-center"><b>QUESTIONÁRIO:</b></h5>

    <p>Meio onde vive: <b><?php echo $meio;?></b></p>
    <p>Estado Civil: <b><?php echo $estCivil;?></b></p>
    <p>Qual a renda da sua família? <b><?php echo $renda;?></b></p>
    <p>Qual a sua cor (raça)? <b><?php echo $cor;?></b></p>
    <p>Qual seu grau de instrução? <b><?php echo $grau;?></b></p>
    <p>Você fuma atualmente? <b><?php echo $fuma;?></b></p>
    <p>Fuma o que? <b><?php echo $fuma1;?></b></p>
    <p>Quantos cigarros fuma por dia? <b><?php echo $fuma2;?></b></p>
    <p>Com quantos anos começou? <b><?php echo $fuma3;?></b></p>
    <p>Parou há quanto tempo? <b><?php echo $fuma4;?></b></p>
    <p>Você consome bebidas alcoólicas atualmente?: <b><?php echo $bebe;?></b></p>
    <p>Com qual frequência? <b><?php echo $bebe1;?></b></p>
    <p>Qual a quantidade ingerida por semana? <b><?php echo $bebe2;?></b></p>
    <p>Algum médico já falou que você é hipertensa/pressão alta? <b><?php echo $hipertensa;?></b></p>
    <p>Algum médico já falou que você é diabética? <b><?php echo $diabetica;?></b></p>
    <p>Algum médico já falou que você tem colesterol alto? <b><?php echo $colesterol;?></b></p>
    <p>Algum médico já falou que você tem arritmia cardíaca? <b><?php echo $arritmia;?></b></p>
    <p>Algum médico já falou que você tem problema no coração? <b><?php echo $coracao;?></b></p>
    <p>Já realizou alguma cirurgia no coração? <b><?php echo $cirurgia;?></b></p>
    <p>Já teve algum AVC/derrame? <b><?php echo $avc;?></b></p>
    <p>O seu pai ou a sua mãe tem problema de coração? <b><?php echo $paisCoracao;?></b></p>
    <p>O seu pai ou a sua mãe teve AVC/derrame? <b><?php echo $paisAvc;?></b></p>
    <p>Qual a sua idade quando menstruou pela primeira vez? <b><?php echo $mPrimeira;?></b></p>
    <p>Qual a sua idade quando menstruou pela última vez? <b><?php echo $mUltima;?></b></p>
    <p>Usa algum anticoncepcional?  <b><?php echo $anticon;?></b></p>
    <p>Número de gestações: <b><?php echo $gestacoes;?></b></p>
    <p>N. de nascidos vivos: <b><?php echo $nascidosV;?></b></p>
    <p>N. de nascidos mortos: <b><?php echo $nascidosM;?></b></p>
    <p>Algum parto prematuro? <b><?php echo $partoP;?></b></p>
    <p>Algum parto normal? <b><?php echo $partoN;?></b></p>
    <p>Algum parto cesárea? <b><?php echo $partoC;?></b></p>
    <p>Algum aborto espontâneo? <b><?php echo $aborto;?></b></p>
  </div>
</div>
