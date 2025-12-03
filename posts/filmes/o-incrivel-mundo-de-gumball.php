<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Simplesmente Nerd</title>
        <link rel="stylesheet" href="/config/css/estilo.css" />
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/head.php"; ?>
    </head>
    <body>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/header.php"; ?>

        <main>
            <div class="conteudo-principal">
                <h2>Cartoon Network anuncia retorno de Gumball com nova série</h2>
                <p class="data-autor">Por Isabella - 03/07/2025</p>

                <p>
                    A Cartoon Network anunciou nesta segunda-feira (31), por meio de suas redes sociais, a data de lançamento dos novos episódios de <em>O Incrível Mundo de Gumball</em>.
                </p>
                <p>
                    A série retorna com um novo título: <strong>O Mundo Maravilhosamente Estranho de Gumball</strong>. Os episódios estreiam oficialmente no dia <strong>6 de outubro</strong> na Cartoon Network e na HBO Max. Antes disso, a série será lançada exclusivamente nos Estados Unidos no dia <strong>27 de julho</strong>, no catálogo do Hulu via Disney+.
                </p>

                <div class="poster-conteudo">
                    <img src="/config/imagens/fotos-filmes/post-o-incrivel-mundo-de-gumball-16x9.jpg" alt="Banner do novo Gumball">
                </div>

                <h3 style="width: 340px;">Estilo de Animação Renovado</h3>
                <p>
                    Além da data de estreia, uma nova abertura foi divulgada, mantendo a icônica trilha sonora da série original, mas apresentando novidades no estilo de animação. A nova versão se utiliza de <strong>2D, 3D, CGI, live-action e fantoches</strong>, seguindo a tradição da série de experimentar com diferentes linguagens visuais que surpreendem e encantam o público.
                </p>

                <h3 style="width: 340px;">Continuação Direta da História de 2019</h3>
                <p>
                    A nova fase da série promete retomar a história exatamente onde parou em junho de 2019, quando os personagens lutavam para não se tornarem versões menos cartunescas de si mesmos — um gancho que deixou em aberto o que realmente estava acontecendo na cidade de Elmore.
                </p>

                <p>
                    Agora, com a promessa de novos mistérios, estilos visuais e o humor irreverente de sempre, <em>O Mundo Maravilhosamente Estranho de Gumball</em> tem tudo para conquistar novamente os fãs antigos e apresentar o universo de Elmore a uma nova geração.
                </p>

                <h3 style="width: 340px;">Teaser: O Mundo Maravilhosamente Estranho De Gumball</h3>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/-W35ePn3ito?si=K3Iv1oqMJCXQCq2E" 
                        title="Trailer de Superman 2025"
                        allowfullscreen
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                    </iframe>
                </div>

                <br><br>

                <h3 style="width: 340px;">Onde assistir as temporadas anteriores?</h3>
                <p>
                    Atualmente, todas as <strong>seis temporadas completas</strong> de <em>O Incrível Mundo de Gumball</em> estão disponíveis na HBO Max. Já as <strong>duas primeiras temporadas</strong> também podem ser assistidas na Netflix.
                </p>

                <!-----VEJA MAIS------>
                <h3 style="width: 130px;">Veja mais</h3>
                <div class="card-container">

                    <!--Série Coração de Ferro-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-serie-coracao-de-ferro-parece-coracao-de-pedra-sujando-legado-de-tony-stark.php"; ?>

                    <!--Superman e Vingadores tem algo em comum-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-superman-e-vingadores-ultimato-tem-algo-em-comum.php"; ?>

                    <!--SPIDER-MAN UM NOVO LAR-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-spider-man-um-novo-lar.php"; ?>
                </div>
            </div>
        </main>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/footer.php"; ?>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/javascript/botao-menu.php"; ?>
    </body>
</html>
