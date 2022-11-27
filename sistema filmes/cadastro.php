<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="processa_cadastro.php" method="post">
         
        <a href="home.php">Voltar</a>
        <a href="registros.php">Lista de cadastros</a>
        <div>
            <h1>CADASTRO</h1>
            <input type="text" name="nome" id="nome" required placeholder="Nome"/><br><br>
            <input type="text" name="nick" id="nick" required placeholder="Nome de usuário"/><br><br>
            <input type="email" name="email" id="email" required placeholder="E-mail"/><br><br>
            <input type="password" name="senha" id="senha" required placeholder="Senha"/><br><br>
            <input type="submit" value="Cadastrar"/>
        </div>

    </form>
</body>
</html>