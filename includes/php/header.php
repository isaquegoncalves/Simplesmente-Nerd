<?php 
echo'
    <header>
        <div class="header-top">
            <div class="titulo-e-logo">
                <img id="logo-sn" src="/config/imagens/logo-sn.png" alt="">
                <h1>Simplesmente Nerd</h1>
            </div>
            
            <div class="menu-icon" onclick="toggleMenu()">☰</div>
            <nav>
                <a href="/index.php">Home</a>
                <a href="/posts/filmes/secao-filmes.php">Filmes</a>
                <a href="#">Games</a>
                <a href="#">Contato</a>
                <a href="#">Quem Somos</a>
            </nav>
        </div>

        <!--Menu Mobile-->
        <div class="mobile-nav" id="mobileNav">
            <button class="close-btn" onclick="toggleMenu()">✖</button>
            <a href="/index.php">Home</a>
            <a href="/posts/filmes/secao-filmes.php">Filmes</a>
            <a href="#">Games</a>
            <a href="#">Contato</a>
            <a href="#">Quem Somos</a>
        </div>
    </header>
    ';
?>