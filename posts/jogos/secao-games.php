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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quae reprehenderit omnis pariatur modi et molestias! Qui tenetur a facilis et nihil nobis aliquid dolores, pariatur incidunt quisquam temporibus fugiat!</p>

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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione sint vero, aut pariatur voluptas accusantium, doloribus perspiciatis, facere similique quidem tempore atque neque itaque nihil provident eligendi.
                        </p>
                    </div>

                    <a href="/posts/jogos/gta6.php" class="botao-saiba-mais">
                        Saiba Mais
                        <span class="icone-seta">➔</span>
                    </a>
                </section>

                <br><br>

                <h3>Games populares</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint magnam assumenda accusamus. Eaque blanditiis, hic amet numquam suscipit, dignissimos voluptate illum omnis incidunt, nobis eveniet corporis beatae magnam ex? Aperiam.</p>

                <!----ASSUNTOS DO MOMENTO---->
                <section class="momentos">
                    
                    <!--DEATH STRANDING 2-->
                    <a class="link-articles" href="/posts/jogos/death-stranding2.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-deathstranding-16x9.jpg" alt="Poster gta 6">
                            
                            <div class="article-texto">
                                <h4>Death Stranding 2</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--MAFIA THE OLD COUNTRY-->
                    <a class="link-articles" href="/posts/jogos/mafia-the-old-country.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-mafia-the-old-country-16x9.jpg" alt="Poster Thunderbolts">
                    
                            <div class="article-texto">
                                <h4>Mafia</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--THE BATMAN 2-->
                    <a class="link-articles" href="the-batman2.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-the-batman2-16x9.png" alt="Poster de The batman 2">
                            
                            <div class="article-texto">
                                <h4>O que teremos em The Batman 2?</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--AVENGERS DOOMSDAY-->
                    <a class="link-articles" href="avengers-doomsday.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-avengers-doomsday-16x9.jpg" alt="Poster de Avengers Doomsday">
                            
                            <div class="article-texto">
                                <h4>Doomsday o fim do universo Marvel</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
                                </p>
                            </div>
                        </article>
                    </a>
                    
                </section>
            </div>

            <!--SEÇÃO VEJA MAIS-->
            <aside class="lateral">
                <h3>Direto do forno</h3>
                <article>
                    <a class="link-articles" href="#" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="imagens/banner-deathstranding-1x1-pequeno.jpg" alt="Poster gta 6">

                            <div class="article-texto">
                                <h4>Novidades de Death Strange 2</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
                                </p>
                            </div>
                        </article>
                    </a>
                </article>
                
                <article>
                    <a class="link-articles" href="#" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="imagens/banner-deathstranding-1x1-pequeno.jpg" alt="Poster gta 6">

                            <div class="article-texto">
                                <h4>Novidades de Death Strange 2</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
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
