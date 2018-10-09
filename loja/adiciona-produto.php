<?php include("cabecalho.php")?>
<?php include("conecta.php")?>
<?php include("banco-produto.php");?>

<?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];


    // executando a query
    if (insereProduto($conexao, $nome, $preco)) { ?>
        <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
    <?php }else { 
        $msg = mysqli_error($conexao);
    ?>    
        <p class="text-danger">Produto <?= $nome; ?>, <?= $preco; ?> não foi adicionado: <?= $msg ?></p>
    <?php
    }

    // fechando a conexão MySQL
    mysqli_close($conexao);

    // e com isso o insert into é feito
?>
<?php include("rodape.php")?>