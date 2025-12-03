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
                <h2>The Batman 2 - Sinopse</h2>
                <p class="data-autor">Por Saulo Henrique - 26/06/2025</p>

                <p>Após o sucesso de <em>The Batman</em> (2022), Robert Pattinson retorna ao papel de Bruce Wayne em uma nova história sombria e intensa. <em>The Batman 2</em> promete expandir a mitologia do herói com novos vilões, dilemas morais mais profundos e um Gotham ainda mais caótico.</p>

                <div class="poster-conteudo">
                    <img src="/config/imagens/fotos-filmes/banner-the-batman2-16x9.jpeg" alt="Poster do filme The Batman 2">
                </div>

                <h3 style="width: 350px;">O que esperar do novo capítulo?</h3>
                <p>
                    <em>The Batman 2</em> mantém a direção de Matt Reeves e seguirá na linha noir realista estabelecida no primeiro filme. A trama deve explorar as consequências dos eventos anteriores, com Bruce ainda lidando com os efeitos psicológicos de sua cruzada como vigilante, ao mesmo tempo que tenta entender seu papel como símbolo de esperança para Gotham.
                </p>

                <p>
                    Entre os rumores mais fortes está a introdução de Harvey Dent (Duas-Caras) como um dos principais antagonistas, além de uma possível expansão do personagem Coringa, interpretado por Barry Keoghan, que teve uma breve aparição no final do primeiro longa.
                </p>

                <p>
                    A narrativa também deve aprofundar o relacionamento entre Batman e Selina Kyle (Mulher-Gato), além de apresentar novos conflitos éticos, onde Bruce precisará lidar com o peso de suas escolhas e as consequências da violência que o cerca.
                </p>

                <br>

                <h3 style="width: 135px;">Conclusão</h3>
                <p>
                    O diretor Matt Reeves já afirmou que deseja construir uma trilogia sólida e autoral, com um desenvolvimento gradual dos personagens e da corrupção estrutural de Gotham, criando um universo que flerta com o realismo e deixa espaço para futuras ramificações, como a série do Pinguim (Colin Farrell), que também expandirá esse universo.
                </p>

                <br>

                <!-----VOCÊ SABIA-----> 
                <section class="voce-sabia">
                    <h3 class="titulo-box">Você sabia?</h3>
                    <div class="curiosidade">
                        <h4>Estilo investigativo e sombrio</h4>
                        <p>
                        O filme deve seguir o estilo "thriller investigativo", com forte inspiração em filmes como <em>Zodíaco</em> e <em>Seven</em>.
                        </p>
                    </div>
                    <div class="curiosidade">
                        <h4>Envolvimento de Pattinson</h4>
                        <p>
                        Robert Pattinson participou ativamente na construção psicológica do Batman para essa sequência.
                        </p>
                    </div>

                    <div class="curiosidade">
                        <h4>Data de lançamento definida</h4>
                        <p>
                        A estreia está marcada para 2 de outubro de 2026, após adiamentos causados por greves e ajustes no cronograma da Warner.
                        </p>
                    </div>
                </section>

                <!-----VEJA MAIS----->
                <h3 style="width: 130px;">Veja mais</h3>
                <div class="card-container">

                    <!--Superman: Legacy-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-superman-legacy.php"; ?>
                    
                    <!--Avengers Doomsday-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-avengers-doomsday.php"; ?>
                    
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
