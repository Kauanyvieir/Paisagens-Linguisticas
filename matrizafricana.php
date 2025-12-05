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
    <title>Matriz Africana</title>
    <link rel="shortcut icon" href="img/favPl64.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estiloinfografico.css">
</head>

<body>
    <h1 class="tema">MATRIZ AFRICANA</h1>
    <div class="descricao">
        <p>A paisagem linguística de matriz africana pode ser entendida como o conjunto de manifestações linguísticas e
            culturais visuais(placas, murais, grafites, toponímia, símbolos religiosos, materiais escolares e outros
            objetos culturais) presentes em espaços públicos que refletem a presença, a memória e a identidade das
            comunidades africanas e afrodescendentes.</p>
    </div>

    <div class="container">
        <h2 class="titulo"><i>MATRIZ AFRICANA-INF 1A</i></h2>
        <a href="#img1" class="img-zoom"><img src="img/matrizafricana.png" class="img-fluid"></a>
        <p class="hastag">#infográficos #Info1A #MatrizAfricana</p>
        <?php mostrarComentarios("tema6", "post1")?>
    </div>
    <hr>
    <a href="index.html" class="botaovolta">Voltar para à página principal</a>

    <!-- Lightbox anchor -->
    <a href="#" class="lightbox" id="img1">
        <img src="img/matrizafricana.png" alt="Matriz Africana">
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