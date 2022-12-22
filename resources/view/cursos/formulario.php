<form action="/salvar-curso<?= isset($dados['curso']) ? '?id=' . $dados['curso']->getId() : ''; ?>" method="post">
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input class="form-control" type="text" id="descricao" name="descricao" value="<?= isset($dados['curso']) ? $dados['curso']->getDescricao() : ''; ?>">
    </div>
    <button class="btn btn-primary">
        Salvar
    </button>
</form>