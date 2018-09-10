<?php

require_once("Conexao.php");

class usuarioDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    function cadastrar(usuario $entUsuario) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO usuario VALUES ('', :us_nome, :us_email, :us_sexo, :us_ip)");
            $param = array(
                ":us_nome" => $entUsuario->getUs_nome(),
                ":us_email" => $entUsuario->getUs_email(),
                ":us_sexo" => $entUsuario->getUs_sexo(),
                ":us_ip" => $_SERVER["REMOTE_ADDR"]
            );

            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo "ERRO 01: {$ex->getMessage()}";
        }
    }

    
}

?>