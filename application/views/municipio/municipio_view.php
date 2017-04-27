<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Município</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('municipio/insert') ?>" class="form-group" method="post">
                <div class="col-md-4">
                    <?php if (isset($mun['id'])) { ?>
                        <input type="hidden" name="id" value="<?= $mun['id'] ?>"/>
                    <?php } ?>
                        <label class="control-label">Nome do município</label><span class="mandatory_field">*</span>
                    <a href="<?= site_url('municipio')?>" class="btn-link btn-sm"><?= gly("plus-sign", "Limpar/Cadastrar Novo", "bottom")?></a>
                    <input type="text" name="nome" class="form-control" value="<?php
                    if (isset($mun['nome'])) {
                        echo $mun['nome'];
                    }
                    ?>"/>
                </div>
                <div class="col-md-2">
                    <label class="control-label">Abreviação</label><span class="mandatory_field">*</span>
                    <input type="text" name="abrev" class="form-control" value="<?php
                    if (isset($mun['abrev'])) {
                        echo $mun['abrev'];
                    }
                    ?>" />
                </div>
                <div class="col-md-2">
                    <label class="control-label">Nº de Habitantes</label>
                    <input type="text" name="habitantes" class="form-control" value="<?php
                    if (isset($mun['habitantes'])) {
                        echo $mun['habitantes'];
                    }
                    ?>"/>
                </div>
                <div class="col-md-2">
                    <label class="control-label">Status</label><span class="mandatory_field">*</span>
                    <select name="status" class="form-control">
                        <option value="2" selected="">Ativo</option>
                        <option value="0" <?php
                        if (isset($mun)) {
                            if ($mun['status'] == 0) {
                                echo "selected";
                            }
                        }
                        ?>>Desativado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <br>
                    <?php if (isset($mun)) { ?>
                        <?= btn("Alterar", "warning", 'lg', "Alterar Município", "bottom") ?>
                    <?php } else { ?>
                        <?= btn("Cadastrar", "success", 'lg', "Cadastrar Município", "bottom") ?>
<?php } ?>
                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Municípios Cadastrados</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Município</th>
                        <th>Cód. Abreviação</th>
                        <th>População</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($municipios)) { ?>
                        <?php if (count($municipios) > 0) { ?>
                            <?php foreach ($municipios as $k => $v) { ?>
                                <tr <?php if($v['status']==0){echo "class='text-warning' title='Desativado' data-toggle='tooltip'";} ?>>
                                    <td><?=$v['nome']?></td>
                                    <td class="text-center"><?=$v['abrev']?></td>
                                    <td class="text-right"><?= number_format($v['habitantes'], 0, ",", ".")?> habitantes</td>
                                    <td class="text-center">
                                        <form action="<?= site_url('municipio')?>" method="post">
                                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                                            <?= btn(gly("edit"), "info", NULL, "Editar", "top")?>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= site_url('municipio/delete')?>" method="post" onsubmit="return confirm('Deseja realmente excluir o município? \nEsta operação não poderá ser desfeita!');">
                                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                                            <?= btn(gly("remove"), "danger", NULL, "Remover", "top")?>
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