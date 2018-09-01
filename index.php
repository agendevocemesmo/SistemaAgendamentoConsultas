<?php
session_start();
require_once ("Controller/usuarioDAO.php");

$usuarioDAO = new usuarioDAO();

if (isset($_POST['btnSubmit'])) {

    if ($usuarioDAO->login($_POST['txtEmail'], $_POST['txtPassword'])) {

        $_SESSION['logado'] = '1';
		$_SESSION['nome'] = $usuarioDAO->RetornaNome($_POST['txtEmail']);
	  
	  header ("Location: huebr.html");
    } else {
        ?>
        <script type="text/javascript">
            alert("Usuário ou senha inválido.");
        </script>
        <?php
    }
}

if (isset($_GET['erro'])) {
    switch ($_GET['erro']) {
        case "1":
            ?>
            <script type="text/javascript">
                alert("Você não tem permissão para acessar o painel.");
            </script>
            <?php
            break;
        case "2":
            ?>
            <script type="text/javascript">
                alert("Você saiu do painel.");
            </script>
            <?php
            break;
    }
}

if ($_SESSION['logado'] == 1) {
   header ("Location: huebr.html");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title> 
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="shortcut icon" href="img/favicon.ico" />
    </head>
    <body>
        <div class="centerLogin">
            <form method="post" name="frmLogin">          

                <div class="emailLogin formularioLogin">
                    <img src="img/user.png" alt="E-mail" />
                    <input type="text" name="txtEmail" placeholder="email@dominio.com" autocomplete="off" />
                </div>

                <div class="senhaLogin formularioLogin">
                    <img src="img/pass.png" alt="Senha" />
                    <input type="password" name="txtPassword" placeholder="************" autocomplete="off" />
                </div>

                <input type="submit" name="btnSubmit" value="Login" class="btnSubmitLogin" />

                <a href="View/cadastro.php">Cadastrar-se</a> |  <a href="recuperarSenha.php">Recuperar Senha</a>
            </form>
        </div>
    </body>
</html>
