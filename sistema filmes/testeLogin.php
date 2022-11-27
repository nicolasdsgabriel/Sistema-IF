<?
    //session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && isset($_POST['nick']) && isset($_POST['senha'])){

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

        $leitura = fopen("cadastros.txt", "r");

        while(!feof($leitura)){
            $nick = fgets($leitura);
            $senha = fgets($leitura);
        }

        //echo "<script>window.location='sistema.php';</script>";
        header('Location: sistema.php');
    }
    else{

        header('Location: login.php');
    }
?>