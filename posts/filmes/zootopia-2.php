<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Simplesmente Nerd</title>
        <link rel="stylesheet" href="/config/css/estilo.css">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/head.php"; ?>
    </head>
    <body>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/header.php"; ?>

        <main>
            <div class="conteudo-principal">
                <h2>Zootopia 2 é a maior animação da história? os números surprenderam analistas</h2>
                <p class="data-autor">Por Saulo Henrique - 01/12/2025</p>

                <p>O aguardado retorno da animação da Walt Disney Animation Studios, Zootopia 2, não decepcionou — ao contrário: o filme quebrou recordes logo na estreia e já entra para os livros de bilheteria. Segundo estimativas oficiais, o longa arrecadou US$ 556 milhões globalmente.  Nos Estados Unidos e Canadá, o desempenho também foi expressivo: cerca de US$ 156 milhões só nos cinco dias de estreia do feriado de Ação de Graças.</p>

                <div class="poster-conteudo">
                    <img src="/config/imagens/fotos-filmes/post-zootopia2-16x9.jpg" alt="Poster do filme Zootopia 2">
                </div>

                <h3 style="width: 350px;">Resultado Histórico</h3>
                <p>
                    Com esse desempenho, Zootopia 2 alcança a maior abertura global já registrada para um filme de animação — um feito que poucos, talvez nem Hollywood, esperavam. 
                </p>

                <p>
                    Para a Disney e para o mercado, o sucesso reforça que animações bem feitas, com apelo mundial e personagens queridos, continuam sendo apostas altamente lucrativas.
                </p>

                <p>
                    Eu sou fã do primeiro Zootopia, acho que foi uma animação com a dose certa de humor, leve e extremamente divertida, se a Disney não fizesse uma continuação, obviamente perderia parte do potencial daquele universo. Com Zootopia 2, não só renovaram essa aposta, como elevaram tudo a outro nível.
                </p>

                <br>

                <h3 style="width: 300px;">Trailer Oficial de Zootopia 2</h3>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/BjkIOU5PhyQ?si=VfdU7oNxyGN6hFYs" 
                        title="Trailer de Superman 2025"
                        allowfullscreen
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                    </iframe>
                </div>

                <br><br>

                <h3 style="width: 135px;">Conclusão</h3>
                <p>
                    E esse sucesso colossal já me convence de uma coisa: é plena a chance de termos uma trilogia. Esse universo tem muitas histórias ainda para contar — tanto nas ruas de Zootopia quanto em seus bastidores sociais e culturais. Com esse impacto de estreia, a Disney tem motivos de sobra para “tirar bastante leite da vaca”, por assim dizer.
                </p>

                <p>
                    Contudo, torço muito pelo sucesso do filme, e certamente, vai se tornar uma das maiores bilheterias animadas da história.
                </p>

                <br>

                <!-----VOCÊ SABIA-----> 
                <section class="voce-sabia">
                    <h3 class="titulo-box">Você sabia?</h3>
                    <div class="curiosidade">
                        <h4>Novo personagem reptiliano!</h4>
                        <p>
                        Zootopia 2 apresenta Gary De'Snake, o primeiro grande personagem réptil da franquia.
                        </p>
                    </div>
                    <div class="curiosidade">
                        <h4>Música inédita da Gazelle!</h4>
                        <p>
                        Shakira retorna como Gazelle e grava uma canção totalmente nova para o filme.
                        </p>
                    </div>

                    <div class="curiosidade">
                        <h4>Easter eggs do primeiro filme!</h4>
                        <p>
                        A continuação traz várias referências escondidas ao Zootopia original, incluindo objetos, pôsteres e piadas visuais reaproveitadas.
                        </p>
                    </div>
                </section>

                <!-----VEJA MAIS----->
                <h3 style="width: 130px;">Veja mais</h3>
                <div class="card-container">

                    <!--Thunderbolts-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-thunderbolts.php"; ?>
                    
                    <!--O incrivel mundo de gumball-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-o-incrivel-mundo-de-gumball.php"; ?>
                    
                    <!--SPIDER-MAN UM NOVO LAR-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-spider-man-um-novo-lar.php"; ?>
                </div>
            </div>

        </main>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/footer.php"; ?>

        <!--Script para ativar o ícone -->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/javascript/botao-menu.php"; ?>
    </body>
</html>
