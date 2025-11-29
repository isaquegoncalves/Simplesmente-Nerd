<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Simplesmente Nerd</title>
        <link rel="stylesheet" href="/config/css/estilo.css">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/head.php"; ?>
        <style>
            @media (min-width: 768px) {
                .conteudo-principal > h3 {
                margin-left: 50px;
                }

                .conteudo-principal > p {
                margin-left: 50px;
                }
            }
        </style>
    </head>
    <body>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/header.php"; ?>

        <main>
            <div class="conteudo-principal">
                <h2>Acompanhe o filme do ano!!</h2>

                <!-----BOX DESTAQUE---->
                <section class="destaque">
                    <div class="poster-destaque">
                        <img src="/config/imagens/fotos-filmes/banner-superman-legacy-16x9.jpeg" alt="Destaque Superman">
                    </div>
                    
                    <div class="fundo-destaque">
                        <h4><a style="text-decoration: none; color: inherit;" href="/posts/filmes/superman-legacy.php">Superman 2025 - Visão Geral</a></h4>
                        <p>
                            Prepare-se para conhecer um Superman completamente renovado. Com uma abordagem ousada, emocional e atual, o novo filme promete redefinir o herói mais icônico da DC e reacender a esperança do estúdio nas telonas.
                        </p>
                    </div>
                </section>

                <h3>Assuntos do momento</h3>
                <p>Fique por dentro do que está pegando fogo no mundo geek! Aqui você encontra os lançamentos mais comentados, trailers que explodiram a internet e tudo o que está dominando a conversa entre fãs de filmes, séries e games.</p>

                <!----ASSUNTOS DO MOMENTO---->
                <section class="momentos">
                    
                    <!--LANÇAMENTO GTA 6-->
                    <a class="link-articles" href="/posts/jogos/gta6.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-gta6-16x9.png" alt="Poster gta 6">
                            
                            <div class="article-texto">
                                <h4>Lançamento de GTA 6</h4>
                                <p>
                                    Prepare-se para a revolução no mundo dos games. GTA 6 chega com a promessa de elevar o patamar da narrativa, jogabilidade e realismo no universo dos jogos de mundo aberto, representando um marco para a Rockstar Games e para toda a indústria.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--THUNDERBOLTS-->
                    <a class="link-articles" href="/posts/filmes/thunderbolts.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/thunderbolts-16x9.jpg" alt="Poster Thunderbolts">
                            
                            <div class="article-texto">
                                <h4>Análise de thunderbolts</h4>
                                <p>
                                    Quando o governo decide que os heróis tradicionais já não bastam, uma nova força-tarefa é convocada, e ela não é exatamente feita de mocinhos.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--MAFIA-->
                    <a class="link-articles" href="posts/jogos/mafia-the-old-country.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-mafia-the-old-country-16x9.jpg" alt="Poster gta 6">
                            
                            <div class="article-texto">
                                <h4>Detalhes de novo Mafia</h4>
                                <p>
                                    Com ambientação na Sicília do início do século 20, o jogo retorna à essência da máfia, explorando honra, vingança, tradição e laços de sangue.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--DEATH STRANDING-->
                    <a class="link-articles" href="posts/jogos/death-stranding2.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-deathstranding-16x9.jpg" alt="Poster gta 6">

                            <div class="article-texto">
                                <h4>Novidades de Death Strange 2</h4>
                                <p>
                                    A sequência do enigmático e aclamado jogo de Hideo Kojima está chegando. Death Stranding 2, oficialmente intitulado Death Stranding 2: On the Beach, promete expandir os limites narrativos e visuais do universo pós-apocalíptico criado em 2019.
                                </p>
                            </div>
                        </article>
                    </a>
                    
                </section>
            </div>

            <!--SEÇÃO ULTIMAS NOVIDADES-->
            <aside class="lateral">
                <h3>Mais Recentes</h3>

                <!--Série Coração de Ferro Parece Coração de Pedra! Sujando o Legado de Tony Stark-->
                <article>
                    <a class="link-articles" href="/posts/filmes/serie-coracao-de-ferro-parece-coracao-de-pedra-sujando-legado-de-tony-stark.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-filmes/banner-coracao-de-ferro-1x1.png" alt="Poster de Coração de Ferro">

                            <div class="article-texto">
                                <h4>Série Coração de Ferro Parece Coração de Pedra! Sujando o Legado de Tony Stark</h4>
                                <p>
                                    Prepare o reator arc e segure o capacete, porque precisamos conversar seriamente sobre Coração de Ferro, a série que prometia ser a herdeira espiritual do Homem de Ferro no MCU, e falhou espetacularmente em quase todos os quesitos.
                                </p>
                            </div>
                        </article>
                    </a>
                </article>
                
                <!--Dying Light: The Beast: O JOGO DE ZUMBI MAIS AGUARDADO DO ANO!-->
                <article>
                    <a class="link-articles" href="/posts/jogos/o-jogo-de-zumbi-mais-aguardado-do-ano.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-games/banner-dying-light-the-beast-1x1.jpg" alt="Poster de Dying Light the beast">

                            <div class="article-texto">
                                <h4>Dying Light: The Beast: O JOGO DE ZUMBI MAIS AGUARDADO DO ANO!</h4>
                                <p>
                                    O tão querido e amado jogo pós-apocaliptico volta com o seu terceiro jogo da franquia. Dying light: the beast não só retorna trazendo uma cara já conhecida pelo seu público, como também um novo mapa, novos gráficos, novas mecânicas e novas formas de dilacerar zumbis.
                                </p>
                            </div>
                        </article>
                    </a>
                </article>
                
            </aside>
        </main>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/footer.php"; ?>

        <!--Script para ativar o ícone -->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/javascript/botao-menu.php"; ?>
    </body>
</html>
