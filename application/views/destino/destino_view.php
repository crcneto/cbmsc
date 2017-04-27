<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text-center">Cadastro de Destinação da Aplicação</h3>

        <form action="<?= site_url('destino/insert') ?>" method="post">
            <div class="form-group">
                <div class="col-md-6">
                    <label class="control-label">Tipo de Aplicação</label>
                    <select class="form-control" name="aplicacao">
                        <?php foreach ($aplicacoes as $key => $value) { ?>
                            <option value="<?= $key ?>"><?= $value['nome'] ?></option>
                        <?php } ?>
                    </select>
                    <label class="control-label">Destino da Aplicação</label>
                    <br>
                    <input class="form-control" name="nome" type="text" value="<?php if (isset($destino['nome'])) {echo $destino['nome']; } ?>"/>
                </div>
                <div class="col-md-6">
                    <label class="control-label">Status</label>&nbsp;<span title="Quando ativo, o tipo se torna selecionável ao planejamento e registro de fatos contábeis. Quando desativado, se torna inacessível" data-toggle="tooltip" data-placement="top" ><i class="glyphicon glyphicon-question-sign"></i></span>

                    <select class="form-control" name="status">
                        <option value="2">Ativo</option>
                        <option value="0">Desativado</option>
                    </select>
                    <br>
                    <?php if (isset($destino['id'])) { ?>
                    <input type="hidden" name="id" value="<?php if (isset($destino['id'])) { echo $destino['id']; } ?>"/>
                    <?php } ?>
                    <button type="submit" class="btn btn-success col-md-12">Cadastrar</button>
                </div>



            </div>
        </form>
        <hr>
    </div>

    <div class="col-md-3"></div>
</div>
<hr>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text-center">Tipos de Aplicações Cadastradas</h3>
<?php echo $tabela; ?>
    </div>
    <div class="col-md-3"></div>
</div>