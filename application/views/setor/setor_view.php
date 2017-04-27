<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Setor</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('setor/insert') ?>" method="post">
                <div class="col-md-4">
                    <label class="control-label">Setor</label><a href="<?= site_url('setor')?>" class="btn btn-link btn-sm"><?= gly("plus-sign", "Limpar/Cadastrar novo", "bottom")?></a>
                    <input class="form-control" name="nome" type="text" value="<?php if (isset($setor['nome'])) {echo $setor['nome'];} ?>"/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Status</label>
                    <select class="form-control" name="status">
                        <option value="2">Ativo</option>
                        <option value="0" <?php if(isset($setor)){if($setor['status']==0){echo "selected";}}?>>Desativado</option>
                    </select>
                    <?php if (isset($setor['id'])) { ?>
                    <input type="hidden" name="id" value="<?php if (isset($setor['id'])) {echo $setor['id'];} ?>"/>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                    <br>
                    <?php if(isset($setor)){ ?>
                    <?= btn("Alterar", "warning", "lg", "Editar setor", "top")?>
                    <?php } else { ?>
                    <?= btn("Cadastrar", "success", "lg", "Cadastrar", "top")?>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Setores Cadastrados</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Setor</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($setores)){ ?>
                        <?php if(count($setores)>0){ ?>
                            <?php foreach($setores as $k=>$v){ ?>
                            <tr <?php if($v['status']==0){echo "class='text-warning' title='Desativado' data-toggle='tooltip' data-placement='top'";}?>>
                                <td class="">
                                    <?=$v['nome']?>
                                </td>
                                <td class="text-center">
                                    <form action="<?= site_url('setor')?>" method="post">
                                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                                        <?= btn(gly('edit'), "info", 'sm', 'Editar', "top")?>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <form action="<?= site_url('setor/delete')?>" method="post" onsubmit="return confirm('Deseja realmente excluir o setor?\nEsta operação não poderá ser desfeita!')">
                                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                                        <?= btn(gly('remove'), "danger", 'sm', 'Excluir', "top")?>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
