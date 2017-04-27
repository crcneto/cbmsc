<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Novo Plano de Aplicação</div>
        </div>
        <div class="panel panel-body">
            <form action="<?= site_url('plano/insert') ?>" method="post">
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="control-label">OBM</label>
                        <br>
                        <select name="obm" class="form-control selectpicker" data-live-search="true">
                            <?php foreach ($obms as $key => $value) { ?>
                                <option value="<?= $key ?>"><?= $value['nome'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label">Início do Planejamento</label>
                        <input type="text" name="datainicio" class="form-control datepicker" />
                    </div>
                    <div class="col-md-3">
                        <label class="control-label">Data Limite do Planejamento</label>
                        <input type="text" name="datafim" class="form-control datepicker" />
                    </div>
                    <div class="col-md-3">
                        <br>
                        <button type="submit" class="btn btn-success">Iniciar Planejamento</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Planos Não Finalizados</div>
        </div>
        <div class="panel-body">
            <?php echo $tabela; ?>
        </div>
    </div>
</div>

<script>
    function confirmacao(elm, act) {
        var c = confirm("Deseja realmente " + act + " o plano de aplicação?");
        if (c) {
            var e = document.getElementById(elm);
            e.submit();
        }

    }
</script>