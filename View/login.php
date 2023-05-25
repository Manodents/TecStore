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

  </head>
  <body>
    <h1>Login Usuario</h1>
    <form action="inicio.php" method="post">
    <form><br>
     <h5><label for="username">Usuário:</label>
      <input type="text" id="username" placeholder="Digite seu nome" name="username" required><br><br>
      <label for="password">Senha:</label>
      <input type="password" id="password" placeholder="Digite sua senha" name="password" required><br><br>
      <input type="submit" value="Entrar">
      <input type="reset" value="Limpar"></h5>
    </form>
</center>
  </body>

 
 
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