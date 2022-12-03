<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <h1>Lista de cadastros</h1>
    <?php
        $linhas = file("cadastros.txt", 0);
        
        for($i=0;$i<sizeof($linhas);$i++){

            $reg = explode(":", $linhas[$i]);

            echo "<h3>" . "CADASTRO " . ($i+1) . "</h3>" . "<br>";
            echo "Nome: ". $reg[0] . "<br>";
            echo "Nome de usuário: ". $reg[1] . "<br>";
            echo "E-mail: ". $reg[2] . "<br>";
            echo "Senha: ". $reg[3] . "<br><br>";
        }
    ?>
</body>
</html>