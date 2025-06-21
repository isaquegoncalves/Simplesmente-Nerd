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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione sint vero, aut pariatur voluptas accusantium, doloribus perspiciatis, facere similique quidem tempore atque neque itaque nihil provident eligendi laudantium at. A.
                        </p>
                    </div>
                </section>

                <h3>Assuntos do momento</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, hic ipsum fuga, assumenda officiis debitis distinctio itaque, ut necessitatibus esse dolor molestiae qui neque atque aspernatur quo quasi modi ipsa!</p>

                <!----ASSUNTOS DO MOMENTO---->
                <section class="momentos">
                    
                    <!--LANÇAMENTO GTA 6-->
                    <a class="link-articles" href="/posts/jogos/gta6.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-games/banner-gta6-16x9.png" alt="Poster gta 6">
                            
                            <div class="article-texto">
                                <h4>Lançamento de GTA 6</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
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
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
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
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
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
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
                                </p>
                            </div>
                        </article>
                    </a>
                    
                </section>
            </div>

            <!--SEÇÃO ULTIMAS NOVIDADES-->
            <aside class="lateral">
                <h3>Direto do forno</h3>
                <article>
                    <a class="link-articles" href="/posts/filmes/superman-legacy.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-filmes/banner-superman-legacy-1x1.jpg" alt="Poster de superman legacy">

                            <div class="article-texto">
                                <h4>Superman: Legacy</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
                                </p>
                            </div>
                        </article>
                    </a>
                </article>
                
                <article>
                    <a class="link-articles" href="/posts/jogos/death-stranding2.php" target="_self"> 
                        <article class="post-article-ultimas">     
                            <img src="/config/imagens/fotos-games/banner-deathstranding-1x1-pequeno.jpg" alt="Poster gta 6">

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
