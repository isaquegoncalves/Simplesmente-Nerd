<?php 
echo'
    <header>
        <!--Menu Desktop-->
        <div class="header-top">
            <div class="titulo-e-logo">
                <img id="logo-sn" src="/config/imagens/logo-sn.png" alt="">
                <h1>Simplesmente Nerd</h1>
            </div>
            
            <div class="menu-icon" onclick="toggleMenu()">☰</div>
            <nav>
                <a href="/index.php">Home</a>
                <a href="/posts/filmes/secao-filmes.php" style="color: #14c9ff;">Filmes</a>
                <a href="/posts/jogos/secao-games.php" style="color: #14c9ff;">Games</a>
                <a href="#">Contato</a>
                <a href="/quem-somos.php">Quem Somos</a>
                <a href="/politicas.php">Políticas</a>
            </nav>
        </div>

        <!--Menu Mobile-->
        <div class="mobile-nav" id="mobileNav">
            <button class="close-btn" onclick="toggleMenu()">✖</button>
            <a href="/index.php">Home</a>
            <a href="/posts/filmes/secao-filmes.php" style="font-size: 40px; color: #14c9ff;">Filmes</a>
            <a href="/posts/jogos/secao-games.php" style="font-size: 40px; color: #14c9ff;">Games</a>
            <a href="#">Contato</a>
            <a href="/quem-somos.php">Quem Somos</a>
            <a href="/politicas.php">Políticas</a>
        </div>
    </header>
    ';
?>