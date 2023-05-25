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
          <div class="col-sm-11">
          <a class="nav-link active" href="Entrar.php">Faça seu login ou cadastre-se</a>
        </li>   
      </ul>
    </div>  
  </nav>
  <title>Exemplo de imagem HTML</title>
<body>
  <center> 
    
<div style="position: relative;">
   <img src="img/atualizada.jpg" width="1920" height="889" alt="" loading="lazy" />
    <div style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%);">
      <p style="font-size: 120px;">Tec Store</p>
    </div>      
</div>
  <div class="texto-apresentacao">
  </center>
</div>
</body>
</head>
</html>
HTML;
}


getCorpo();
?>
