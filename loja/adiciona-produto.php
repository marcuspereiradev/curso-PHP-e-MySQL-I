<?php include("cabecalho.php")?>
<?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];

    // cria a conexão com o banco de dados
    $conexao = mysqli_connect('localhost', '', '', 'loja');

    // criando a query
    $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
    var_dump(mysql_error($conexao));

    // executando a query
    mysql_query($conexao, $query);

    // fechando a conexão MySQL
    mysql_close($conexao);

    // e com isso o insert into é feito
?>
<p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php include("rodape.php")?>