<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $nome = $_SESSION['usuario']['nome'];
    $email = $_SESSION['usuario']['email'];
    $idade = $_SESSION['usuario']['idade'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Esportiva | Sport Zone</title>
</head>
<body>
    <header>
        <div>
            <img src="" alt="Logo da Sport Zone">
        </div>
        <div class="barra_pesquisa">
            <input type="text" name="pesquisa" id="pesquisa" placeholder="O que você está procurando?">
            <div>
                <img src="" alt="Lupa de Pesquisa">
            </div>
        </div>

        <nav>
            <div class="categorias">
                <p>Categorias</p>
                    <ul>
                        <li>
                            <button onclick="window.location.href='futebol.html'">Futebol</button>
                            <ul class="submenu">
                                <li><button onclick="window.location.href='camisas_time.html'">Camisas de Time</button></li>
                                <li><button onclick="window.location.href='shorts_time.html'">Shorts</button></li>
                                <li><button onclick="window.location.href='chuteiras.html'">Chuteiras</button></li>
                            </ul>
                        </li>
                        <li>
                            <button button onclick="window.location.href='corrida.html'">Corrida</button>
                            <ul class="submenu">
                                <li><button button onclick="window.location.href='camisetas.html'">Camisetas</button></li>
                                <li><button button onclick="window.location.href='shorts.html'">Shorts</button></li>
                                <li><button button onclick="window.location.href='tenis.html'">Tênis</button></li>
                            </ul>
                        </li>
                    </ul>
            </div>

            <button button onclick="window.location.href='futebol.html'">Futebol</button>
            <button button onclick="window.location.href='corrida.html'">Corrida</button>
            <button button onclick="window.location.href='sportzone.html'">Sport Zone</button>
            <button>Dark Mode</button>
        </nav>
    </header>

    <main>
        <form method="POST" action="../index.html">
            <label for="name">Nome</label>
            <input type="text" name="name" value="<?php echo $nome?>">
    
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email?>">
    
            <label for="idade">Idade</label>
            <input type="number" name="idade" value="<?php echo $idade?>">
    
            <input type="submit" value="Confirmar">
        </form>
    </main>

    <footer>
        <div class="localizacao">
            <p onclick="openGoogleMaps()">Acesse nossa localização</p>
            <img src="" alt="Vetor de Localização">
        </div>

        <div class="entre_contato" onclick="window.location.href='entre_contato.html'">
            <p>Entre em Contanto</p>
        </div>

        <div class="compartilhe">
            <img src="" alt="icone_instagram">
            <img src="" alt="icone_whastapp">
            <img src="" alt="icone_fecebook">
        </div>

        <div class="cartoes">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </footer>
</body>
</html>