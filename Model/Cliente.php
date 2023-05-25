<?php

   class Cliente {

       private $nome;
       private $cpf;
       private $telefone;
       private $email;

       public function __construct($pn="", $pc="", $pt="", $pe="") {
          $this->nome = $pn;
          $this->cpf = $pc;
          $this->telefone = $pt;
          $this->email = $pe;
       }

       public function setNome($pn) {
          $this->nome = $pn;
       }

       public function getNome() {
          return $this->nome;
       }

       public function setCPF($pc) {
          $this->cpf = $pc;
       }

       public function getCPF() {
          return $this->cpf;
       }

       public function setTelefone($pt) {
          $this->idade = $pt;
       }

       public function getTelefone() {
          return $this->telefone;
       }

       public function setEmail($pe) {
          $this->email = $pe;
       }

       public function getEmail() {
          return $this->ativo;
       }
   }

?>