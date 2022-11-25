<?php

    session_start();

    $nome = $_POST['nome'];
    $nick = $_POST['nick'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $cadastros = fopen('cadastros.txt', 'a');
    
    fwrite($arquivo, $nome.PHP_EOL);
    fwrite($arquivo, $nick.PHP_EOL);
    fwrite($arquivo, $email.PHP_EOL);
    fwrite($arquivo, $senha.PHP_EOL);

    fclose($cadastros);

    $_SESSION['mensagem'] = "Pessoa cadastrada com sucesso";

    header('Location: formulario.php');

?>