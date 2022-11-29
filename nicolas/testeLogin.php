<?
    //session_start();
    //print_r($_REQUEST);

    if(isset($_POST['login']) && isset($_POST['senha'])){

        //$cadastros = fopen("cadastros.txt", "r");

        //$leitura = fgets($cadastros);

        //if($cadastros == $_POST['nick'] && $cadastros == $_POST['senha'])
       // {   
           // header('Location: sistema.php');
        
            //fclose($cadastros);
       // }
        //$nick = $_POST['nick'];
       // $senha = $_POST['senha'];

        //$_SESSION['nick'] = $nick;
        //$_SESSION['senha'] = $senha;

        //header('Location: sistema.php');

        //$leitura = fopen("cadastros.txt", "r");

        //while(!feof($leitura)){
          //  $nick = fgets($leitura);
            //$senha = fgets($leitura);
        //}
        $linhas = file("cadastros.txt", 0);
        
        for($i=0;$i<sizeof($linhas);$i++){

            $reg = explode(":", $linhas[$i]);

            //echo "<h3>" . "CADASTRO " . ($i+1) . "</h3>" . "<br>";
            //echo "Nome: ". $reg[0] . "<br>";
            //echo "Nome de usuário: ". $reg[1] . "<br>";
            //echo "E-mail: ". $reg[2] . "<br>";
            //echo "Senha: ". $reg[3] . "<br><br>";
            
            //if(isset($reg[1]) && isset($reg[3])){
            if($reg[1] == $_POST['login'] && $reg[3] == $_POST['senha']) {
                $_SESSION['nome'] = $reg[0];
                $_SESSION['login'] = $reg[1];
                $_SESSION['email'] = $reg[2];
                $_SESSION['senha'] = $reg[4];
                header('Location: sistema.php');
            }
        }

        //echo "<script>window.location='sistema.php';</script>";
    }
    else{
        echo "ELSE";
        //header('Location: login.php');
    }
?>