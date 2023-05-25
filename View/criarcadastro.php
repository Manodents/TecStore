<?php

    function getCorpo() {
        echo <<<HTML
<html>
  <head>
    <center><title>Tela de Login</title>
    <link rel="stylesheet/css" type="text/css" href="styles.css" />
  </head>
  <body>
    <h1>Cadastro do cliente</h1>
</center>
    <form action="inicio.php" method="post">
    <form>
     <h3><label for="username">Nome completo:</label>
        <input type="text" id="username" placeholder="Digite seu nome completo" name="username" required><br><br>
        <label for="username">CPF:</label>
      <input type="text" id="username" placeholder="Digite seu cpf" name="usercpf" required><br><br>
      <label for="username">E-mail:</label>
      <input type="text" id="username" placeholder="Digite seu e-mail" name="useremail" required><br><br>
      <label for="username">Endereço:</label>
      <input type="text" id="username" placeholder="Digite seu endereco" name="userendereco" required><br><br>
      <label for="username">CEP:</label>
      <input type="text" id="username" placeholder="Digite seu cep" name="usercep" required><br><br>
      <label for="password">Digite uma Senha:</label>
      <input type="password" id="password" placeholder="Digite sua senha" name="password" required><br><br>
      <input type="submit" value="Cadastrar">
      <input type="reset" value="Limpar"></h3>
      </li>
    </form>

  </body>
</html>
HTML;
}

getCorpo();
?>