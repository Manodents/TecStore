<?php
   class LoginDAO {
    private $con;
    private $log;


    public function __construct($pl) {
        require_once 'Conexao.php';
        require_once 'Login.php';
       
        $db = new Conexao();
        $this->con = $db->getConexao();

        $this->log = $pl;
    }

    public function verifica() {
        try {
        
            $sql = <<<SQL
                SELECT SENHA,
                     NOME
                FROM usuario
                WHERE NOME = ?
                AND SENHA = ?
SQL;

         
            $cmd = $this->con->prepare($sql);

            $cmd->execute([$this->log->getUsuario(), $this->log->getSenha()]);

            $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
           
          
            foreach ($resultado as $idx=>$linha) {
                // Abrindo uma sessão
                session_start();
                $_SESSION['usuario'] = $linha['USUARIO'];
                $_SESSION['senha'] = $linha['SENHA'];
                return true;
            }

            return false;

        } catch (Exception $ex) {
            session_destroy();
            return false;
        }
       
    }
}