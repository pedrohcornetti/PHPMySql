<?php
    require_once("../cabecalho.html");
?>

<h3>Excluir Produto</h3>
<form>
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="descricao" class="form-label">Informe a descrição</label>
            <input type="text" class="form-control" name="descricao" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" name="valor" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="categoria" class="form-label">Selecione a categoria</label>
            <select class="form-select" name="categoria" disabled>
                <option value="1">Categoria 1</option>
                <option value="2">Categoria 2</option>
                <option value="3">Categoria 3</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <p>Deseja realmente excluir?</p>
        <button type="submit" class="btn btn-danger mt-3">Excluir</button>
        </div>
</form>



<?php
    require_once("../rodape.html");