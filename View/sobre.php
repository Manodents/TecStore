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
   <center><title>Quem somos </title>
    <link rel="stylesheet/css" type="text/css" href="styles.css" />

  </head>
  <body>
    <form>
    <h1>Bem vindo a Tec Store</h1>
        <div class="col-sm-6">
      
            <h5>Somos uma empresa focada em oferecer serviços com alta qualidade.
              <br>
              Visamos oferecer a melhor solução para nossos clientes em meio as suas necessidades.
<br>
              Dessa forma nos integramos aos processos e pessoas de sua empresa, tornando assim os resultados mais eficientes e objetivos.
              
              Nosso trabalho é agregar valor aos negócios de nossos clientes, com qualidade, eficiência e segurança proporcionado um excelente custo benefício.
              
              Somos parceiros das melhores empresas de tecnologia do mercado para  oferecer nada menos que o melhor ao cliente, seja em Campanhas, Ações, Atendimento ou Vendas.</h5>

            </center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
            <h2>Principais clientes</h2>
            <div class="col-sm">
              <img src="img/ype.jpg" width="290" height="200" alt="" loading="lazy" />
              <img src="img/Vale.png" width="290" height="120" alt="" loading="lazy" />
              <img src="img/apple.png" width="290" height="160" alt="" loading="lazy" />
              <img src="img/santander.png" width="290" height="190" alt="" loading="lazy" />
              <img src="img/lojascem.png" width="290" height="160" alt="" loading="lazy" />
              
              
            </center>

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
          