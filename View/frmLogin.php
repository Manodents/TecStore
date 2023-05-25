<?php
   require_once '../Model/ClienteDAO.php';
   require_once '../Model/Cliente.php';

   $dao = new ClienteDAO(new Cliente());

        getForm("../Controller/cLogin.php");
            getCampo("txtNome", "Nome", "text");
            getCampo("txtSenha", "Senha", "password");
     
        getForm("../Controller/cLogin.php", true);
    getCaixa();

   getCorpo(true);

   getFim();

?>