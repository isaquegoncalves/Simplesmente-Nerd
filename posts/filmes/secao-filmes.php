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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quae reprehenderit omnis pariatur modi et molestias! Qui tenetur a facilis et nihil nobis aliquid dolores, pariatur incidunt quisquam temporibus fugiat!</p>

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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione sint vero, aut pariatur voluptas accusantium, doloribus perspiciatis, facere similique quidem tempore atque neque itaque nihil provident eligendi.
                        </p>
                    </div>

                    <a href="super.html" class="botao-saiba-mais">
                        Saiba Mais
                        <span class="icone-seta">➔</span>
                    </a>
                </section>

                <br><br>

                <h3>Filmes populares</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint magnam assumenda accusamus. Eaque blanditiis, hic amet numquam suscipit, dignissimos voluptate illum omnis incidunt, nobis eveniet corporis beatae magnam ex? Aperiam.</p>

                <!----ASSUNTOS DO MOMENTO---->
                <section class="momentos">
                    
                    <!--SPIDER-MAN: UM NOVO LAR-->
                    <a class="link-articles" href="spider-man-um-novo-lar.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/banner-spider-man-um-novo-lar-16x9.jpeg" alt="Poster gta 6">
                            
                            <div class="article-texto">
                                <h4>Em breve: Spider-Man: Um novo lar</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae explicabo eveniet tempore ipsa modi praesentium minus rem.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!--THUNDERBOLTS-->
                    <a class="link-articles" href="thunderbolts.php" target="_self"> 
                        <article class="post-article">
                            <img src="/config/imagens/fotos-filmes/thunderbolts-16x9.jpg" alt="Poster Thunderbolts">
                    
                            <div class="article-texto">
                                <h4>Análise de Thunderbolts</h4>
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

                    <!--DEATH STRANDING-->
                    <a class="link-articles" href="#" target="_self"> 
                        <article class="post-article">
                            <div class="article-img">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="banner-deathstranding-1x1-pequeno.jpg">
                                    <img src="banner-deathstranding-16x9.jpg" alt="Poster gta 6">
                                </picture>
                            </div>
                            
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
