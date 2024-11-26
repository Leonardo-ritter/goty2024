<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Portal de Jogos</title>
    <link rel="stylesheet" href="style_principal.css">
</head>

<body>
    <header class="cabecalho">
        <div class="cabecalho-logo">
            <h1>GOTY 2024</h1>  
        </div>

        <div class="botao-conectar-registrar">
            <button id="relatorio-btn">Relarório</button>
            <button id="login-btn">Conectar-se</button>
            <button id="register-btn">Registrar-se</button>     
        </div>

    </header>

    <main class="imagem-fundo">
        <div class="imagem-fundo-escuro"></div>
    </main>

    <header id = "segunfo-cabecalho" class="segundo-cabecalho">
        <div class="botoes-centralizados">           
            <button id= "blackmith" class="btn-estilo">Black Myth</button>           
            <button id= "astrobot" class="btn-estilo">Astro Bot</button>
            <button id= "metaphor" class="btn-estilo">Metaphor</button>
            <button id= "eldenring" class="btn-estilo">Elden Ring</button>
            <button id= "finalfantasy" class="btn-estilo">Final Fantasy 7</button>           
            <button id= "balastro" class="btn-estilo">Balastro</button>
        </div>
    </header>

    <script>
        document.getElementById("login-btn").addEventListener("click", function () {
            window.location.href = "login.html";
        });

        document.getElementById("register-btn").addEventListener("click", function () {
            window.location.href = "cadastro.html";
        });

        document.getElementById('blackmith').addEventListener('click', function() {
        document.getElementById('segundo-cabecalho').scrollIntoView({ behavior: 'smooth' });
        }); 

        document.getElementById('astrobot').addEventListener('click', function() {
        document.getElementById('1').scrollIntoView({ behavior: 'smooth' });
        });

        document.getElementById('metaphor').addEventListener('click', function() {
        document.getElementById('2').scrollIntoView({ behavior: 'smooth' });
        });

        document.getElementById('eldenring').addEventListener('click', function() {
        document.getElementById('3').scrollIntoView({ behavior: 'smooth' });
        });

        document.getElementById('finalfantasy').addEventListener('click', function() {
        document.getElementById('4').scrollIntoView({ behavior: 'smooth' });
        });

        document.getElementById('balastro').addEventListener('click', function() {
        document.getElementById('5').scrollIntoView({ behavior: 'smooth' });
        });

    </script>

    <section class="criar-linhas">
        <div class="conteudo">
            <img src="imagens/black-mith.jfif" alt="Imagem no canto direito" class="imagem-direita">  
            <div class="texto">
                <h2 class="titulo-jogos">Black Myth Wukong</h2> 
                <p class="descricao-jogo">
                    Inspirado em Jornada para o Oeste, um dos Quatro Grandes Romances Clássicos da mitologia chinesa, Black Myth: Wukong é descrito como um RPG de ação em que os jogadores assumem controle de um guerreiro Predestinado na missão de recuperar artefatos místicos, conhecidos como Seis Sentidos do Grande Sábio, que reúnem os poderes especiais de Su Wukong. Elogiado pelos seus visuais e combates desafiadores, Black Myth: Wukong também se envolveu em polêmicas por conta de declarações sexistas e misóginas dos fundadores do estúdio, conforme reportado pelo IGN em 2023. O jogo está disponível para compra no PS5 e PC (Steam).
                </p> 
            </div>
            <div class = "button-votar"> 
                <button id="votar-black" class="btn-estilo">Votar</button>
            </div>
        </div>
    </section>

    
    <div id=1 class = "cabecalhos-divisao"></div>

    <section class="criar-linhas">
        <div class = "conteudo">
            <img src="imagens/astrobot.jfif" alt="Imagem no canto direito" class="imagem-direita">  
            <div class = "texto">
                <h2 class = "titulo-jogos">Astrobot</h2> 
                <p class="descricao-jogo">
                Astro Bot é uma sequência de Astro's Playroom, que já vem pré-instalado no PlayStation 5 e ainda hoje é considerado um dos melhores títulos do console da Sony. Agora como uma grande aventura completa, ele é um charmoso jogo de plataforma 3D que salta aos olhos com suas decisões de design e coloca os jogadores para encontrar robozinhos da tripulação que estão perdidos pelas galáxias — dentre os quais há homenagens a personagens que marcaram os consoles da marca.
