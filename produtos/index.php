<?php

require_once("../cabecalho.php");

?>
<h1>Gerenciamento de Produtos</h1>

<a href="inserir_produto.php" class="btn btn-primary mt-3">Adicionar Produto</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $linhas = retornarProdutos();
            while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                
        ?>
        <tr>
            <td>Persuasão</td>
            <td>Livro de Jane Austen</td>
            <td>R$10,00</td>
            <td>Livros</td>
            <td>
                <a href="alterar_produto.php" class="btn btn-warning">Alterar</a>
                <a href="excluir_produto.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

<?php
require_once("../rodape.html");
