<?php

    session_start();

    unset($_SESSION['nome']);
    unset($_SESSION['login']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location: login.php')

?>