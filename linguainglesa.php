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
    <title>Lingua Inglesa</title>
    <link rel="shortcut icon" href="img/favPl64.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estiloinfografico.css">
</head>

<body>
    <h1 class="tema">Língua Inglesa</h1>
    <div class="descricao">
        <p>A paisagem linguística de língua inglesa refere-se ao conjunto de manifestações visíveis do inglês no espaço
            público, como sinais, placas, murais e outros elementos escritos que utilizam o inglês como meio de
            comunicação.
        </p>
    </div>
    <div class="container">
        <h2 class="titulo"><i>LÍNGUA INGLESA EM CAMISETAS - INF 1B</i></h2>
        <a href="#img1"><img src="img/linguainglesa1.png" class="img-fluid"></a>
        <p class="hastag">#infográficos#Info1B#LinguaInglesaemcamisetas#LinguaInglesa</p>
        <?php mostrarComentarios("tema2", "post1")?>
    </div>
    <hr>
    <div class="container">
        <h2 class="titulo"><i>LÍNGUA INGLESA EM BH- INF 1B</i></h2>
        <a href="#img2"><img src="img/linguainglesa2.png" class="img-fluid"></a>
        <p class="hastag">#infográficos #Info1B #LinguaInglesaemBH#LinguaInglesa</p>
        <a href="criar_conta.php" class="botao-insiracomentario">Insira seu comentário</a>
        <?php mostrarComentarios("tema2", "post2")?>
    </div>
    <hr>
    <div class="container">
        <h2 class="titulo"><i>LÍNGUA INGLESA BH- INF 1A</i></h2>
        <a href="#img3"><img src="img/linguainglesa3.png" class="img-fluid"></a>
        <p class="hastag">#infográficos #Info1A #LinguaInglesaemBH#LinguaInglesa</p>
        <a href="criar_conta.php" class="botao-insiracomentario">Insira seu comentário</a>
        <?php mostrarComentarios("tema2", "post3")?>
    </div>
    <hr>
    <div class="container">
        <h2 class="titulo"><i>LÍNGUA INGLESA EM RIBEIRÃO DAS NEVES- INF 1B</i></h2>
        <a href="#img4"><img src="img/linguainglesa4.png" class="img-fluid"></a>
        <p class="hastag">#infográficos#Info1B#LinguaInglesaemRibeirãodasNeves#LinguaInglesa#RibeirãodasNeves</p>
        <a href="criar_conta.php" class="botao-insiracomentario">Insira seu comentário</a>
        <?php mostrarComentarios("tema2", "post4")?>
    </div>
    <hr>
    </a>
    <a href="index.html" class="botaovolta">Voltar para à página principal</a>

    <!-- Lightbox anchors for each image -->
    <a href="#" class="lightbox" id="img1">
        <img src="img/linguainglesa1.png" alt="Língua Inglesa 1">
    </a>
    <a href="#" class="lightbox" id="img2">
        <img src="img/linguainglesa2.png" alt="Língua Inglesa 2">
    </a>
    <a href="#" class="lightbox" id="img3">
        <img src="img/linguainglesa3.png" alt="Língua Inglesa 3">
    </a>
    <a href="#" class="lightbox" id="img4">
        <img src="img/linguainglesa4.png" alt="Língua Inglesa 4">
    </a>

    <script>
        // Fecha o lightbox ao pressionar Esc
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' || e.key === 'Esc') {
                if (location.hash) location.hash = '';
            }
        });
    </script>
</body>

</html>