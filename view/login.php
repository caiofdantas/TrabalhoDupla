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
    <title>Login</title>
</head>
<body>
    <div class="info">
        <Form method="POST">
            <h1>Login</h1>
            <label>Usuario: </label>
            <input type="text" name="nomebd" id="nomebd">
            <br><br>
            <label>Senha: </label>
            <input type ="number" name="senhabd" id="senhabd">
            <br><br>
            <button type="submit">Entrar
                <?php  
                    if(isset($_POST['nomebd'])){
                        $usuario = $_POST['nomebd'];
                        $senha  = $_POST['senhabd'];

                        $_SESSION['login'] = " ";
                        $_SESSION['senha'] = " ";
                        session_start();
                        if($_SESSION['login'] == $usuario && $_SESSION['senha'] == $senha){
                            header('location:tarefas.php');
                        }else{
                            echo "Não funcionou!";
                        }
                    }
                ?>
            </button>
        </Form>
    </div>
</body>
</html>