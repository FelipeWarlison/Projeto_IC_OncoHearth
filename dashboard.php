<?php
  session_start();
  if (!isset($_SESSION['userUid'])) {
  header("Location: index.php?log=out");
}
?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Projeto OncoHeart</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <style type="text/css">
            .hidden{
                display: none;
            }
           
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
         <!-- bootstrap CSS -->
         <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap-grid.min.css">
         <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap.min.css">
    
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
      $("#formBusca").submit(function(event){
        event.preventDefault();
        var busca = $("#inputBusca").val();
        $("#exibePacientes").load("buscaPacientes.php", {
          busca: busca
        });
      });
    });
    </script>

    <script>
        function mostrapaciente(){
            if(document.getElementById('mp').style.display === 'block'){
            document.getElementById('mp').style.display = 'none';
           }else {
            document.getElementById('mp').style.display = 'block';
            }
        }
        function editarpaciente()
        {
            if(document.getElementById('ep').style.display === 'block'){
            document.getElementById('ep').style.display = 'none';
           }else {
            document.getElementById('ep').style.display = 'block';
            }
        }
    </script>

    </head>
    <body>

<!--wrapper start-->
<div class="wrapper">
    <!--header menu start-->
    <div class="header">
        <div class="header-menu">
            <div class="title">PROJETO <span>ONCOHEART</span></div>        
                <ul>
                    <li><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="includes/logout.inc.php"><i class="fas fa-power-off"></i></a></li>
                </ul>
        </div>
    </div>
    <!--header menu end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <center class="profile">
                <img src="images\user.png" alt="">
                    <p class="card-text"><?php echo $_SESSION['userUid']; ?></p>
            </center>
            <li class="item">
                <a href="#" class="menu-btn">
                    <i class="fas fa-desktop"></i><span>Página Inicial</span>
                </a>
            </li>
            <li class="item" id="profile">
                <a href="#profile" class="menu-btn">
                    <i class="fas fa-user-md"></i><span>Administrativo <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
                <div class="sub-menu">
                    <a href="#"><i class="fas fa-user"></i><span>Adicionar Usuário</span></a>
                    <a href="#"><i class="fas fa-image"></i><span>Alterar imagen</span></a>
                </div>
            </li>
            <li class="item" id="messages">
                <a href="#messages" class="menu-btn">
                    <i class="fas fa-user"></i><span>Pacientes <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
                <div class="sub-menu">
                    <a href="#" onclick="mostrapaciente('mp')"><i class="fas fa-user"></i><span>Lista de Pacintes</span></a>
                    <a href="#" onclick="editarpaciente('ep')"><i class="fas fa-user"></i><span>Editar Paciente</span></a>
                </div>
            </li>
            <li class="item">
                <a href="includes/logout.inc.php" class="menu-btn">
                    <i class="fas fa-times-circle"></i><span>Sair</span>
                </a>
            </li>
        </div>
    </div>
    <!--sidebar end-->
    <!--main container start-->
    <div class="main-container">
        <div id="ep" class="container clearfix width-full text-center hidden">
            <img src="images/oncohearthpr.png" alt="">
        </div>
        <div id="mp" class="jumbotron dasboard-panel hidden">
            <div class="search-bar-btn d-flex justify-content-between">
                <div class="row">
                    <form action="includes\addpaciente.inc.php" method="post">
                        <div class="form-inline form-block">
                            <input type="text" name="Pnome" class="form-control" id="nomePaciente" placeholder="Adicionar um paciente">
                            <button type="submit" name="add-pessoas-submit" type="button" class="btn btn-outline-dark"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form id="formBusca" method="post" action="buscaPacientes.php" class="form-inline form-block">
                        <input id="inputBusca" class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button id="botaoBusca" class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="dashboard-table" id="exibePacientes">
                <?php
                    include_once("database/db.dashboard.php");
                    $sql = "SELECT * FROM pessoas;";
                    $result = mysqli_query($conn, $sql);
                ?>
                <table class="table table-hover table-striped table-responsive-sm">
                    <thead>
                        <tr>
                           <th>Pacientes</th>
                           <th>Ações</th>
                        </tr>
                    </thead>
                    <?php while ($linha = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $linha['nome']?></td>
                        <td><a href="registros.php?paciente=<?php echo $linha['pid']?>" class="btn btn-danger" type="button" name="ver">Ver</a></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
    <!--main container end-->
</div>
<!--wrapper end-->

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>

    </body>
</html>
      