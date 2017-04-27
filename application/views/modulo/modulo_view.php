<div class="container">
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title text-center">Cadastro de Módulos</div>
    </div>
    <div class="panel-body">
        <form action="<?= site_url('modulo/insert') ?>" method="post">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <label class="control-label">Nome do módulo</label>
                <input class="form-control" name="nome" type="text" value="<?php if (isset($mod['nome'])) {echo $mod['nome'];} ?>"/>
                <input type="hidden" name="id" value="<?php if (isset($mod['id'])) {echo $mod['id'];} ?>"/>
            </div>
            <div class="col-md-3">
                <br>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
            <div class="col-md-3"></div>
        </form>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title text-center">Módulos Cadastrados</div>
    </div>
    <div class="panel-body">
        <?php echo $tabela; ?>
    </div>
</div>
</div>
