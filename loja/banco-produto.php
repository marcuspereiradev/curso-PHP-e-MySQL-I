<!-- Esse é o arquivo que acessa a tabela de produtos. -->
<?php
    function listaProdutos($conexao) {
        $produtos = array();
        $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");
        
        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
        return $produtos;
    }

    function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id) {
        // criando a query
        $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
        return mysqli_query($conexao, $query);
    }
    
    function removeProduto($conexao, $id) {
        $query = "DELETE FROM produtos WHERE id = {$id}";
        return mysqli_query($conexao, $query);
    }
?>