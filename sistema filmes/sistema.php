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
    <a href="home.php">Voltar</a>
    <div>
        <h1>Filmes</h1>
        <ol class="lista_filmes">
            <li>
                <img src="../sistema filmes/img/paranormal.jpg" />
                <h3>Atividade Paranormal</h3>
                <p>Data lançamento: 2007</p>
                <p>Diretor: Oren Peli</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/rosemary.jpg" />
                <h3>O bebê de Rosemary</h3>
                <p>Data lançamento: 1969</p>
                <p>Diretor: Roman Polanski</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/cemiterio_maldito.jpg" />
                <h3>Caemitério Maldito</h3>
                <p>Data lançamento: 1989</p>
                <p>Diretor: Mary Lambert</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/corra.jpg" />
                <h3>Corra !</h3>
                <p>Data lançamento: 2017</p>
                <p>Diretor: Jordan Peele</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/despertar_mortos.jpg" />
                <h3>O despertar dos Mortos Vivos</h3>
                <p>Data lançamento: 1980</p>
                <p>Diretor: George A. Romero</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/exorcista.jpg" />
                <h3>O exerocista</h3>
                <p>Data lançamento: 1973</p>
                <p>Diretor: William Friedkin</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/frank.jpg" />
                <h3>Frankenstein</h3>
                <p>Data lançamento: 1931</p>
                <p>Diretor: James Whale</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/freddie.jpg" />
                <h3>A Hora do Pesadelo</h3>
                <p>Data lançamento: 1984</p>
                <p>Diretor: Wes Craven</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/grito.jpg" />
                <h3>O Grito</h3>
                <p>Data lançamento: 2020</p>
                <p>Diretor: Nicolas Pesce</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/halloween.jpg" />
                <h3>Halloween</h3>
                <p>Data lançamento: 1978</p>
                <p>Diretor: Jhon Carpnter</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/iluminado.jpg" />
                <h3>O Iluminado</h3>
                <p>Data lançamento: 1980</p>
                <p>Diretor: Stanley Kubrick</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/jogos_mortais.jpg" />
                <h3>Jogos Mortais</h3>
                <p>Data lançamento: 2004</p>
                <p>Diretor: James Wan</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/kadaver.jpg" />
                <h3>Kadaver</h3>
                <p>Data lançamento: 2020</p>
                <p>Diretor: Jarand Herdal</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/lobisomen.jpg" />
                <h3>O Lobisomen</h3>
                <p>Data lançamento: 1941</p>
                <p>Diretor: George Waggner</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/letherface.jpg" />
                <h3>O Massacre da Serra Elétrica</h3>
                <p>Data lançamento: 1974</p>
                <p>Diretor: Tobe Hooper</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/nao_olhe.jpg" />
                <h3>Não, não olhe</h3>
                <p>Data lançamento: 2022</p>
                <p>Diretor: Jordan Peele</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/olhos_famintos.jpg" />
                <h3>Olhos Famintos</h3>
                <p>Data lançamento: 2001</p>
                <p>Diretor: Victor Salva</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/panico.jpg" />
                <h3>Pânico</h3>
                <p>Data lançamento: 2022</p>
                <p>Diretor: Matt Bettinelli-Olpin, Tyler Gillett</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/profecia.jpg" />
                <h3>A Última Profecia</h3>
                <p>Data lançamento: 2002</p>
                <p>Diretor: Marcos Pellington</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/quarentena.jpg" />
                <h3>Quarentena</h3>
                <p>Data lançamento: 2008</p>
                <p>Diretor: John Erick Dowdle</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/resident.jpg" />
                <h3>Resident Evil</h3>
                <p>Data lançamento: 2002</p>
                <p>Diretor: Paul W. S. Anderson</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/sorria.jpg" />
                <h3>Sorria</h3>
                <p>Data lançamento: 2022</p>
                <p>Diretor: Parker Finn</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/jaw.jpg" />
                <h3>Tubarão</h3>
                <p>Data lançamento: 1975</p>
                <p>Diretor: Steven Spielberg</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
            <li>
                <img src="../sistema filmes/img/vozes.jpg" />
                <h3>Vozes do Além</h3>
                <p>Data lançamento: 2005</p>
                <p>Diretor: Geoffrey Sax</p>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <h4>Deixe sua avaliação !</h4>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            </li>
        </ol>
    </div>
    <style>
        img{
            max-width: 310px;
            max-height: 270px;
            width: auto;
            height: auto;
            }
        .lista_filmes{
            list-style:none;
        }
        li{
            display:inline-block;
        }
        body{text-align: center; padding-top: 50px}

        .estrelas input[type=radio] {
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
        }
    </style>
</body>
</html>