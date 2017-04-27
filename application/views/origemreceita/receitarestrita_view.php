<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Receitas Restritas <i class="glyphicon glyphicon-question-sign" title="Módulo utilizado pela administração (Cmdo) para definir, por exemplo, o montante repassado pelo Estado que será distribuído às OBMs." data-toggle="tooltip" data-placement="bottom"></i></div>
        </div>
        <div class="panel-body">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="<?= site_url('origemreceita/receitarestritainsert') ?>" method="post">
                    <div class="col-md-12">
                        <label>Selecione a fonte pagadora</label> <a href="<?= site_url('origemreceita/receitarestrita')?>" class="btn btn-link btn-sm">Novo</a>
                        <select name="receita" class="form-control selectpicker" data-live-search="true">
                            <?php if (isset($rrs)) { ?>
                                <?php if (count($rrs) > 0) { ?>
                                    <?php foreach ($rrs as $k => $v) { ?>
                            <option value="<?= $v['id'] ?>" <?php if(isset($receita)){if($v['id']==$receita['receita']){echo "selected";}}?>><?= $v['nome'] ?></option>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row container-fluid">
                        <div class="col-md-6">
                            <label>Data inicial&nbsp;<i class="glyphicon glyphicon-question-sign" title="Data de início da vigência desta receita, podendo ser anual, mensal, semestral, de acordo com a determinação da administração." data-toggle="tooltip" data-placement="top"></i></label>
                            <input type="text" name="datainicial" class="form-control datepicker" value="<?php if(isset($receita)){ echo inverte_data($receita['data_inicial']);} ?>"/>
                        </div>
                        <div class="col-md-6">
                            <label>Data final&nbsp;<i class="glyphicon glyphicon-question-sign" title="Data final da vigência desta receita, podendo ser anual, mensal, semestral, de acordo com a determinação da administração." data-toggle="tooltip" data-placement="top"></i></label>
                            <input type="text" name="datafinal" class="form-control datepicker" value="<?php if(isset($receita)){ echo inverte_data($receita['data_final']);} ?>"/>
                        </div>
                        <div class="col-md-12">
                            <label>Valor</label>
                            <input type="text" name="valor" class="form-control money" value="<?php if(isset($receita)){echo $receita['valor'];}?>" />
                        </div>
                        <div class="col-md-12">
                            <label>Observações</label>
                            <textarea name="obs" class="form-control" style="resize: none;"><?php if(isset($receita)){ ?><?=$receita['obs']?><?php } ?></textarea>
                        </div>
                        <?php if(isset($receita)) { ?>
                        <input type="hidden" name="id" value="<?=$receita['id']?>" />
                        <?php } ?>
                        <div class="col-md-12 text-center">
                            <br>
                            <button type="submit" class="btn btn-success btn-lg"><?php if(isset($receita)){echo "ALTERAR"; }else{ echo "Incluir";} ?></button>
                            <br>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Receitas cadastradas</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Receita</th>
                        <th class="text-center" colspan="2">Data de vigência <i class="glyphicon glyphicon-question-sign"  title="Data Inicial / Data Final de quando a receita estará disponível para distribuição às OBMs" data-toggle="tooltip" data-placement="top"></i></th>
                        <th class="text-center" colspan="2">Valor</th>
                        <th class="text-center">Obs</th>
                        <th class="text-center">Alterar</th>
                        <th class="text-center">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($restritas)) { ?>
                        <?php if (count($restritas) > 0) { ?>
                            <?php foreach ($restritas as $k => $v) { ?>
                                <tr>
                                    <td><?= $rrs[$v['receita']]['nome'] ?></td>
                                    <td class="text-center"><?= inverte_data($v['data_inicial']) ?></td>
                                    <td class="text-center"><?= inverte_data($v['data_final']) ?></td>
                                    <td class="text-right" style="border-right: none;">R$</td>
                                    <td class="text-right" style="border-left: none;"><?= number_format($v['valor'], 2, ',', '.') ?></td>
                                    <td class="text-center"><i class="glyphicon glyphicon-question-sign" title="<?= $v['obs'] ?>" data-toggle="tooltip" data-placement="top"></i></td>
                                    <td class="text-center">
                                        <form action="<?= site_url('origemreceita/receitarestrita')?>" method="post">
                                            <input type="hidden" name="id" value="<?= $v['id']?>" />
                                            <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= site_url('origemreceita/receitarestritadelete')?>" method="post" onsubmit="return confirm('Tem certeza que deseja excluir esta receita? \n A operação não poderá ser desfeita.');">
                                            <input type="hidden" name="id" value="<?= $v['id']?>" />
                                            <button type="submit" class="btn btn-danger" title="Apagar receita" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-edit"></i></button>
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


<!--div class="col-md-6 container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">Teste</div>
        </div>
        <div class="panel-body">
            teste
        </div>
    </div>
</div-->