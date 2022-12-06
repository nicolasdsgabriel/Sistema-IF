<?php
    //session_start();

    //if(isset($_SESSION['nick']) && isset($_SESSION['senha']))
    //{
       // print_r($_SESSION['nick']);
       // print_r($_SESSION['senha']);
   // }
   //session_start();

   //echo $_SESSION['nick'];
   //echo $_SESSION['senha'];
//?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slash</title>
    <!--<link rel="stylesheet" type="text/css" href="estilos.css" media="screen">-->
</head>
<body>
    <header class="sistema-cabeçalho">
        <img class="sistema-cabeçalho-img" src="img/slashcrit.png" alt="Logo do site">
        <nav class="cabeçalho-menu">
            <a href="home.php" class="cabeçalho-voltar">Voltar</a>
            <a href="logout.php" class="cabeçalho-logout">Sair</a>
        </nav>
    </header>
    <main class="conteudo">
        <form action="processa_avaliacao.php" method="POST">
            <div>
                <h1>Filmes</h1>
                <ol class="lista_filmes">
                    <li>
                        <img src="img/paranormal.jpg" />
                        <h3>Atividade Paranormal</h3>
                        <p>Data lançamento: 2007</p>
                        <p>Diretor: Oren Peli</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" dvalue="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5"name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/rosemary.jpg" />
                        <h3>O bebê de Rosemary</h3>
                        <p>Data lançamento: 1969</p>
                        <p>Diretor: Roman Polanski</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/cemiterio_maldito.jpg" />
                        <h3>Caemitério Maldito</h3>
                        <p>Data lançamento: 1989</p>
                        <p>Diretor: Mary Lambert</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul> 
                    </li>
                    <li>
                        <img src="img/corra_recorte.jpg" />
                        <h3>Corra !</h3>
                        <p>Data lançamento: 2017</p>
                        <p>Diretor: Jordan Peele</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/despertar_mortos.jpg" />
                        <h3>O despertar dos Mortos Vivos</h3>
                        <p>Data lançamento: 1980</p>
                        <p>Diretor: George A. Romero</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/exorcista.jpg" />
                        <h3>O exerocista</h3>
                        <p>Data lançamento: 1973</p>
                        <p>Diretor: William Friedkin</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/frank.jpg" />
                        <h3>Frankenstein</h3>
                        <p>Data lançamento: 1931</p>
                        <p>Diretor: James Whale</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/freddie.jpg" />
                        <h3>A Hora do Pesadelo</h3>
                        <p>Data lançamento: 1984</p>
                        <p>Diretor: Wes Craven</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/grito.jpg" />
                        <h3>O Grito</h3>
                        <p>Data lançamento: 2020</p>
                        <p>Diretor: Nicolas Pesce</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/halloween.jpg" />
                        <h3>Halloween</h3>
                        <p>Data lançamento: 1978</p>
                        <p>Diretor: Jhon Carpnter</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/iluminado.jpg" />
                        <h3>O Iluminado</h3>
                        <p>Data lançamento: 1980</p>
                        <p>Diretor: Stanley Kubrick</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/jogos_mortais.jpg" />
                        <h3>Jogos Mortais</h3>
                        <p>Data lançamento: 2004</p>
                        <p>Diretor: James Wan</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/kadaver.jpg" />
                        <h3>Kadaver</h3>
                        <p>Data lançamento: 2020</p>
                        <p>Diretor: Jarand Herdal</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/lobisomen.jpg" />
                        <h3>O Lobisomen</h3>
                        <p>Data lançamento: 1941</p>
                        <p>Diretor: George Waggner</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/letherface.jpg" />
                        <h3>O Massacre da Serra Elétrica</h3>
                        <p>Data lançamento: 1974</p>
                        <p>Diretor: Tobe Hooper</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/nao_olhe.jpg" />
                        <h3>Não, não olhe</h3>
                        <p>Data lançamento: 2022</p>
                        <p>Diretor: Jordan Peele</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/olhos_famintos.jpg" />
                        <h3>Olhos Famintos</h3>
                        <p>Data lançamento: 2001</p>
                        <p>Diretor: Victor Salva</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/panico.jpg" />
                        <h3>Pânico</h3>
                        <p>Data lançamento: 2022</p>
                        <p>Diretor: Matt Bettinelli-Olpin, Tyler Gillett</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/profecia.jpg" />
                        <h3>A Última Profecia</h3>
                        <p>Data lançamento: 2002</p>
                        <p>Diretor: Marcos Pellington</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/quarentena.jpg" />
                        <h3>Quarentena</h3>
                        <p>Data lançamento: 2008</p>
                        <p>Diretor: John Erick Dowdle</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/resident.jpg" />
                        <h3>Resident Evil</h3>
                        <p>Data lançamento: 2002</p>
                        <p>Diretor: Paul W. S. Anderson</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/sorria.jpg" />
                        <h3>Sorria</h3>
                        <p>Data lançamento: 2022</p>
                        <p>Diretor: Parker Finn</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/jaw.jpg" />
                        <h3>Tubarão</h3>
                        <p>Data lançamento: 1975</p>
                        <p>Diretor: Steven Spielberg</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/vozes.jpg" />
                        <h3>Vozes do Além</h3>
                        <p>Data lançamento: 2005</p>
                        <p>Diretor: Geoffrey Sax</p>
                        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
                        <h4>Deixe sua avaliação !</h4>
                        <ul class="avaliacao">
                            <li class="star-icon ativo" value="1" name="estrela"></li>
                            <li class="star-icon" value="2" name="estrela"></li>
                            <li class="star-icon" value="3" name="estrela"></li>
                            <li class="star-icon" value="4" name="estrela"></li>
                            <li class="star-icon" value="5" name="estrela"></li>
                        </ul>
                    </li>
                </ol>
            </div>
        </form>
    </main>
    <style>
        img{
            max-width: 310px;
            max-height: 270px;
            width: auto;
            height: auto;
            }
        img{
            list-style:none;
            padding: 48px;
            -webkit-filter: drop-shadow(0px 0px 20px #ffe200); 
            filter: drop-shadow(0px 0px 20px #ffe200);
            margin-top: 48px;
            margin-bottom: 48px;
            margin-left: 48px;
            margin-right: 48px;
        }
        li{
            display:inline-block;
        }
        body{text-align: center; padding-top: 50px}

        /* .estrelas input[type=radio] {
        display: none;
        }
        .estrelas label i.fa{
        font-size: 2.5em
        }
        .estrelas label i.fa:before {
        content:'\f005';
        color: #FC0;
        }
        .estrelas input[type=radio]:checked ~ label i.fa:before {
        color: #CCC;
        } */

        .avaliacao{
            display: contents;
            }
        .star-icon{
            list-style-type: none;
            /* border: 1px solid #fff; */
            cursor: pointer;
            color: #ffe500;
            font-size: 40px;/* alterar o tamanho das estrelas */
            }
        .star-icon::before{
            content: "\2605";
            }
        .star-icon.ativo ~ .star-icon::before{
            content: "\2606";
            }
        .avaliacao:hover .star-icon::before{
            content: "\2605";
            }
        .star-icon:hover ~ .star-icon::before{
            content: "\2606";
            }
        h3{
            font-family: 'Kaisei HarunoUmi', serif;
            font-weight: 400;
            color: #ffe200;
            text-shadow:
            0 0 7px #ffe200,
            0 0 10px #ffe200,
            0 0 21px #ffe200,
            0 0 42px #ff2e00,
            0 0 82px #ff2e00,
            0 0 92px #ff2e00,
            0 0 102px #ff2e00,
            0 0 151px #ff2e00;
        }
        p, h4{
            color: #fff;
        }
        body{
            background-color: #000000;
        }
        .sistema-cabeçalho{ 
            background-color: #000000;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            padding: 24px;
        }
        .sistema-cabeçalho-img{
            max-width:140px;
            max-height:70px;
        }
        .cabeçalho-menu{
            display: flex;
            gap: 32px;
        }
        .cabeçalho-voltar , .cabeçalho-logout{
            font-family: 'Playfair Display', serif;
            color: #ffe200;
            text-shadow:
            0 0 7px #ffe200,
            0 0 10px #ffe200,
            0 0 21px #ffe200,
            0 0 42px #ff2e00,
            0 0 82px #ff2e00,
            0 0 92px #ff2e00,
            0 0 102px #ff2e00,
            0 0 151px #ff2e00;
            font-weight: 400;
            font-size: 18px;
        }
    </style>
    <script>
        var stars = document.querySelectorAll('.star-icon');
                  
        document.addEventListener('click', function(e){
            var classStar = e.target.classList;
            if(!classStar.contains('ativo')){
                stars.forEach(function(star){
                    star.classList.remove('ativo');
            });
                classStar.add('ativo');
                console.log(e.target.getAttribute('value'));
            }
        });
    </script>
</body>
</html>