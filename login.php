<?php 
session_start();
$ignoradas = ['login.php', 'criar_conta.php'];
$pagina_atual = basename($_SERVER['PHP_SELF']);
if (!in_array($pagina_atual, $ignoradas)) {
    if (isset($_SESSION['pag_atual'])) {
        $_SESSION['pag_anterior'] = $_SESSION['pag_atual'];
    }
$_SESSION['pag_atual'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
$ultima_pagina = $_SESSION['pag_anterior'] ?? null;

$result = "";
if (isset($_POST['usuario']) && isset($_POST['senha']) && $_POST['usuario'] !== "" && $_POST['senha'] !== "") {
    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    $linhas = file('banco_de_dados/usuarios.txt');
    $login = false;
    for ($i=0; $i < count($linhas); $i+=2) {
       $usuario_bd = trim($linhas[$i]);
       if (!isset($linhas[$i + 1])) {
        continue;
        }
       $senha_bd = trim($linhas[$i+1]);

       if ($usuario === $usuario_bd && $senha === $senha_bd) {
            $login = true;
            break;
        }
    }

    if ($login) {
        $_SESSION['usuario'] = $usuario;

        header("Location: index.html");
        exit;
    } else {
        $result = "Usuário ou senha incorretos, tente novamente";
    }
} 
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
                                <a class="nav-link textos-login" href="<?php echo $ultima_pagina ?>"><b>SAIR</b></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <h2 class="textos-login mb-2"><b>Login</b></h2>

            <div class="row d-flex justify-content-center">
                <div class="col">
                    <form action="login.php" method="post">
                        <div class="input-group mb-3">
                            <i class="bi bi-person d-flex align-items-center mx-3"></i>
                            <input name="usuario" type="text" class="form-control" placeholder="Usuário">
                        </div>

                        <p><?php echo $result; ?></p>

                        <div class="input-group mb-3">
                            <i class="bi bi-lock d-flex align-items-center mx-3"></i>
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                        </div>

                        <a class="nav-link mx-5 mb-5" href="">Esqueci minha senha</a>
                        <button class="btn mb-3 rounded-3" id="botao-login" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>