<?php include("conecta.php"); ?>
<?php include("banco-usuario.php"); ?>
<?php include("logica-usuario.php"); ?>

<?php
    $usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
    var_dump($usuario);
    
    if ($usuario == NULL) {
        $_SESSION["danger"] = "Usuário ou senha inválida!";
        header("Location: index.php");
    }else {
        $_SESSION["success"] = "Usuário logado com sucesso!";
        logaUsuario($usuario["email"]);
        header("Location: index.php");
    }
    die();
?>