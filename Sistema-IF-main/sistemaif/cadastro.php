<?php
    session_start();

    if (isset($_SESSION['mensagem']))
    {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IS-CAMUS</title>
</head>
<body>
    <form action="processa_cadastro.php" method="post">
            <label for="nome">Informe seu nome completo</label><br>
            <input type="text" name="nome" id="nome" required/><br><br>
            <label for="nick">Informe seu nome de usuário</label><br>
            <input type="text" name="nick" id="nick" required/><br><br>
            <label for="email">Seu e-mail</label><br>
            <input type="email" name="email" id="email" required/><br><br>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha" id="senha" required/><br><br>
            <input type="submit" value="Cadastrar"/>
    </form>
</body>
</html>