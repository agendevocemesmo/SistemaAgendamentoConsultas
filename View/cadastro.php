<?php
require_once ("../Controller/usuarioDAO.php");
require_once("../Model/usuario/usuario.php");

require_once ("../Controller/senhaDAO.php");
require_once("../Model/usuario/senha.php");


$usuarioDAO = new usuarioDAO();
$senhaDAO = new senhaDAO();

$usuario = new usuario();
$senha = new senha();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro </title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="shortcut icon" href="img/favicon.ico" />
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <h1> Cadastre-se </h1>
            <br />
            <form method="post" name="frmCadastro">
                <table>
                    <input type="text" name="utipo" style="display:none;" value="1">
                    <tr>
                        
                        <td>Nome:</td>
                        <td><input type="text" name="txtNome" placeholder="Joãozinho josé" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="text" name="txtEmail" placeholder="email@dominio.com" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" type="password" id="txtPass" name="txtPass" placeholder="*********" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Confirmar senha:</td>
                        <td><input type="password" onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" id="txtPassAccept" name="txtPassAccept" placeholder="*********" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <input type="text" name="txt1" style="display:none;" value="1">
                        <td>Sexo:</td>
                        <td>
                            <select name="slSexo">
                                <option value="m">Masculino</option>
                                <option value="f">Feminino</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="btnSubmit" value="Cadastrar" class="btnSubmit" /> <a href="../index.php">Voltar</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

<?php
if (isset($_POST['btnSubmit'])) {
    $usuario->setUs_nome($_POST['txtNome']);
    $usuario->setUs_email($_POST['txtEmail']);
    $usuario->setUs_sexo($_POST['slSexo']);
    $usuario->setTipo($_POST['utipo']);

    if (!$usuarioDAO->consultarEmail($_POST['txtEmail'])) {

        if ($usuarioDAO->cadastrar($usuario)) {

            $codigoUsuario = $usuarioDAO->consultarCodUsuario($_POST['txtEmail']);

            $senha->setUS_senha($_POST['txtPassAccept']);
            $senha->setUs_cod($codigoUsuario);

            if ($senhaDAO->cadastrar($senha)) {
                ?>
                <script type = "text/javascript">
                    document.getElementById("resultadoCadastro").innerHTML = "Cadastrado com sucesso.";
                    document.getElementById("resultadoCadastro").style.color = "green";</script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    document.getElementById("resultadoCadastro").innerHTML = "Erro ao cadastrar.";
                    document.getElementById("resultadoCadastro").style.color = "red";</script>
                <?php
            }
        }
    } else {
        ?>
        <script type="text/javascript">
            document.getElementById("resultadoCadastro").innerHTML = "O E-mail informado jรก esta cadastrado.";
            document.getElementById("resultadoCadastro").style.color = "red";</script>
        <?php
    }
}
?>
