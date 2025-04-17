<!--<form action="../controller/usuarioController.php" method="post">-->

<form action="../controller/usuarioController.php?acao=inserir" method="post" class="row g-3 needs-validation"
    novalidate>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="validationCustom01" placeholder="Mark" required>
        <div class="valid-feedback">
            Certo!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" name="email" class="form-control" id="validationCustomUsername"
                aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Por favor, verifique o seu email
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Senha</label>
        <input type="password" name="senha" class="form-control" id="validationCustom02" placeholder="Otto" required>
        <div class="valid-feedback">
            Certo!
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <select class="form-select form-control" name="tipo" id="tipo" required>
            <option selected disabled value="">Selecione uma opção...</option>
            <option value="farmaceutico">Farmacêutico</option>
            <option value="cliente">Cliente</option>
        </select>
        <div class="invalid-feedback">
            Por favor, selecione uma opção válida!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telefone" placeholder="+244 000 000 000" id="validationCustom04"
            required>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="validationCustom05" name="endereco" required>
        <div class="invalid-feedback">
            Por favor, adicione o seu endereço
        </div>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Concordo com os termos e condições
            </label>
            <div class="invalid-feedback">
                Precisas concordar antes do cadastro
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <input hidden type="text" class="form-control" name="id" id="validationCustom01" placeholder="Mark" required>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </div>
</form>