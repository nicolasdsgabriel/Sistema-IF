<?php

    //session_start();

    $nome = $_POST['nome'];
    $nick = $_POST['nick'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $cadastros = fopen('cadastros.txt', 'a+', 0);

    $linha = $nome. ":" .$nick. ":" .$email. ":" .$senha. ":\n"; 

    fwrite($cadastros, $linha, strlen($linha));
    
    //fwrite($cadastros, $nome.PHP_EOL);
    //fwrite($cadastros, $nick.PHP_EOL);
    //fwrite($cadastros, $email.PHP_EOL);
    //fwrite($cadastros, $senha.PHP_EOL);

    fclose($cadastros);

    //$_SESSION['mensagem'] = "Pessoa cadastrada com sucesso";

    //header('Location: cadastro.php');

    echo "<script>window.location='cadastro.php';</script>";
?>