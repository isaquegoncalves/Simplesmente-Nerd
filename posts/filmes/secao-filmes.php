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
                <h2 style="text-align: center;">Cinema em foco</h2>
                <p>A câmera girou, a luz acendeu e você chegou ao lugar certo! No Cinema em Foco, você acompanha tudo sobre os filmes que estão mexendo com o hype da galera, dos blockbusters épicos às surpresas que ninguém viu chegando.</p>

                <!-----BOX DESTAQUE---->
                <section class="fundo-destaque-filmes-jogos">
                    <h3>Filme do momento</h3>

                    <!--PARTE SUPERIOR-->
                    <div class="superior">
                        <div class="destaque-filmes-jogos-poster">
                            <img src="/config/imagens/fotos-filmes/superman-legacy.jpg" alt="Destaque Superman">
                        </div>
                        
                        <div class="fundo-destaque-filmes-jogos-texto">
                            <h4>Diretor: </h4> <p>James Gunn</p>
                            <br><br>

                            <h4>Elenco: </h4> <p>David Corenswest</p>
                            <br>
                            <p style="margin-left: 46px;">Rachel Brosnahan</p>
                            <br>
                            <p style="margin-left: 46px;">Nathan Fillion</p>
                            <br><br>

                            <h4>Gênero: </h4> <p>Ficção Cíentifica</p>
                            <br>
                            <p style="margin-left: 49px;">Ação</p>
                        </div>
                    </div>

                    <!--PARTE INFERIOR-->
                    <div class="inferior">
                        <h4>Superman 2025 - Visão Geral</h4>
                        <p>
                            Prepare-se para conhecer um Superman completamente renovado. Com uma abordagem ousada, emocional e atual, o novo filme promete redefinir o herói mais icônico da DC e reacender a esperança do estúdio nas telonas.
                        </p>
                    </div>

                    <a href="/posts/filmes/superman-legacy.php" class="botao-saiba-mais">
                        Saiba Mais
                        <span class="icone-seta">➔</span>
                    </a>
                </section>

                <br><br>

                <h3 style="width: 210px">Filmes populares</h3>
                <p>Aqui você encontra os filmes que estão bombando ultimamente! Os queridinhos do público, os mais comentados nas redes e aquelas produções que simplesmente não dá pra ignorar.</p>

                <!----ASSUNTOS DO MOMENTO---->
                <section class="momentos">
                    
                    <!--SPIDER-MAN: UM NOVO LAR-->
                    <a class="link-articles" href="/posts/filmes/spider-man-um-novo-lar.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-spider-man-um-novo-lar-16x9.jpeg" alt="Poster gta 6">
                            
                            <div class="article-texto">
                                <h4>Em breve: Spider-Man: Um novo lar</h4>
                                <p>
                                    Após eventos que estremeceram a linha do tempo do universo Marvel, "Spider-Man: Um Novo Dia" surge como um ponto de virada para Peter Parker e o legado do Homem-Aranha.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--THUNDERBOLTS-->
                    <a class="link-articles" href="/posts/filmes/thunderbolts.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/thunderbolts-16x9.jpg" alt="Poster Thunderbolts">
                    
                            <div class="article-texto">
                                <h4>Análise de Thunderbolts</h4>
                                <p>
                                    Quando o governo decide que os heróis tradicionais já não bastam, uma nova força-tarefa é convocada, e ela não é exatamente feita de mocinhos.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--THE BATMAN 2-->
                    <a class="link-articles" href="/posts/filmes/the-batman2.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-the-batman2-16x9.jpeg" alt="Poster de The batman 2">
                            
                            <div class="article-texto">
                                <h4>O que teremos em The Batman 2?</h4>
                                <p>
                                    Após o sucesso de The Batman (2022), Robert Pattinson retorna ao papel de Bruce Wayne em uma nova história sombria e intensa. The Batman 2 promete expandir a mitologia do herói com novos vilões, dilemas morais mais profundos e um Gotham ainda mais caótico.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--AVENGERS DOOMSDAY-->
                    <a class="link-articles" href="/posts/filmes/avengers-doomsday.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-avengers-doomsday-16x9.jpg" alt="Poster de Avengers Doomsday">
                            
                            <div class="article-texto">
                                <h4>Doomsday o fim do universo Marvel</h4>
                                <p>
                                    Avengers Doomsday promete ser mais do que apenas um novo filme, é um marco que pode redefinir todo o Universo Cinematográfico Marvel após os eventos do Multiverso. 
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--SUPERMAN E VINGADORES ULTIMATO TEM ALGO EM COMUM - (Saulo)-->
                    <a class="link-articles" href="/posts/filmes/superman-e-vingadores-ultimato-tem-algo-em-comum.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-superman-vingadores-16x9.jpg" alt="Poster de Superman e vingadores">
                            
                            <div class="article-texto">
                                <h4>Superman e Vingadores Ultimato têm algo em comum!</h4>
                                <p>
                                    O mundo está à beira de testemunhar um dos maiores fenômenos do cinema moderno: o retorno triunfante do Superman. Sob a direção de James Gunn, Superman previsto para estrear em 2025.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--Cartoon Network finalmente anuncia a data de Retorno de O Incrível Mundo de Gumball - (Isabella)-->
                    <a class="link-articles" href="/posts/filmes/o-incrivel-mundo-de-gumball.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-o-incrivel-mundo-de-gumball-16x9.jpg" alt="Poster de O novo incrivel mundo de Gumball">
                            
                            <div class="article-texto">
                                <h4>Cartoon Network finalmente anuncia a data de Retorno de O Incrível Mundo de Gumball</h4>
                                <p>
                                    A Cartoon Network anunciou nesta segunda-feira (31), por meio de suas redes sociais, a data de lançamento dos novos episódios de O Incrível Mundo de Gumball.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--Mephisto finalmente apareceu, mas não como o público esperava!-->
                    <a class="link-articles" href="/posts/filmes/mefisto-finalmente-apareceu-mas-nao-como-o-publico-esperava.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-mefisto-16x9.jpg" alt="Poster de Superman e vingadores">
                            
                            <div class="article-texto">
                                <h4>Mephisto finalmente apareceu, mas não como o público esperava!</h4>
                                <p>
                                    Depois de anos de teorias, rumores e expectativas alimentadas pela própria Marvel, Mephisto finalmente deu as caras no MCU mas não do jeito que os fãs esperavam.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--Série Coração de Ferro Parece Coração de Pedra! Sujando o Legado de Tony Stark-->
                    <a class="link-articles" href="/posts/filmes/serie-coracao-de-ferro-parece-coracao-de-pedra-sujando-legado-de-tony-stark.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-coracao-de-ferro-16x9.png" alt="Poster de coração de ferro da marvel">
                            
                            <div class="article-texto">
                                <h4>Série Coração de Ferro Parece Coração de Pedra! Sujando o Legado de Tony Stark</h4>
                                <p>
                                    Prepare o reator arc e segure o capacete, porque precisamos conversar seriamente sobre Coração de Ferro, a série que prometia ser a herdeira espiritual do Homem de Ferro no MCU, e falhou espetacularmente em quase todos os quesitos.
                                </p>
                            </div>
                        </article>
                    </a>
                    
                </section>
            </div>

            <!--SEÇÃO VEJA MAIS-->
            <aside class="lateral">
                <h3>Direto do forno</h3>

                <!--GTA 6-->
                <article>
                    <a class="link-articles" href="/posts/jogos/gta6.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-games/banner-gta6-1x1-pequena.png" alt="Poster de gta 6">

                            <div class="article-texto">
                                <h4>Gta 6 - Visão Geral</h4>
                                <p>
                                    GTA 6 chega com a promessa de elevar o patamar da narrativa, jogabilidade e realismo no universo dos jogos de mundo aberto, representando um marco para a Rockstar Games e para toda a indústria..
                                </p>
                            </div>
                        </article>
                    </a>
                </article>
                
                <!--Death Stranding 2-->
                <article>
                    <a class="link-articles" href="/posts/jogos/death-stranding2.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-games/banner-deathstranding-1x1-pequeno.jpg" alt="Poster de Death Stranding 2">

                            <div class="article-texto">
                                <h4>Novidades de Death Strange 2</h4>
                                <p>
                                    Com visuais impressionantes, novos mistérios e um retorno à simbologia de conexões humanas, o jogo pretende surpreender novamente.
                                </p>
                            </div>
                        </article>
                    </a>
                </article>

                <!--Mafia: the old Country-->
                <article>
                    <a class="link-articles" href="/posts/jogos/mafia-the-old-country.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-games/banner-mafia-the-old-country-1x1.jpg" alt="Poster de Mafia the old Country">

                            <div class="article-texto">
                                <h4>Sobre o novo Mafia: The Old Country</h4>
                                <p>
                                    Com ambientação na Sicília do início do século 20, o jogo retorna à essência da máfia, explorando honra, vingança, tradição e laços de sangue.
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
