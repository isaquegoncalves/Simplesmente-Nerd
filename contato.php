<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Simplesmente Nerd</title>
        <link rel="canonical" href="https://simplesmentenerd.com.br/contato.php" />
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
                <h2>Entre em contato conosco</h2>
                <p>Entre em contato conosco! Se você tem alguma dúvida, sugestão, crítica ou deseja falar diretamente com nossa equipe, basta preencher o formulário abaixo. Respondemos o mais rápido possível e teremos prazer em ajudar. Sua opinião é muito importante para nós.</p>

                <h4>Basta preencher o formulário abaixo</h4>

                <br>

                <!-- modify this form HTML and place wherever you want your form (FORMSPREE)-->
                    <form class="contact-form" action="https://formspree.io/f/mwpgbjzb" method="POST">

                        <label for="email">Digite seu email:</label>
                        <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>

                        <br><br>

                        <label for="message">Descreva sua mensagem:</label>
                        <br><br>
                        <textarea id="message" name="message" placeholder="Digite sua mensagem..." required></textarea>
                        <br>
                        <button type="submit">Enviar</button>
                    </form>

            </div>
        </main>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/php/footer.php"; ?>

        <!--Script para ativar o ícone -->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/javascript/botao-menu.php"; ?>
    </body>
</html>
