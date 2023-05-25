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
  </nav>
</body>
  
    <center><title>Tela de Login</title>
    <link rel="stylesheet/css" type="text/css" href="styles.css" />
  
  <body>
    <form action="inicio.php" method="post">
    <div class="row">
      <div class="col-7">
        <h1>Login do cliente</h1>
      </div>
    </div>
    <br>  
    <div class="row">
      <div class="col-7">
        <label for="username">E-mail:</label>
        <input type="text" id="username" placeholder="Digite seu nome" name="username" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-7">
        <label for="password">Senha:</label>
      <input type="password" id="password" placeholder="Digite sua senha" name="password" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-7">
      <input type="submit" value="Continuar">
      <input type="reset" value="Limpar">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-7">
      <a> Não tem cadastro? <a class="nav-link active" href="criarcadastro.php">Cadastre-se </a>
      </div>
      </div>
      </li>
    </form>
  </form>
  <br>

  <!-- Rodapé -->
  <br><br><br><br><br><br><br><br><br>
  
 
  
  <footer class="container-fluid bg-dark text-white text-center py-3">
    <p>Tec Store &copy; 2023</p>
  </footer>
  </body>
</html>
HTML;
}

getCorpo();
?>