<?php 
    namespace Projeto\view;
    require_once("../model/Cadastro.php");
    use Projeto\model\Cadastro;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Login</h1>
    <form method="POST">
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
                $usuariobd = $_POST['login'];
                $email = $_POST['email'];
                $senhabd  = $_POST['senhabd'];
            
                $cadastro = new Cadastro($usariobd, $senhabd, $email);//Instanciando a classe
                $_SESSION["cadastro"] = $cadastro;
                header('location: index.php');
            ?>
        </button>
        
    </form>

    <button type="submit"><a href="index.php">Voltar</a></button>
    
</body>
</html>