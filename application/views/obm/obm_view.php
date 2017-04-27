<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">
                Cadastro de OBM
            </div>
        </div>
        <div class="panel-body">
            <form class="form-group" id="obm_form" action="<?= site_url('obm/insert') ?>" method="post">
                <?php if(isset($obm)){ ?>
                <input type="hidden" name="id" value="<?=$obm['id']?>"/>
                <?php } ?>
                <div class="col-md-2">
                    <label class="control-label">Nome da OBM</label><span class="mandatory_field">*</span><a href="<?= site_url('obm')?>" class="btn btn-link btn-sm"><?= gly("plus-sign", "Limpar/Cadastrar Novo", "bottom")?></a>
                    <input type="text" name="nome" class="form-control" value="<?php if (isset($obm['nome'])) {echo $obm['nome'];} ?>"/>
                </div>
                <div class="col-md-2">
                    <label class="control-label">Abreviação</label><span class="mandatory_field">*</span>
                    <input type="text" name="abrev" class="form-control" value="<?php if (isset($obm['abrev'])) {echo $obm['abrev'];} ?>" />
                </div>
                <div class="col-md-2">
                    <label class="control-label">OBM Superior</label>
                    <select name="superior" class="form-control selectpicker" data-live-search="true">
                        <?php if(isset($obmss)){ ?>
                            <?php if(count($obmss)>0){ ?>
                                <?php foreach ($obmss as $k => $v) {?>
                                <option value="<?=$v['id']?>"><?=$v['nome']?></option>
                                <?php }?>
                            <?php }?>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="control-label">Município</label>
                    <select name="municipio" class="form-control selectpicker" data-live-search="true">
                        <?php if(isset($muns)){ ?>
                            <?php if(count($muns)>0){ ?>
                                <?php foreach ($muns as $key => $value) {?>
                        <option value="<?=$key?>"<?php if(isset($obm['municipio'])){if($obm['municipio']==$value['id']){echo "selected";}}?>><?=$value['nome']?></option>
                                <?php }?>
                            <?php }?>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="control-label">Status</label><span class="mandatory_field">*</span>
                    <select name="status" class="form-control">
                        <option value="2">Ativo</option>
                        <option value="0" <?php if(isset($obm['status'])){if($obm['status']==0){echo "selected";}}?>>Desativado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <br>
                    <?php if(isset($obm)){ ?>
                    <?= btn("Alterar", "warning")?>
                    <?php } else { ?>
                    <?= btn("Cadastrar", "success")?>
                    <?php } ?>
                </div>
                
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">
                OBMs Cadastradas
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Abreviação</th>
                        <th>OBM Superior</th>
                        <th>Município</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($obms)){?>
                        <?php if(count($obms)>0){?>
                            <?php foreach ($obms as $k=>$v){?>
                                <tr <?php if($v['status']==0){echo "class='text-warning' title='Desativado' data-toggle='tooltip' data-placement='bottom'";}?>>
                                    <td class=""><?=$v['nome']?></td>
                                    <td class="text-right"><?=$v['abrev']?></td>
                                    <td class="text-center"><?=$obms[$v['superior']]['nome']?></td>
                                    <td class="text-center"><?=$muns[$v['municipio']]['nome']?></td>
                                    <td class="text-center">
                                        <form action="<?= site_url('obm')?>" method="post">
                                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                                            <?= btn(gly("edit"), "info", null, "Editar", "top")?>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= site_url('obm/delete')?>" method="post">
                                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                                            <?= btn(gly("remove"), "danger", null, "Excluir", "top")?>
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