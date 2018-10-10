<?php include("cabecalho.php")?>
<?php include("conecta.php")?>
<?php include("banco-produto.php");?>
<?php include("banco-categoria.php");?>

<?php
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];

    // executando a query
    if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) { ?>
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