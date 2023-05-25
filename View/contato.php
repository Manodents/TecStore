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
        <li class="nav-item ">
          <a class="nav-link active" href="contato.php">Contato</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link active" href="Entrar.php">Entrar</a>
        </li>   
      </ul>
    </div>  
  </nav>

  <section id="contato">
    <h2>Contato</h2>
    <address>
     Rua Av. dos Três Poderes, 375<br>
      Bairro Residencial Central Parque<br>
      Salto/São Paulo<br>
      CEP: 13325-047<br>
    </address>
    <ul>
      <li>Telefone:</li> <a href="tel:+551146029191">(11)4602-9191 </a> 
      <li>E-mail:</li>
      <a href="mailto:mateus.musto@aluno.ifsp.edu.br">mateus.musto@aluno.ifsp.edu.br</a>
      <br>
      <a href="mailto:t.fernanda@aluno.ifsp.edu.br">t.fernanda@aluno.ifsp.edu.br</a>
    </ul>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1833.7787373169913!2d-47.30395468658203!3d-23.186345915436696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf53972da3336f%3A0xceb3df208b4b53a4!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%2C%20Campus%20Salto!5e0!3m2!1spt-BR!2sbr!4v1683629986686!5m2!1spt-BR!2sbr " width="1515" height="450" style="border:0;" allowfullscreen="" loading="lazy"> referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
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
