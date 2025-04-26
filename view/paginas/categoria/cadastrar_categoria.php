<form action="/gestao_farmacia/controller/categoria/categoriaController.php?acao=inserirCategoria" method="post"
    class="row g-3 needs-validation" novalidate>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Nome categoria</label>
        <input type="text" class="form-control" name="nome" id="validationCustom01" placeholder="Paracetamol" required>
        <div class="valid-feedback">
            Certo!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Descrição</label>
        <div class="input-group has-validation">
            <input type="text" name="descricao" class="form-control" id="validationCustomUsername"
                aria-describedby="inputGroupPrepend" required>
        </div>
    </div>

    <div class="col-md-6">
        <input hidden type="text" class="form-control" name="id" id="validationCustom01" required>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </div>
</form>