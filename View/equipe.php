<?php

    function getCorpo() {
        echo <<<HTML
<html>
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
   <center><title>Nossa Equipe </title>
    <link rel="stylesheet/css" type="text/css" href="styles.css" />

  </head>
  <body>
    <form>
    <h1>Nossa Equipe</h1>
        <div class="col-sm-9">
      
            <h5>Não gostamos de chamar nossa equipe de funcionarios, mas de "colaboradores", pessoas que trabalham juntas para um proposito comum,
                e nós proporcionamos a eles um ambiente de trabalho agradável, seguro e sustentavel.
                <br>
              Temos profissionais altamente qualificados e comprometidos com a qualidade entregue de nosso trabalho.
              Sempre com a visão de trazer o melhor resultado.
<br>
            </center>
            <br><br><br><br><br><br><br>
          
            <div class="col-sm">
          <center>
              <img src="img/mateus.jpeg" width="210" height="260" alt="" loading="lazy" />   
              <img src="img/thay.jpeg" width="210" height="260" alt="" loading="lazy" />
              <img src="img/Lara.jpeg" width="230" height="260" alt="" loading="lazy" />
              <img src="img/lucas.jpeg" width="210" height="260" alt="" loading="lazy" />
              <img src="img/marcos.png" width="190" height="260" alt="" loading="lazy" />
              
              
            </center>
            </div>
             <!-- Rodapé -->
  <footer class="container-fluid bg-dark text-white text-center py-3">
    <p>Tec Store &copy; 2023</p>
  </footer>
            </body>
            </div>
            </form>
            </html>
HTML;
          }
          
          
          getCorpo();
          ?>