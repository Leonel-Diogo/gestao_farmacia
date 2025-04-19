<form action="../controller/usuarioController.php?acao=editar&id=<?= $usuarios->id ?>" method="post"
    class="row g-3 needs-validation" novalidate>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Nome</label>
        <input type="text" class="form-control" value="<?= $usuarios->nome ?>" name="nome" id="validationCustom01"
            placeholder="Mark" required>
    </div>

    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" name="email" value="<?= $usuarios->email ?>" class="form-control"
                id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Senha</label>
        <input type="password" name="senha" value="<?= $usuarios->senha ?>" class="form-control" id="validationCustom02"
            placeholder="Otto" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <select class="form-select form-control" name="tipo" id="tipo" required>
            <option disabled value="">Selecione uma opção...</option>
            <option value="farmaceutico" <?= $usuarios->tipo == 'farmaceutico' ? 'selected' : '' ?>>Farmacêutico</option>
            <option value="cliente" <?= $usuarios->tipo == 'cliente' ? 'selected' : '' ?>>Cliente</option>
        </select>

    </div>

    <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Telefone</label>
        <input type="text" class="form-control" value="<?= $usuarios->telefone ?>" name="telefone"
            placeholder="+244 000 000 000" id="validationCustom04" required>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Endereço</label>
        <input type="text" class="form-control" value="<?= $usuarios->endereco ?>" id="validationCustom05"
            name="endereco" required>
    </div>
    <div class="col-md-6">
        <input hidden type="text" value="<?= $usuarios->id ?>" class="form-control" name="id" id="validationCustom01"
            placeholder="Mark" required>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </div>
</form>