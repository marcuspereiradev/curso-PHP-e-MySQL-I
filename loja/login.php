<?php include("conecta.php"); ?>
<?php include("banco-usuario.php"); ?>
<?php include("logica-usuario.php"); ?>

<?php
    $usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
    var_dump($usuario);
    
    if ($usuario == NULL) {
        header("Location: index.php?login=0");
    }else {
        logaUsuario($usuario["email"]);
        header("Location: index.php?login=1");
    }
    die();
?>