<?php

   class Login {
      private $nome;
      private $senha;

      public function __construct($pn, $ps) {
         $this->nome = $pn;
         $this->senha = $ps;
      }

      public function setNome($pn) {
        $this->nome = $pn;  
      }

      public function getNome() {
        return $this->nome;
      }

      public function setSenha($ps) {
        $this->senha = $pe;  
      }

      public function getSenha() {
        return $this->senha;  
      }
   }


?>