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
    <title>Bem-Vindo</title>
</head>
<body>
    
    
    <div class="info">
        <h1>Olá Seja Bem-Vindo</h1>
        <br><br>
        <h3>Tarefas</h3>
        <button><a href="cadastrarTF.php">Cadastrar</a></button>
        <button><a href="consultarTF.php">Consultar</a></button>
    </div>
</body>
</html>