<div class="container">
   
   <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
       <div class="container clearfix width-full text-center">
            <img src="images/oncohearthpr.png" alt="">
            <a class="header-logo"  aria-label="Homepage" >
          </a>
       </div>
    </div>

  <br>
  <h3 class="text-center">RESULTADO: TESTE DE ORIENTAÇÃO DE VIDA (TOV-R)</h3>
  <br>
  <div class="jumbotron">
    
    <h5><b>DADOS DO PACIENTE</b></h5><hr>
    <p><b>PACIENTE: </b><?php echo $pessoa;?></p>
    <p><b>DATA DO EXAME: </b><?php $data = strtotime($data); echo date('d/m/Y', $data);?></p>
    <p><b>IDADE: </b><?php echo $idade5;?> anos</p><hr>

    <h5 class="text-center"><b>RESULTADO</b></h5><br>
    <p>Diante de dificuldade, acho que tudo vai dar certo: <b><?php echo $tovr1;?></b></p>
    <p>Para mim é fácil relaxar: <b><?php echo $tovr2;?></b></p>
    <p>Se alguma coisa pode dar errado comigo, com certeza vai dar errado: <b><?php echo $tovr3;?></b></p>
    <p>Eu sou sempre otimista com relação ao meu futuro: <b><?php echo $tovr4;?></b></p>
    <p>Eu gosto muito dos meus amigos e amigas: <b><?php echo $tovr5;?></b></p>
    <p>Eu considero importante me manter ocupado: <b><?php echo $tovr6;?></b></p>
    <p>Em geral, eu não espero que as coisas vão dar certo para mim: <b><?php echo $tovr7;?></b></p>
    <p>Eu não me incomodo com facilidade: <b><?php echo $tovr8;?></b></p>
    <p>Eu não espero que coisas boas aconteçam comigo: <b><?php echo $tovr9;?></b></p>
    <p>Em geral, eu espero que aconteçam mais coisas boas do que ruins para mim: <b><?php echo $tovr10;?></b></p>
  </div>
</div>
