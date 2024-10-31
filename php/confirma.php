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
    <link rel="stylesheet" href="../style/entrecontanto.css">
</head>
<body>
    <header>
        <div class="cabecalho">
            <div class="logo_header">
                <img src="img/logo/logo_preta.png" alt="Logo da Sport Zone" button onclick="window.location.href='index.html'">
            </div>

            <div class="barra_pesquisa">
                <input type="text" name="pesquisa" id="pesquisa" placeholder="O que você está procurando?">
                <div class="div_lupa">
                    <img src="" alt="Lupa de Pesquisa">
                </div>
            </div>
        </div>

        <nav>
            <div class="butoes_nav">
                <button button onclick="window.location.href='futebol.html'">Futebol</button>
                <button button onclick="window.location.href='corrida.html'">Corrida</button>
                <button button onclick="window.location.href='sportzone.html'">Sobre Nós</button>
                <div class="dark_mode" onclick="toggleDarkMode()">
                    <div class="p_dark_mode">
                        <p>Dark Mode</p>
                    </div>
                    <div class="button_dark_mode">
                        <div class="bnt_dark" onclick="togglebutton()">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <form method="POST" action="validacao2.php">
            <p>Confirme seus Dados</p>
            <label for="name">Nome</label>
            <input type="text" name="name" value="<?php echo $nome?>">
    
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email?>">
    
            <label for="idade">Idade</label>
            <input type="number" name="idade" value="<?php echo $idade?>">
    
            <input type="submit" value="Confirmar" class="enviar">
        </form>
    </main>

    <footer>
        <div class="divisao_footer">
            <div class="localizacao">
                <p onclick="openGoogleMaps()">Acesse nossa localização</p>
                <img src="" alt="Vetor de Localização">
            </div>

            <div class="entre_contato" onclick="window.location.href='entre_contato.html'">
                <p>Entre em Contanto</p>
                <img src="" alt="icone contato">
            </div>

            <div class="compartilhe">
                <img src="" alt="icone_instagram">
                <img src="" alt="icone_whastapp">
                <img src="" alt="icone_fecebook">
            </div>
        </div>

        <div class="divisao_footer2">
            <div class="cartoes">
                <img src="" alt="icone">
                <img src="" alt="icone">
                <img src="" alt="icone">
                <img src="" alt="icone">
                <img src="" alt="icone">
                <img src="" alt="icone">
                <img src="" alt="icone">
            </div>
        </div>
    </footer>
</body>
</html>