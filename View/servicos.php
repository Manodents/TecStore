<?php

    function getCorpo() {
        echo <<<HTML
<html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">TEC STORE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="inicio.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="servicos.php">Serviços</a>
        </li>
        <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link active" href="sobre.php">Quem Somos</a>
          </li>
          <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="equipe.php">Nossa Equipe</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link active" href="contato.php">Contato</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active" href="Entrar.php">Entrar</a>
        </li>   
      </ul>
    </div>  
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <center><h1>Serviços</h1>
      <p>Oferecemos os seguintes serviços:</p></center>
    </div>
  </div>

  <!-- Serviços -->
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3>Serviços Eletrônicos</h3>
        <p>Consertos em Geral.</p>
      </div>
      <div class="col-sm-4">
        <h3>Serviços Online</h3>
        <p>Atendemos você no conforto da sua casa.</p>
      </div>
      <div class="col-sm-4">
        <h3>Serviços Técnicos</h3>
        <p>Resolvemos seu problema com precisão.</p>
      </div>
    </div>
  </div>
  <br>
  
  <!-- Rodapé -->
  <footer class="container-fluid bg-dark text-white text-center py-3">
    <p>Tec Store &copy; 2023</p>
  </footer>

</body>
</html>
HTML;
}


getCorpo();
?>
