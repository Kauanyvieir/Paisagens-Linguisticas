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
    <title>Monolinguismo</title>
    <link rel="shortcut icon" href="img/favPl64.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estiloinfografico.css">
</head>

<body>
    <h1 class="tema">MONOLINGUISMO</h1>
    <div class="descricao">
        <p>Monolinguismo é a ideia de que um país ou comunidade utiliza apenas uma língua para se comunicar. No Brasil,
            isso se expressa no mito do monolinguismo: a crença de que aqui só se fala português. Na realidade,
            convivemos com centenas de outras línguas — indígenas, de imigração, de sinais e afro-brasileiras — que
            revelam a verdadeira diversidade linguística do país</p>
    </div>
    <div class="container">
        <h2 class="titulo"><i>MONOLINGUISMO - INF 1A</i></h2>
        <a href="#img1" class="img-zoom"><img src="img/monolinguismo_INF1A.pdf (800 x 1000 px).png"
                class="img-fluid"></a>
        <p>Nosso trabalho teve foco em registros monolíngues que colocam em evidências a diversidade da língua
            portuguesa utilizando diferentes variantes, gírias ou coloquialismos, trocadilhos e usos criativos
            (registros poéticos). os registros foram feitos na cidade de ribeirão das neves.</p>
        <p class="hastag">#infográficos #Info1A #Monolinguismo</p>
        <?php mostrarComentarios("tema1", "post1")?>
    </div>
    <hr>
    <a href="index.html" class="botaovolta">Voltar para à página principal</a>

    <!-- Lightbox anchor -->
    <a href="#" class="lightbox" id="img1">
        <img src="img/monolinguismo_INF1A.pdf (800 x 1000 px).png" alt="Monolinguismo">
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