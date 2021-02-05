<div class="container">
   <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
       <div class="container clearfix width-full text-center">
            <img src="images/oncohearthpr.png" alt="">
            <a class="header-logo"  aria-label="Homepage" >
          </a>
       </div>
    </div>
  <br>
  <div class="page-header text-center">
      <h3>RESULTADO: LAUDO DA ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)</h3>
  </div>
  
  <br>
  <div class="jumbotron">
    <h5><b>DADOS DO PACIENTE</b></h5><hr>
    <p><b>PACIENTE: </b><?php echo $pessoa;?></p>
    <p><b>IDADE: </b><?php echo $idade1;?> anos</p>
    <p><b>DATA DO EXAME: </b><?php $data = strtotime($data); echo date('d/m/Y', $data);?></p><hr>

    <div class="row">
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Probabilidade</th>
      <th scope="col"></th>
      <th scope="col">Resultado</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row">Sentando e lendo</th>
      <td></td>
      <td><?php echo $essbr1;?><td>
    </tr>
    <tr>
      <th scope="row">Assistindo TV</th>
      <td></td>
      <td><?php echo $essbr2;?></td>
    </tr>
    <tr>
      <th scope="row">Sentado, quieto, em um lugar público por exemplo: (teatro, reunião, palestra, etc...)</th>
      <td></td>
      <td><?php echo $essbr3;?></td>
    </tr>
    <tr>
      <th scope="row">Andando de carro por uma hora sem parar, como passageiro</th>
      <td></td>
      <td><?php echo $essbr4;?></td>
    </tr>
    <tr>
      <th scope="row">Ao deitar-se à tarde para descansar, quando possível</th>
      <td></td>
      <td><?php echo $essbr5;?><td>
    </tr>
    <tr>
      <th scope="row">Sentado conversando com alguém</th>
      <td></td>
      <td><?php echo $essbr6;?><td>
    </tr>
    <tr>
      <th scope="row">Sentado quieto após o almoço sem bebida alcoólicas</th>
      <td></td>
      <td><?php echo $essbr7;?><td>
    </tr>
    <tr>
      <th scope="row">Em um carro parado no trânsito por alguns minutos</th>
      <td></td>
      <td><?php echo $essbr8;?><td>
    </tr>
  </tbody>
</table>
  </div>
  </div>
</div>
