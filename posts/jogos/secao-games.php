<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
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
                <h2 style="text-align: center;">Por dentro dos Games</h2>
                <p>Respire fundo, equipe seu personagem e vem explorar o universo gamer! Aqui você encontra análises, novidades e tudo sobre os títulos que estão movimentando o mundo dos games.</p>

                <!-----BOX DESTAQUE---->
                <section class="fundo-destaque-filmes-jogos">
                    <h3>Game do momento</h3>

                    <!--PARTE SUPERIOR-->
                    <div class="superior">
                        <div class="destaque-filmes-jogos-poster">
                            <img src="/config/imagens/fotos-games/banner-destaque-gta6-3x2.jpg" alt="Destaque Superman">
                        </div>
                        
                        <div class="fundo-destaque-filmes-jogos-texto">
                            <h4>Diretor: </h4> <p>Rob Nelson</p>
                            <br><br>

                            <h4>Elenco: </h4> <p>Manni L. Perez</p>
                            <br>
                            <p style="margin-left: 52px;">Jake Silbermann</p>
                            <br>
                            <p style="margin-left: 52px;">Raul Bautista</p>
                            <br><br>

                            <h4>Gênero: </h4> <p>Mundo Aberto</p>
                            <br>
                            <p style="margin-left: 52px;">Ação</p>
                            <br>
                            <p style="margin-left: 52px;">Aventura</p>
                        </div>
                    </div>

                    <!--PARTE INFERIOR-->
                    <div class="inferior">
                        <h4>GTA 6 - Visão Geral</h4>
                        <p>
                            Prepare-se para a revolução no mundo dos games. GTA 6 chega com a promessa de elevar o patamar da narrativa, jogabilidade e realismo no universo dos jogos de mundo aberto, representando um marco para a Rockstar Games e para toda a indústria.
                        </p>
                    </div>

                    <a href="/posts/jogos/gta6.php" class="botao-saiba-mais">
                        Saiba Mais
                        <span class="icone-seta">➔</span>
                    </a>
                </section>

                <br><br>

                <h3>Games populares</h3>
                <p>Confira os jogos que estão dominando o momento! Os mais jogados, mais falados e que estão conquistando multidões no mundo gamer, tudo reunido em um só lugar.</p>

                <!----ASSUNTOS DO MOMENTO---->
                <section class="momentos">
                    
                    <!--DEATH STRANDING 2-->
                    <a class="link-articles" href="/posts/jogos/death-stranding2.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-deathstranding-16x9.jpg" alt="Poster gta 6">
                            
                            <div class="article-texto">
                                <h4>Novidades de Death Stranding 2</h4>
                                <p>
                                    A sequência do enigmático e aclamado jogo de Hideo Kojima está chegando. Death Stranding 2, oficialmente intitulado Death Stranding 2: On the Beach, promete expandir os limites narrativos e visuais do universo pós-apocalíptico criado em 2019.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--MAFIA THE OLD COUNTRY-->
                    <a class="link-articles" href="/posts/jogos/mafia-the-old-country.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-mafia-the-old-country-16x9.jpg" alt="Poster Thunderbolts">
                    
                            <div class="article-texto">
                                <h4>Mafia: The Old Country</h4>
                                <p>
                                    Com ambientação na Sicília do início do século 20, o jogo retorna à essência da máfia, explorando honra, vingança, tradição e laços de sangue.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--DUNE AWAKENING-->
                    <a class="link-articles" href="/posts/jogos/dune-awakening.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-dune-awakening-16x9.jpg" alt="Poster dune awakening">
                            
                            <div class="article-texto">
                                <h4>Dune: Awakening</h4>
                                <p>
                                    Em Dune: Awakening, os jogadores são transportados para o implacável planeta Arrakis, em um MMO de sobrevivência em mundo aberto ambientado no universo de Frank Herbert. 
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--THE ELDER SCROLLS VI-->
                    <a class="link-articles" href="/posts/jogos/the-elder-scrolls-vi.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-the-elder-scrolls-vi-16x9.jpg" alt="Poster de The Elder Scrolls 6">
                            
                            <div class="article-texto">
                                <h4>The Elder Scrolls VI</h4>
                                <p>
                                    Após mais de uma década desde o aclamado Skyrim, a Bethesda se prepara para lançar The Elder Scrolls VI, o aguardado novo capítulo da icônica franquia de RPGs medievais.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--Dying Light: The Beast - O JOGO DE ZUMBI MAIS AGUARDADO DO ANO!-->
                    <a class="link-articles" href="/posts/jogos/o-jogo-de-zumbi-mais-aguardado-do-ano.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-dying-light-the-beast-16x9.jpg" alt="Poster de The Elder Scrolls 6">
                            
                            <div class="article-texto">
                                <h4>Dying Light: The Beast: O JOGO DE ZUMBI MAIS AGUARDADO DO ANO!</h4>
                                <p>
                                    O tão querido e amado jogo pós-apocaliptico volta com o seu terceiro jogo da franquia. Dying light: the beast não só retorna trazendo uma cara já conhecida pelo seu público, como também um novo mapa, novos gráficos, novas mecânicas e novas formas de dilacerar zumbis.
                                </p>
                            </div>
                        </article>
                    </a>
                    
                </section>
            </div>

            <!--SEÇÃO DIRETO DO FORNO-->
            <aside class="lateral">
                <h3>Direto do forno</h3>

                <!--Superman: Legacy-->
                <article>
                    <a class="link-articles" href="/posts/filmes/superman-legacy.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-filmes/banner-superman-legacy-1x1.jpg" alt="Poster de superman legacy">

                            <div class="article-texto">
                                <h4>Superman: Legacy - Visão geral</h4>
                                <p>
                                    Com uma abordagem ousada, emocional e atual, o novo filme promete redefinir o herói mais icônico da DC e reacender a esperança do estúdio nas telonas.
                                </p>
                            </div>
                        </article>
                    </a>
                </article>
                
                <!--Avengers: Doomsday-->
                <article>
                    <a class="link-articles" href="/posts/filmes/avengers-doomsday.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-filmes/banner-avengers-doomsday-1x1.jpg" alt="Poster de avengers Doomsday">

                            <div class="article-texto">
                                <h4>Superman: Legacy - Visão geral</h4>
                                <p>
                                    Avengers Doomsday promete ser mais do que apenas um novo filme, é um marco que pode redefinir todo o Universo Cinematográfico Marvel após os eventos do Multiverso.
                                </p>
                            </div>
                        </article>
                    </a>
                </article>

                <!--The Batman 2-->
                <article>
                    <a class="link-articles" href="/posts/filmes/the-batman2.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-filmes/banner-the-batman2-1x1.jpeg" alt="Poster de avengers Doomsday">

                            <div class="article-texto">
                                <h4>O que teremos em The Batman 2??</h4>
                                <p>
                                    The Batman 2 promete expandir a mitologia do herói com novos vilões, dilemas morais mais profundos e um Gotham ainda mais caótico.
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