O jogo é o lançamento mais bem avaliado do ano no Metacritic, principal agregador de notas da mídia especializada, e está disponível para compra exclusivamente no PS5. Também vale notar que ele faz um excelente uso dos recursos do controle DualSense, agregando muito valor à experiência.
                </p>
            </div>
            <div class = "button-votar"> 
                <button id="votar-black" class="btn-estilo">Votar</button>
            </div>
        </div>
    </section>

    <div id=2 class = "cabecalhos-divisao"></div>

    <section class="criar-linhas">
        <div class = "conteudo">
            <img src="imagens/metaphor.avif" alt="Imagem no canto direito" class="imagem-direita">  
            <div class = "texto">
                <h2 class = "titulo-jogos">Mataphor</h2> 
                <p class="descricao-jogo">
                Produzido pelo time de ouro de Persona, Metaphor: ReFantazio é um estiloso RPG que mistura combates por turno e ação em tempo real. A história se passa em um mundo de fantasia em que uma "magia eleitoral" está em curso para definir o próximo monarca, após o assassinato misterioso do antigo rei. Por isso, o jogador deve viajar pelo Reino Unido de Euchronia e expandir sua rede de apoio.
Metaphor: Refantazio está disponível para PC (Steam) e consoles PlayStation e Xbox.
                </p>
            </div>
            <div class = "button-votar"> 
                <button id="votar-black" class="btn-estilo">Votar</button>
            </div>
        </div>
    </section>

    <div id=3 class = "cabecalhos-divisao"></div>

    <section class="criar-linhas">
        <div class = "conteudo">
            <img src="imagens/eldenring.jfif" alt="Imagem no canto direito" class="imagem-direita">  
            <div class = "texto">
                <h2 class = "titulo-jogos">eldenring</h2> 
                <p class="descricao-jogo">
                Shadow of the Erdtree é a aguardada expansão de Elden Ring, que foi eleito Jogo do Ano pelo The Game Awards em 2022. O conteúdo é denso o bastante para ser considerado um jogo novo, com novas áreas, armas e inimigos desafiadores, e leva os jogadores ao Reino das Sombras para seguir os passos de Miquella e descobrir o passado oculto de Marika.
O DLC exige o jogo base para funcionar e está disponível para compra no PC, PS4, PS5, Xbox One e Xbox Series S/X, além de compartilhar a nota mais alta do ano no Metacritc com Astro Bot. No entanto, sua indicação levantou discussões se é aceitável um conteúdo adicional disputar o prêmio principal, tirando a vaga de outro potencial concorrente.
                </p>
            </div>
            <div class = "button-votar"> 
                <button id="votar-black" class="btn-estilo">Votar</button>
            </div>
        </div>

    </section>

    <div id=4 class = "cabecalhos-divisao"></div>

    <section class="criar-linhas">
        <div class = "conteudo">
            <img src="imagens/finalfantasy.jfif" alt="Imagem no canto direito" class="imagem-direita">  
            <div class = "texto">
                <h2 class = "titulo-jogos">Final fantasy 7</h2> 
                <p class="descricao-jogo">
                Final Fantasy VII Rebirth é o segundo jogo de uma trilogia que busca reimaginar o clássico de 1997 da Square Enix. Para retratar o momento em que o mundo se abria ao jogador no título original, Rebirth traz um mundo aberto envolvente e recompensador, além de entregar um sistema de combate em tempo real refinado e que se aprofunda na relação entre os membros da equipe.
No momento, o jogo está disponível somente para PS5, mas pode ser apenas questão de tempo até chegar às demais plataformas.
                </p>
            </div>
            <div class = "button-votar"> 
                <button id="votar-black" class="btn-estilo">Votar</button>
            </div>
        </div>
    </section>

    <div id=5 class = "cabecalhos-divisao"></div>

    <section class="criar-linhas">
        <div class = "conteudo">
            <img src="imagens/balastro.jfif" alt="Imagem no canto direito" class="imagem-direita">  
            <div class = "texto">
                <h2 class = "titulo-jogos">Balastro</h2> 
                <p class="descricao-jogo">
                Descrito como um pôquer roguelite, Balatro foi uma das grandes surpresas de 2024. Desenvolvido por apenas uma pessoa, o jogo traz as regras clássicas de pôquer, mas que são rapidamente subvertidas por modificadores e multiplicadores, representados pelas cartas-coringa, que garantem benefícios e tornam a jogatina extremamente viciante.
Atualmente, Balatro está disponível para compra no PC (Steam), PlayStation, Xbox, Nintendo Switch e até mesmo dispositivos Android e iOS.
                </p>
            </div>
            <div class = "button-votar"> 
                <button id="votar-black" class="btn-estilo">Votar</button>
            </div>
        </div>
    </section>
</body>

</html>
