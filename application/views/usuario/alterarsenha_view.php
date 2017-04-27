<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    Alterar Senha
                </div>
            </div>
            <div class="panel-body">
                <form class="" action="<?= site_url('usuario/alterarsenha') ?>" method="post">
                    <div class="form-group">
                        <label>Senha atual</label>
                        <input type="password" name="senha1" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Nova senha</label>
                        <input type="password" name="senha2" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Confirmação da senha</label>
                        <input type="password" name="senha3" class="form-control" />
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>