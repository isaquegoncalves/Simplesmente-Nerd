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
                <h2>Superman: Legacy - Sinopse</h2>
                <p>Prepare-se para conhecer um Superman completamente renovado. Com uma abordagem ousada, emocional e atual, o novo filme promete redefinir o herói mais icônico da DC e reacender a esperança do estúdio nas telonas.</p>

                <div class="poster-conteudo">
                    <img src="/config/imagens/fotos-filmes/banner-superman-legacy-16x9.jpeg" alt="Superman e Krypto">
                </div>
                
                <h3 style="width: 200px;">Um Novo Início</h3>
                <p>
                    "Superman (2025)", dirigido por James Gunn, inaugura oficialmente uma nova era no universo cinematográfico da DC. Nesta releitura, David Corenswet assume o papel do herói com uma abordagem mais humana e introspectiva, trazendo profundidade a um personagem muitas vezes representado apenas por sua força física.
                </p>

                <p>
                    O foco agora está na dualidade entre o legado kryptoniano e a humanidade de Clark Kent. A história mergulha em sua formação, valores e dilemas pessoais, humanizando o Homem de Aço sem deixar de lado seu simbolismo heroico. Este filme promete revelar não apenas o salvador do mundo, mas o homem por trás do símbolo dividido entre dois mundos e em busca de pertencimento.
                </p>

                <br>

                <h3 style="width: 344px;">Equilíbrio Entre Ação e Emoção</h3>
                <p>
                    Mais do que uma simples aventura, o novo filme pretende restaurar a essência do Superman para o público moderno. A narrativa explora profundamente sua relação com os pais adotivos, Martha e Jonathan Kent, que moldaram seus princípios éticos, além de destacar seus conflitos internos ao tentar se encaixar em um mundo que muitas vezes desconfia de figuras idealizadas.
                </p>

                <p>
                    Lois Lane retorna como uma jornalista perspicaz e independente, com papel crucial na trama. Já Lex Luthor ressurge como uma ameaça sofisticada, com motivações mais complexas e contemporâneas, refletindo o cinismo e os desafios morais do nosso tempo.
                </p>

                <p>
                    A direção de James Gunn — conhecido por transformar personagens secundários em ícones pop — é uma das maiores apostas da DC. Ele busca equilibrar ação, emoção e narrativa, oferecendo um Superman que seja grandioso sem perder sua humanidade. A promessa é de um roteiro que une empatia, reflexão e espetáculo em igual medida — algo que tem faltado nas últimas produções da franquia.
                </p>

                <br>

                <h3 style="width: 300px;">Teaser oficial de Superman</h3>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/6HsfXtgcAE4?si=jD836dsic58ow1oZ" 
                        title="Trailer de Superman 2025"
                        allowfullscreen
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                    </iframe>
                </div>

                <br><br>
                
                <h3 style="width: 300px;">A Nova Esperança da DC</h3>
                <p>
                    "Superman (2025)" representa mais do que o retorno de um dos maiores ícones da cultura pop: é a tentativa mais séria da DC de reinventar seu legado nas telonas. Apostando em uma estética mais sensível e em um storytelling emocionalmente honesto, o longa se posiciona como o alicerce de um novo universo cinematográfico.
                </p>

                <p>
                    Se cumprir o que promete, esse Superman não será apenas um herói poderoso — mas uma figura que inspira, conecta e emociona. Mais do que salvar o mundo, ele pode muito bem salvar o próprio futuro da DC nos cinemas.
                </p>

                <br><br>

                <!-----VOCÊ SABIA----->
                <section class="voce-sabia">
                    <h3 class="titulo-box">Você sabia?</h3>
                    <div class="curiosidade">
                        <h4>Primeira HQ do Mundo</h4>
                        <p>
                            Superman foi o primeiro super-herói de todos, surgindo em Action Comics #1 em 1938, marcando o nascimento oficial dos quadrinhos de super-heróis.
                        </p>
                    </div>
                    <div class="curiosidade">
                        <h4>Já Moveu um Planeta</h4>
                        <p>
                            Em algumas versões clássicas, Superman era tão poderoso que conseguia mover planetas inteiros com força bruta, literalmente um deus entre mortais.
                        </p>
                    </div>

                    <div class="curiosidade">
                        <h4>Elenco</h4>
                        <p>
                            Embora Henry Cavill não esteja no filme, o elenco incluirá atores talentosos que trarão vida ao personagem e aos seus aliados.
                        </p>
                    </div>
                </section>

                
                <!-----VEJA MAIS----->
                <h3 style="width: 130px;">Veja mais</h3>
                <div class="card-container">

                    <!--Superman: Legacy-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-avengers-doomsday.php"; ?>
                    
                    <!--Thunderbolts-->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/veja-mais/vm-thunderbolts.php"; ?>
                    
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
