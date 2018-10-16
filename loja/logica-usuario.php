<?php
    session_start();
    function usuarioEstaLogado() {
        return isset($_SESSION["usuario_logado"]);
    }
    
    function usuarioLogado() {
        return $_SESSION["usuario_logado"];
    }

    function logaUsuario($email) {
        $_SESSION["usuario_logado"] = $email;
    }

    function verificaUsuario() {
    if(!usuarioEstaLogado()) {
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    }

    function logout() {
        session_destroy();
    }
}

 ?>