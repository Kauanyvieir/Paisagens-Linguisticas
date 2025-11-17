<?php 
    // if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    //     $usuario = $_POST['usuario'];
    //     $senha = $_POST['senha'];
    // }
?>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body class="fundo-login">
    <div class="container-fluid h-100 m-0 p-0 d-flex justify-content-center align-items-center">
        <div class="row d-flex justify-content-center align-items-center bloco-branco-login shadow rounded-4">
            <div class="col-12 col-12-md">
                <nav class="navbar navbar-expand-lg mb-5">
                    <div class="container-fluid">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <h3 class="textos-login mx-4">Paisagens Linguísticas</h3>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textos-login" href="" onclick="history.back(); return false;"><b>SAIR</b></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <h2 class="textos-login mb-2"><b>Login</b></h2>
            <h1><?php echo htmlspecialchars($_POST['usuario']) ?></h1>
            <h1><?php echo (int) $_POST['senha'] ?></h1>

            <div class="row d-flex justify-content-center">
                <div class="col">
                        <div class="input-group mb-3">
                            <i class="bi bi-person d-flex align-items-center mx-3"></i>
                            <form action="login.php" method="post">
                                <input name="usuario" type="text" class="form-control" placeholder="Usuário">
                            </form>
                        </div>

                        <div class="input-group mb-3">
                            <i class="bi bi-lock d-flex align-items-center mx-3"></i>
                            <form action="login.php" method="post">                            
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </form>
                        </div>

                    <a class="nav-link mx-5 mb-5" href="">Esqueci minha senha</a>
                    <button class="btn mb-3 rounded-3" id="botao-login" type="button">Login</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>