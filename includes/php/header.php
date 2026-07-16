<?php
echo'
    <header>
        <!--Menu Desktop-->
        <div class="header-top">
            <div class="titulo-e-logo">
                <img id="logo-sn" src="/config/imagens/logo-sn.png" alt="">
                <h1>Simplesmente Nerd</h1>
                <p style="color: gray; font-family: bebas neue">Beta</p>
            </div>
            
            <div class="menu-icon" onclick="toggleMenu()">☰</div>
            <nav>
                <a href="/index.php">Home</a>
                <a href="/posts/filmes/secao-filmes.php" style="color: #14c9ff;">Filmes</a>
                <a href="/posts/jogos/secao-games.php" style="color: #14c9ff;">Games</a>
                <a href="/contato.php">Contato</a>
                <a href="/sobre.php">Sobre</a>
                <a href="/politica-de-privacidade.php">Política de Privacidade</a>
                <a href="/termos-de-uso.php">Termos de Uso</a>
            </nav>
        </div>

        <!--Menu Mobile-->
        <div class="mobile-nav" id="mobileNav">
            <button class="close-btn" onclick="toggleMenu()">✖</button>
            <a href="/index.php">Home</a>
            <a href="/posts/filmes/secao-filmes.php" style="font-size: 40px; color: #14c9ff;">Filmes</a>
            <a href="/posts/jogos/secao-games.php" style="font-size: 40px; color: #14c9ff;">Games</a>
            <a href="/contato.php">Contato</a>
            <a href="/sobre.php">Sobre</a>
            <a href="/politica-de-privacidade.php">Política de Privacidade</a>
            <a href="/termos-de-uso.php">Termos de Uso</a>
        </div>
    </header>
    ';
?>