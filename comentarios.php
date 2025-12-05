<?php
    $arquivo = "banco_de_dados/comentarios.txt";
    $comentarios = [];
    

    function adicionarComentario($idt, $idp, $usuario, $conteudo){
        global $arquivo;
        $linha = $idt . "|" . $idp . "|" . $usuario . "|" .htmlspecialchars($_POST["conteudo"], ENT_QUOTES, 'UTF-8') . "\n";
        file_put_contents($arquivo, $linha, FILE_APPEND);
    }


    function carregarComentario(){
        global $arquivo, $comentarios;
        if(file_exists($arquivo)){
            $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($linhas as $linha) {
                $dados = explode("|", $linha);
                if (count($dados) == 4) {
                    [$id_tema,$id_post, $usuario, $comentario] = $dados;
                    $usuario = trim($usuario);
                    $comentario = trim($comentario);
                    $comentario = str_replace("\n", "<br>", $comentario);

                    if(!isset($comentarios[$id_tema])){
                        $comentarios[$id_tema] = [];
                    }

                    if(!isset($comentarios[$id_tema][$id_post])){
                        $comentarios[$id_tema][$id_post] = [];
                    }

                    $comentarios[$id_tema][$id_post][] = [
                        'usuario' => $usuario,
                        'comentario' => $comentario
                        ];
                }
            }
        }
    }

    function mostrarComentarios($tema, $id_post){
        global $comentarios;
?>
    <form action="" method="POST" class="enviar">
        <input type="hidden" name="id_tema" value="tema1">
        <input type="hidden" name="post_id" value="post1">
        <input type="text" class="" name="conteudo" placeholder=" Insira seu comentário">
        <button class="btn" type="submit">
            <i class="bi bi-send"></i>
        </button>
    </form>
    <details id="comentarios">
        <summary class="botao-vercomentario">Ver outros comentários</summary>
        <div class="fundocomentarios"> 
            <div class="titulocoment">
                <a href="" class="botaoprincipal"  onclick="fecharComentarios(event)">SAIR</a>
                <h2 class="tituloexplore">Comentários</h2>
                <hr>
            </div>
            <?php
            // ou "post2" dependendo do bloco
                if(empty($comentarios[$tema][$id_post])){
                    echo "<p>Nenhum comentário ainda.</p>";
                } else {
                    foreach($comentarios[$tema][$id_post] as $com){
                        echo "<div class='comment-card'>
                                <div class='comment-user'>{$com['usuario']}</div>
                                <div class='comment-text'>{$com['comentario']}</div>
                            </div>";
                    }
            }
            ?>
        </div>
        <form action="" method="POST">
            <div class="add-comment">
                <div class="input-group">
                    <input type="hidden" name="id_tema" value="<?= $tema ?>">
                    <input type="hidden" name="post_id" value="<?= $id_post ?>">
                    <input type="text" class="form-control" name="conteudo" placeholder=" Adicione um comentário">
                    <button class="btn" type="submit">
                        <i class="bi bi-send"></i>
                    </button>
                </div>
            </div>
        </form>
    </details>
    <script>
        function fecharComentarios(event) {
            event.preventDefault(); // impede que o link recarregue a página
            const detalhes = document.getElementById('comentarios');
            detalhes.removeAttribute('open'); // fecha o <details>
        }
</script>
    
<?php 
    } 

    function processarEnvio(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if(isset($_POST["conteudo"]) && !empty($_POST["conteudo"])){
            if(!isset($_SESSION['usuario'])){
                header("Location: criar_conta.php");
                exit;
            }
            $usuario = $_SESSION["usuario"];
            $idt = $_POST["id_tema"];
            $idp = $_POST["post_id"];
            adicionarComentario($idt, $idp, $usuario, $_POST["conteudo"]);
            header("Location: " . $_SERVER['PHP_SELF']); 
            exit;
        }
    }


processarEnvio();
carregarComentario();

?>