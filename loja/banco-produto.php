<!-- Esse é o arquivo que acessa a tabela de produtos. -->
<?php
    function listaProdutos($conexao) {
        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos");
        
        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
        return $produtos;
    }

    function insereProduto($conexao, $nome, $preco) {
        // criando a query
        $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
        return mysqli_query($conexao, $query);
    }
    
    function removeProduto($conexao, $id) {
        $query = "DELETE FROM produtos WHERE id = {$id}";
        return mysqli_query($conexao, $query);
    }
?>