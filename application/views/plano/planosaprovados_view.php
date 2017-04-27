<?php $this->load->helper('data_helper');?>

<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    Filtros
                </div>
            </div>
            <div class="panel-body">
                <div class="col-md-3"></div>
                
                <form action="<?= site_url('plano/aprovados')?>" method="post" class="form-inline col-md-6">
                    <label>Por OBM</label>
                    <select name="obm" class="form-control">
                        <?php foreach ($obms as $ko => $vo) {?>
                        <option value="<?=$vo['id']?>"><?=$vo['nome']?></option>
                        <?php } ?>
                    </select>
                    <button class="btn btn-success">Filtrar</button>
                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    Planos Aprovados
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">OBM</th>
                            <th class="text-center">Data Início</th>
                            <th class="text-center">Data Fim</th>
                            <th class="text-center">Data Aprovação</th>
                            <th class="text-center">Responsável</th>
                            <th class="text-center">Visualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aprovados as $key => $value) { ?>
                            <tr>
                                <td class="text-center text-primary"><?=$obms[$value['obm']]['nome']?></td>
                                <td class="text-center"><?php echo inverte_data($value['datainicio']);?></td>
                                <td class="text-center"><?php echo inverte_data($value['datafim']);?></td>
                                <td class="text-center"><?php echo inverte_data(ts_to_date($value['aprovacao'])); ?></td>
                                <td><?=$usuarios[$value['responsavel']]['nome']?></td>
                                <td class="text-center">
                                    <form action="<?= site_url('planejamento/visualizar')?>" method="post">
                                        <input type="hidden" name="id" value="<?=$value['id']?>" />
                                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>

