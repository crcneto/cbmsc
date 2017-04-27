<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Posto/Graduação</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('postograd/insert') ?>" method="post">
                <div class="col-md-3">
                    <label class="control-label">Posto/Graduação</label>
                    <br>
                    <input class="form-control" name="nome" type="text" value="<?php if (isset($postograd['nome'])) {echo $postograd['nome'];} ?>"/>
                </div>
                <div class="col-md-3">
                    <label class="control-label">Abreviação</label>
                    <input type="text" class="form-control" name="abrev" value="<?php echo $postograd['abrev']; ?>" />
   
                </div>
                <div class="col-md-3">
                    <label class="control-label">Status</label>
                    <select class="form-control" name="status">
                        <option value="2">Ativo</option>
                        <option value="0">Desativado</option>
                    </select>
                    <?php if (isset($postograd['id'])) { ?>
                    <input type="hidden" name="id" value="<?php if (isset($postograd['id'])) {echo $postograd['id'];} ?>"/>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <br>
                    <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Postos/Graduações Cadastradas</div>
        </div>
        <div class="panel-body">
            <?php echo $tabela; ?>
        </div>
    </div>
</div>