<?php

   require_once '../Model/Login.php';
   require_once '../Model/LoginDAO.php';

   $dao = new LoginDAO(new Login($_POST['txtNome'], $_POST['txtSenha']));

   if ( $dao->verifica() ) {
      echo "OK";
      //header("Location: ../View/login.php");
   } else {
      echo "Usuário ou senha inválido !";
      //header("Location: ../View/login.php");
   }

?>