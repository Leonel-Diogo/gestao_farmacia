<form action="/gestao_farmacia/controller/produto/produtoController.php?acao=inserirProduto" method="post"
    class="row g-3 needs-validation" novalidate>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Nome do produto</label>
        <input type="text" class="form-control" name="nome" id="validationCustom01" placeholder="Paracetamol" required>
        <div class="valid-feedback">
            Certo!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Data de validade</label>
        <div class="input-group has-validation">
            <input type="date" name="validade" class="form-control" id="validationCustomUsername"
                aria-describedby="inputGroupPrepend" required>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Quantidade em estoque</label>
        <input type="number" name="qtdestoque" class="form-control" id="validationCustom02" placeholder="20" required>
        <div class="valid-feedback">
            Certo!
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="tipo" class="form-label">Preço Unitário</label>
        <input type="number" name="precounitario" class="form-control" id="validationCustom02" placeholder="500"
            required>
    </div>


    <div class="col-md-6">
        <input hidden type="text" class="form-control" name="id" id="validationCustom01" required>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Inserir Produto</button>
    </div>
</form>