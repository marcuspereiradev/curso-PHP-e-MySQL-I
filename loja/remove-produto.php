<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>

<?php
    $id = $_GET['id'];
    removeProduto($conexao, $id);

    header("Location: produto-lista.php?removido=true");
    die();
?>

<?php include("rodape.php");?>