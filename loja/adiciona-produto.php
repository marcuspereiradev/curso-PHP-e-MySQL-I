<?php include("cabecalho.php")?>
<?php

    function insereProduto($conexao, $nome, $preco) {
        // criando a query
        $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
        return mysqli_query($conexao, $query);
    }

    $nome = $_GET["nome"];
    $preco = $_GET["preco"];

    // cria a conexão com o banco de dados
    $conexao = mysqli_connect('localhost', '', '', 'loja');


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