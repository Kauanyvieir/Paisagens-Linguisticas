<?php 
session_start();
$ultima_pagina = '';
if (isset($_SESSION['pag_atual'])) {
    $ultima_pagina = $_SESSION['pag_atual'];
}
$_SESSION['pag_atual'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

include 'comentarios.php';

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translinguismo</title>
    <link rel="shortcut icon" href="img/favPl64.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estiloinfografico.css">
</head>

<body>
    <h1 class="tema">Translinguismo</h1>
    <div class="descricao">
        <p>Translinguismo é a prática de usar diferentes línguas de forma integrada em uma mesma interação, sem separar
            rigidamente os idiomas.Por exemplo, uma caixa de gorjetas em Díli, Timor-Leste, havia palavras em inglês,
            tétum e português misturadas em uma única frase.</p>
    </div>

    <div class="container">
        <h2 class="titulo"><i>TRANSLINGUISMO- INF 1A</i></h2>
        <a href="#img1"><img src="img/translinguismo.png" class="img-fluid"></a>
        <p>Nossa análise traz elementos com mistura da língua inglesa com português e também uma mistura do português
            com francês</p>
        <p class="hastag">#infográficos #Info1A #Translinguismo</p>
        <?php mostrarComentarios("tema4", "post1")?>
    </div>
    <hr>
    <div class="container">
        <h2 class="titulo"><i>TRANSLINGUISMO- INF 1B</i></h2>
        <a href="#img2" class="img-zoom"><img src="img/translinguismo1.png" class="img-fluid"></a>
        <p>Translinguismo é quando as pessoas usam várias línguas juntas, sem separar, para se comunicar melhor. É uma
            mistura natural de palavras e expressões de línguas diferentes no dia a dia.</p>
        <p class="hastag">#infográficos #Info1B #Translinguismo</p>
        <a href="criar_conta.html" class="botao-insiracomentario">Insira seu comentário</a>
        <?php mostrarComentarios("tema4", "post2")?>
    </div>
    <hr>
    <a href="index.html" class="botaovolta">Voltar para à página principal</a>

    <!-- Lightbox anchors -->
    <a href="#" class="lightbox" id="img1">
        <img src="img/translinguismo.png" alt="Translinguismo INF 1A">
    </a>
    <a href="#" class="lightbox" id="img2">
        <img src="img/translinguismo1.png" alt="Translinguismo INF 1B">
    </a>

    <script>
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' || e.key === 'Esc') {
                if (location.hash) location.hash = '';
            }
        });
    </script>
</body>

</html>