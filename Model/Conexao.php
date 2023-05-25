<?php

   class Conexao {

      private $banco = "tec_store";
      private $servidor = "localhost";
      private $usuario = "root";
      private $senha = "";

      public function __construct() {

      }

      public function setBanco($pb) {
         $this->banco = $pb;
      }

      public function getBanco() {
        return $this->banco;
      }

      public function setServidor($ps) {
        $this->servidor = $ps;
      }

      public function getServidor() {
        return $this->servidor;
      }

      public function setUsuario($pu) {
        $this->usuario = $pu;
      }

      public function getUsuario() {
        return $this->usuario;
      }

      private function getSenha() {
        return $this->senha;
      }

      public function getConexao() {
        $con = new PDO("mysql:host=" . $this->getServidor() . ";dbname=" . $this->getBanco(), $this->getUsuario(), $this->getSenha() );
        return $con;
      }
   }

?>