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
    <link rel="shortcut icon" href="../img/logo/ico2.png" type="image/x-icon">
    <script src="../scripts/localização.js" defer></script>
</head>
<body>
    <header>
        <div class="cabecalho">
            <div class="logo_header">
                <img src="../img/logo/logo_preta.png" alt="Logo da Sport Zone" button onclick="window.location.href='index.html'">
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
            <?php
            if (isset($_GET['erro']) && $_GET['erro'] == "1") {
            ?>
                <div class="mensagem">
                    <?php
                    echo "Você informou algo errado, por favor insira os dados novamente!";
                    ?>
                </div>
            <?php
            }
            ?>
        </form>
    </main>

    <footer>
        <div class="divisao_footer">
            <div class="localizacao">
                <p>Acesse nossa localização</p>
                <button onclick="openGoogleMaps()"><p>Aperte Aqui</p> <img src="../img/icones/localizacao.png" alt="icone_de_localização"></button>
            </div>

            <div class="entre_contato">
                <p>Entre em contato com o Dono do Site</p>
                <button onclick="window.location.href='../entre_contato.php'"><p>Entrar em Contato</p></button>
            </div>

            <div class="compartilhe">
                <a href="https://www.instagram.com/computacaounifavip_/" target="_blank"><img src="../img/icones/instagram.png" alt="icone_instagram"></a>
                <a href="https://wa.me/5581995565707" target="_blank"><img src="../img/icones/whast.png" alt="icone_whastapp"></a>
                <a href="https://www.youtube.com/channel/UCOYJSpxWCWphWbT3lw0bwbw" target="_blank"><img src="../img/icones/youtube.png" alt="icone_youtube"></a>
            </div>
        </div>

        <div class="divisao_footer2">
            <div class="cartoes">
                <img src="../img/cartoes/santander.png" alt="icone">
                <img src="../img/cartoes/express.png" alt="icone">
                <img src="../img/cartoes/nunbak.png" alt="icone">
                <img src="../img/cartoes/visa.png" alt="icone">
                <img src="../img/cartoes/mastercard.png" alt="icone">
                <img src="../img/cartoes/hipercard.png" alt="icone">
                <img src="../img/cartoes/pix.png" alt="icone_pix">
            </div>
        </div>
    </footer>
</body>
</html>