<?php 
session_start();
$ultima_pagina = '';
if (isset($_SESSION['pag_atual'])) {
    $ultima_pagina = $_SESSION['pag_atual'];
}
$_SESSION['pag_atual'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Indígena</title>
    <link rel="shortcut icon" href="img/favPl64.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estiloinfografico.css">
</head>

<body>
    <h1 class="tema">Matriz Indígena</h1>
    <div class="descricao">
        <p></p>O levantamento de paisagem linguística de matriz indígena pode ser definido como a identificação e
        análise sistemática das manifestações linguísticas visuais presentes em espaços públicos — incluindo sinais,
        murais, grafites, materiais escolares e objetos culturais — em que línguas indígenas ou outros elementos
        semióticos de suas culturas são mobilizados.
        </p>
    </div>

    <div class="container">
        <h2 class="titulo"><i>Matriz indígena- INF 1B</i></h2>
        <a href="#img1" class="img-zoom"><img src="img/matrizindigena.png" class="img-fluid"></a>
        <p class="hastag">#infográficos #Info1A #Monolinguismo</p>
        <a href="criar_conta.php" class="botao-insiracomentario">Insira seu comentário</a>
        <details>
            <summary class="botao-vercomentario">Ver outros comentários</summary>
            <div class="fundocomentarios">
                <div class="titulocoment">
                    <a href="" class="botaoprincipal">SAIR</a>
                    <h2 class="tituloexplore">Comentários</h2>
                    <hr>
                </div>
                <div class="comments">
                    <div class="comment-card">
                        <div class="comment-user">Usuário 1</div>
                        <div class="comment-text">Comentário do usuário 1 aqui.</div>
                    </div>

                    <div class="comment-card">
                        <div class="comment-user">Usuário 2</div>
                        <div class="comment-text">Comentário do usuário 2 aqui.</div>
                    </div>

                    <div class="comment-card">
                        <div class="comment-user">Usuário 3</div>
                        <div class="comment-text">Comentário do usuário 3 aqui.</div>
                    </div>
                </div>
                <div class="add-comment">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder=" Adicione um comentário">
                        <button class="btn" type="button">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </div>
            </div>
        </details>
    </div>
    <hr>
    <a href="index.html" class="botaoprincipal">Voltar para à página principal</a>

    <!-- Lightbox anchor -->
    <a href="#" class="lightbox" id="img1">
        <img src="img/matrizindigena.png" alt="Matriz Indígena">
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