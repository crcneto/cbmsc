<!DOCTYPE html>
<?php if (TRUE) { ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title text-center">Controle de Acesso</div>
            </div>
            <div class="panel-body">
                <form action="<?= site_url('acesso') ?>" method="post" id="form1">
                    
                        <div class="col-md-6">

                            <label>Selecione o usuário</label>
                            <select class="form-control selectpicker" name="usuario" size="4" onchange="javascript:getElementById('form1').submit();" data-live-search="true">
                                <?php foreach ($usuarios as $kuser => $vuser) { ?>
                                    <option value="<?= $vuser['id'] ?>" title="<?= $vuser['nome'] ?>" <?php if ($vuser['id'] == $usuario['id']) {
                                echo "selected";
                            } ?>><?= $postograds[$vuser['postograd']]['abrev'] ?>&nbsp;<?= $vuser['matricula'] ?>&nbsp;<?= $vuser['apelido'] ?></option>
    <?php } ?>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Selecione a OBM</label>
                            <select class="form-control selectpicker" name="obm" size="4" onchange="javascript:getElementById('form1').submit();" data-live-search="true">
                                <?php foreach ($obmsautorizadas as $kobm => $vobm) { ?>
                                    <option value="<?= $vobm['id'] ?>" <?php if ($vobm['id'] == $obm['id']) {
                                echo "selected";
                            } ?>><?= $vobm['nome'] ?></option>
    <?php } ?>
                            </select>
                        </div>
                        <!--div class="col-md-2">
                            <br>
                            <br>
                            <br>
                            <button class="btn btn-success btn-lg">Carregar</button>
                        </div-->
                    
                </form>
                <div class="row">
                    <div class="col-md-12">&nbsp;</div>
                </div>
<?php if($usuario['id']!=null && $obm['id']!=null){ ?>
                <form action="<?= site_url('acesso/controle') ?>" method="post" class="form-horizontal">
                    <input type="hidden" name="usuario" id="usuario_input" value="<?= $usuario['id'] ?>" />
                    <input type="hidden" name="obm" id="obm_input" value="<?= $obm['id'] ?>" />
                    <table class="table table-bordered table-striped table-hover text-center">
                        <thead>
                            <tr class="text-primary">
                                <th class="text-center">Módulo</th>
                                <th class="text-center">Nível</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php foreach ($modulos as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['nome'] ?></td>
                                    <td>
                                        <input type="radio" name="<?=$value['id']?>" value="0" <?php if(count($acessos)>0){if(isset($acessos[$value['id']])){if($acessos[$value['id']]['nivel']==0){echo "checked";}}}?>/>&nbsp;Desativado&nbsp;&nbsp;
                                        <input type="radio" name="<?=$value['id']?>" value="1" <?php if(count($acessos)>0){if(isset($acessos[$value['id']])){if($acessos[$value['id']]['nivel']==1){echo "checked";}}}?>/>&nbsp;Usuário&nbsp;&nbsp;
                                        <input type="radio" name="<?=$value['id']?>" value="3" <?php if(count($acessos)>0){if(isset($acessos[$value['id']])){if($acessos[$value['id']]['nivel']==3){echo "checked";}}}?> />&nbsp;Gerente&nbsp;&nbsp;
                                        <input type="radio" name="<?=$value['id']?>" value="5" <?php if(count($acessos)>0){if(isset($acessos[$value['id']])){if($acessos[$value['id']]['nivel']==5){echo "checked";}}}?>/>&nbsp;Administrador
                                    </td>
                                </tr>
    <?php } ?>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </form>
<?php } ?>
            </div>
        </div>
        
    </div>

<?php } else { ?>

<?php } ?>





