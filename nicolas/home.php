<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slash</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header class="home-cabeçalho">
        <img class="home-cabeçalho-img" src="img/slashcrit.png" alt="Logo do site">
        <nav class="cabeçalho-menu">
            <a class="cabeçalho-cadastro" href="cadastro.php">Cadastre-se</a>
            <a class="cabeçalho-login" href="login.php">Login</a>
        </nav>
    </header>
    <main class="conteudo">
        <section class="conteudo-principal">
            <div class="conteudo-principal-texto">
                <h2 class="conteudo-principal-subtitulo">Contribua para uma comunidade apaixonada</h2>
                <button class="conteudo-principal-botao">Vamos!</button>
            </div>
            <img class="conteudo-principal-img" src="img/bem vindo 2.png" alt="Imagem de boas vindas">
        </section>
        <section class="conteudo-secundario">
            <h3 class="conteudo-secundario-titulo">O que vem a seguir ?</h3>
            <p class="conteudo-secundario-texto">SLASHCRIT! foi desenvolvido com o objetivo de apresentar as competências e habilidades adquiridas durante as aulas de Programação Web.</p>
            <p class="conteudo-secundario-texto-2">O sistema tem como objetivo possibilitar que um usuário realize um cadastro e crie um login de acesso, após ter acesso ao sistema o mesmo deve apresentar os filmes disponpiveis para semrem avaliados, permitindo assim que o usuário submete sua avaliação das obras e obetnha uma média de avaliações anteriores.</p>
        </section>
    </main>
    <footer class="home-rodape">
        <h1 class="nome">NICOLAS GABRIEL DA SILVA</h1>
    </footer>
    <style>
        .home-cabeçalho{
            background-color: #000000;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            padding: 24px;
        }

        .home-cabeçalho-img{
            max-width:140px;
            max-height:70px;
        }
        .cabeçalho-menu{
            display: flex;
            gap: 32px;
        }
        .cabeçalho-cadastro , .cabeçalho-login{
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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body{
            font-size: 100%;
            background-color: #000000;
        }
        .conteudo-principal-subtitulo{
            font-family: 'Kaisei HarunoUmi', serif;
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
        }
        .conteudo{
            border-bottom: 48px;
            border-top: 0.4px solid #ffe200;
            padding-top: 48px;
        }

        .conteudo-principal{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
        }
        
        .conteudo-principal-texto{
            display: flex;
            flex-direction: column;
            gap: 32px;
        }
        .conteudo-secundario-titulo{
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
            border-top: 0.4px solid #ffe200;
            padding-top: 48px;
        }
        .conteudo-secundario-texto, .conteudo-secundario-texto-2{
            font-family: 'Playfair Display', serif;
            font-weight: 400;
            font-size: 20px;
            color: white;
            text-align: center; 
            gap: 32px;
            padding-bottom: 48px;
        }
        .conteudo-principal-botao{
            font-family: 'Playfair Display', serif;
            font-weight: 400;
            font-size: 24px;
            width: 180px;
            height: 60px;
            border-radius: 20px;
            background-color: #ff2e00;
            border-color: #ffe200;
            color: #000000;
            text-shadow:
            0 0 7px #ff2e00,
            0 0 10px #ff2e00,
            0 0 21px #ff2e00,
            0 0 42px #ffe200,
            0 0 82px #ffe200,
            0 0 92px #ffe200,
            0 0 102px #ffe200,
            0 0 151px #ffe200;
            background-image: -webkit-linear-gradient(45deg, #f1c40f 50%, transparent 50%);
            background-image: linear-gradient(45deg, #f1c40f 50%, transparent 50%);
            background-position: 100%;
            background-size: 400%;
            -webkit-transition: background 300ms ease-in-out;
            transition: background 300ms ease-in-out;
        }
        .conteudo-principal-botao:hover {
            background-position: 0;
        }
        .conteudo-principal-img{
            -webkit-filter: drop-shadow(0px 0px 20px #ffe200); 
            filter: drop-shadow(0px 0px 20px #ffe200);
            height: 430px;
        }
        .conteudo-secundario{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
            margin-top: 48px;
        }

        .home-rodape{
            padding: 32px;
            border-top: 0.4px solid #ffe200;
        }
        .nome{
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
            text-align: center;
        }
    </style> 
</body>
</html>