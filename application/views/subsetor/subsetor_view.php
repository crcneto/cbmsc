<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Derivação de Setor</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('subsetor/insert') ?>" method="post">
                <input type="hidden" name="id" value="<?php if (isset($subsetor['id'])) {echo $subsetor['id'];} ?>"/>
                <div class="col-md-3">
                    <label class="control-label">Setor</label><a href="<?= site_url('subsetor')?>" class="btn btn-link btn-sm"><?= gly("plus-sign", "Limpar/Cadastrar novo", "bottom")?></a>
                    <select name="setor" class="form-control selectpicker" data-live-search="true">
                        <?php if(isset($sets)){ ?>
                            <?php if(count($sets)>0){ ?>
                                <?php foreach ($sets as $key => $value) {?>
                        <option value="<?=$value['id']?>" <?php if(isset($subsetor)){if($subsetor['setor']==$value['id']){echo "selected";}}?>><?=$value['nome']?></option>
                                <?php }?>
                            <?php }?>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="control-label">Derivação do Setor</label><span class="mandatory_field">*</span>
                    <input type="text" name="nome" class="form-control" value="<?php if (isset($subsetor['nome'])) {echo $subsetor['nome'];} ?>"/>
                </div>
                <div class="col-md-3">
                    <label class="control-label">Status</label><span class="mandatory_field">*</span>
                    <select name="status" class="form-control">
                        <option value="2" selected="">Ativo</option>
                        <option value="0" <?php if(isset($subsetor)){if($subsetor['status']==0){echo "selected";}}?>>Desativado</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <br>
                    <?php if(isset($subsetor)){ ?>
                    <?= btn("Alterar", "warning", "lg", "Alterar cadastro", "top")?>
                    <?php } else { ?>
                    <?= btn("Cadastrar", "success", "lg", "Cadastrar", "top")?>
                    <?php } ?>
                </div>
                
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Subsetores Cadastrados</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Setor</th>
                        <th>Derivação</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($subsetores)){ ?>
                        <?php if(count($subsetores)>0){ ?>
                            <?php foreach($subsetores as $k=>$v){ ?>
                                <tr <?php if($v['status']==0){echo "class='text-warning' title='Desativado' data-toggle='tooltip' data-placement='top'";}?>>
                                    <td><?=$setores[$v['setor']]['nome']?></td>
                                    <td><?=$v['nome']?></td>
                                    <td class="text-center">
                                        <form action="<?= site_url('subsetor')?>" method="post">
                                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                                            <?= btn(gly("edit"), "info", "sm", "Editar", "top")?>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= site_url('subsetor/delete')?>" method="post" onsubmit="return confirm('Deseja realmente excluir esta derivação?\nEsta operação não poderá ser desfeita!');">
                                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                                            <?= btn(gly("remove"), "danger", "sm", "Excluir", "top")?>
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