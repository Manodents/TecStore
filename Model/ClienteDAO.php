<?php
   class ClienteDAO {
   private $con;
   private $cli;


   public function __construct($pc) {
       require_once 'Conexao.php';
       require_once 'Cliente.php';
       
       $db = new Conexao();
       $this->con = $db->getConexao();

       $this->cli = $pc;
   }

   public function insere() {
       try {
          $sql = <<<HTML
             INSERT INTO cliente (NOME, CPF, TELEFONE, EMAIL) 
             VALUES (?,?,?,?)
HTML;

          $cmd = $this->con->prepare($sql);
          $cmd->execute([$this->cli->getNome(), $this->cli->getCpf(), $this->cli->getTelefone(), $this->cli->getEmail()]);

          return true;

       } catch(Exception $ex) {
          echo "Erro: " . $ex->getMessage();
          return false;
       }
   }

   public function atualiza() {
      try {
         $sql = <<<HTML
            UPDATE cliente SET NOME=?, CPF=?, TELEFONE=?, EMAIL=?
            WHERE CPF_CLIENTE = ?
HTML;

         $cmd = $this->con->prepare($sql);
         $cmd->execute([$this->cli->getNome(), $this->cli->getCpf(), $this->cli->getTelefone(), $this->cli->getEmail()]);

         return true;

      } catch(Exception $ex) {
         echo "Erro: " . $ex->getMessage();
         return false;
      }
   }

   public function apaga() {
      try {
         $sql = <<<HTML
            DELETE FROM cliente
            WHERE CPF_CLIENTE = ?
HTML;

         $cmd = $this->con->prepare($sql);
         $cmd->execute([$this->cli->getCPF()]);

         return true;

      } catch(Exception $ex) {
         echo "Erro: " . $ex->getMessage();
         return false;
      }
   }

   public function lista() {

      $sql = <<<SQL
          SELECT CPF_CLIENTE AS CPF,
                 NOME,
                 CPF,
                 TELEFONE,
                 EMAIL
          FROM cliente
SQL;

      $cmd = $this->con->query($sql);
      $registros = $cmd->fetchAll();

      $html = <<<HTML
         <br>
         <div class="offset-3">
         <div class="row ">
            <div class="col-sm-1 col-md-1 col-lg-1 tituloLista text-center">
               Nome
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 tituloLista">
               CPF
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 tituloLista text-center">
               Telefone
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 tituloLista">
               Email
            </div>
         </div>
HTML;

      $i = 1;
      foreach ($registros as $linha) {
         $html .= <<<HTML
               <div class="col-sm-2 col-md-2 col-lg-2 text-center">
                  <button name="btnApaga" type="submit" class="btn btn-danger" > Excluir </button>
                  </form>
                  <form action="../View/frmClienteEdit.php" method="post" >
                     <input type="hidden" value="{$linha['NOME']}" name="txtNome" >
                     <input type="hidden" value="{$linha['CPF']}" name="txtCPF" >
                     <input type="hidden" value="{$linha['TELEFONE']}" name="txtTelefone" >
                     <input type="hidden" value="{$linha['EMAIL']}" name="txtEmail" >
                     <button name="btnAtualiza" class="btn btn-info" > Editar </button>
                  </form>
               </div>
            </div>
HTML;
        $i++;
      }

      $html .= "</div>";

      echo $html;
   }
   }
?>