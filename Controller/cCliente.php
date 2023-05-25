<?php

   require_once '../Model/Cliente.php';
   require_once '../Model/ClienteDAO.php';


   if (isset($_POST['btnInsere'])) {
      $cliDAO = new ClienteDAO(new Cliente($_POST['txtNome'], $_POST['txtCpf'], $_POST['txtTelefone'], $_POST['txtEmail']));

      if ($cliDAO->insere()) {
         echo "Cliente inserido com sucesso !";
         //header("Location: ../View/login.php");
      } else {
         echo "Erro ao inserir cliente";
      }
   } else if (isset($_POST['btnAtualiza'])) {
      $cliDAO = new ClienteDAO(new Cliente($_POST['txtNome'], $_POST['txtCpf']));
      if ($cliDAO->atualiza()) {
         echo "Cliente atualizado com sucesso !";
         //header("Location: ../View/login.php");
      } else {
         echo "Erro ao atualizar cliente";
      }
   } else if (isset($_POST['btnApaga'])) {
      $cliDAO = new ClienteDAO(new Cliente($_POST['txtNome'], $_POST['txtCpf']));
      if ($cliDAO->apaga()) {
        // echo "Cliente excluido com sucesso !";
        header("Location: ../View/login.php");
      } else {
         echo "Erro ao excluir cliente";
      }
   } else if (isset($_POST['btnLogout'])) {
      // Encerrando uma sessão no Apache
      session_destroy();
      header("Location: ../View/login.php");
   }

?>