<?php
    namespace Projeto\view;
    namespace Projeto\view;
    require_once("../model/Pessoa.php");
    require_once("../model/Cadastro.php");
    use Projeto\model\Pessoa;
    use Projeto\model\Cadastro;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <Form method="POST">
        <label>Usuario: </label>
        <input type="text" name="nomebd" id="nomebd">
        <br><br>
        <label>Senha: </label>
        <input type ="number" name="senhabd" id="senhabd">
        <br><br>

        <button type = "submit">Entrar
        <?php  
            $usuario = $_POST['nomebd'];
            $senha  = $_POST['senhabd'];

            session_start();

            $pessoa = new Pessoa($usuario, $senha,$_SESSION['cadastro']);//Instanciando a classe
            $pessoa->logar();//Método que faz o login

        ?>
        </button>

        
    </Form>
    <button type = "submit"><a href="cadastrarLogin.php">Cadastrar</a></button>
</body>
</html>