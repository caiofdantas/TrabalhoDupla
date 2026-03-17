<?php 
    namespace Projeto\view;
    require_once("../model/Pessoa.php");
    use Projeto\model\Pessoa;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar</title>
</head>
<body>
    <div>
        <form method="POST"class="Info">
            <h1>Cadastro</h1>
            <label>Nome: </label>
            <input type="text" name="login" id="login">
            <br><br>
            <label>E-mail: </label>
            <input type="text" name="email" id="email">
            <br><br>
            <label>Senha: </label>
            <input type="number" name="senhabd" id="senhabd">
            <br><br>
            <button type="submit">Cadastrar
                <?php
                    session_start();
                    if(isset($_POST['login'])){
                        $login = $_POST['login'];
                        $email = $_POST['email'];
                        $senha  = $_POST['senhabd'];
                        $cadastro = new Pessoa($login, $senha, $email);//Instanciando a classe
                        $_SESSION['login'] = $login;
                        $_SESSION['senha'] = $senha;
                    }
                ?>
            </button>
            <br><br>
            <button><a href="login.php">Já tem login? Clique aqui </a></button>
        </form>
    </div>
</body>
</html>