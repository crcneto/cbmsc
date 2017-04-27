<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Adicionar Tarefa</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('tarefa/insert') ?>" method="post">
                <div class="col-md-3">
                    <label>Previsão de Conclusão</label>
                    <input type="text" class="form-control datepicker" name="data_prevista" />
                </div>
                <div class="col-md-7">
                    <label>Tarefa</label>
                    <textarea class="form-control" style="resize: none;" name="tarefa"></textarea>
                </div>
                <div class="col-md-2">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg">Nova tarefa</button>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Tarefas Pendentes</div>
        </div>
        <div class="panel-body">
            <?php
            if (isset($teste)) {
                echo "<pre>";
                print_r($teste);
                echo "</pre><br>";
            }
            ?>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Data prevista</th>
                        <th class="text-center">Tarefa</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($tarefas)) { ?>
                        <?php if (count($tarefas) > 0) { ?>
                            <?php foreach ($tarefas as $k => $v) { ?>
                                <tr>
                                    <td><?= inverte_data($v['data_prevista']) ?></td>
                                    <td><?= $v['tarefa'] ?></td>

                                    <td class="text-center">
                                        <?php if ($v['status'] == 2 && compara_data($v['data_prevista'], Date('Y-m-d')) < 0) { ?>
                                            <i class="glyphicon glyphicon-exclamation-sign text-info" title="Pendente dentro do prazo" data-toggle="tooltip" data-placement="top"></i>
                                        <?php } elseif ($v['status'] == 2 && compara_data($v['data_prevista'], Date('Y-m-d')) == 0) { ?>
                                            <i class="glyphicon glyphicon-exclamation-sign"  style="color:#ffcc00;" title="Prazo vence hoje" data-toggle="tooltip" data-placement="top"></i>
                                        <?php } elseif ($v['status'] == 2 && compara_data($v['data_prevista'], Date('Y-m-d')) > 0) { ?>
                                            <i class="glyphicon glyphicon-exclamation-sign" style="color:red;" title="Prazo vencido" data-toggle="tooltip" data-placement="top"></i>
                                        <?php } elseif ($v['status'] == 3) { ?>
                                            <i class="glyphicon glyphicon-ok-circle text-success" title="Tarefa Concluída" data-toggle="tooltip" data-placement="top"></i>
                                        <?php } elseif ($v['status'] == 1) { ?>
                                            <i class="glyphicon glyphicon-pause text-primary" title="Tarefa Suspensa" data-toggle="tooltip" data-placement="top"></i>
                                        <?php } ?>
                                    </td>
                                    <td>

                                        <?php if ($v['status'] == 2) { ?>
                                            <form action="<?= site_url('tarefa/suspender') ?>" method="post" onsubmit="return confirm('Suspender tarefa?');" class="col-xs-4 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-warning" title="Suspender"><i class="glyphicon glyphicon-pause"></i></button>
                                            </form>
                                            <form action="<?= site_url('tarefa/concluir') ?>" method="post" onsubmit="return confirm('Concluir tarefa (não poderá ser desfeito)?');" class="col-xs-4 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-success" title="Concluir"><i class="glyphicon glyphicon-ok"></i></button>
                                            </form>
                                            <form action="<?= site_url('tarefa/delete') ?>" method="post" onsubmit="return confirm('Excluir tarefa (não poderá ser desfeito)?');" class="col-xs-4 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-danger" title="Deletar"><i class="glyphicon glyphicon-remove"></i></button>
                                            </form>
                                        <?php } elseif ($v['status'] == 3) { ?>

                                            <form action="<?= site_url('tarefa/pendente') ?>" method="post" onsubmit="return confirm('Tornar tarefa pendente?');" class="col-xs-4 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-warning" title="Tornar pendente"><i class="glyphicon glyphicon-play"></i></button>
                                            </form>
                                            <form action="<?= site_url('tarefa/delete') ?>" method="post" onsubmit="return confirm('Excluir tarefa (não poderá ser desfeito)?');" class="col-xs-4 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-danger" title="Deletar"><i class="glyphicon glyphicon-remove"></i></button>
                                            </form>
                                        <?php } elseif ($v['status'] == 1) { ?>
                                            <form action="<?= site_url('tarefa/pendente') ?>" method="post" onsubmit="return confirm('Tornar pendente?');" class="col-xs-4 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-info" title="Tornar pendente"><i class="glyphicon glyphicon-play"></i></button>
                                            </form>
                                            <form action="<?= site_url('tarefa/concluir') ?>" method="post" onsubmit="return confirm('Concluir tarefa (não poderá ser desfeito)?');" class="col-xs-4 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-success" title="Concluir"><i class="glyphicon glyphicon-ok"></i></button>
                                            </form>
                                            <form action="<?= site_url('tarefa/delete') ?>" method="post" onsubmit="return confirm('Excluir tarefa (não poderá ser desfeito)?');" class="col-xs-4 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-danger" title="Deletar"><i class="glyphicon glyphicon-remove"></i></button>
                                            </form>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Tarefas Concluídas</div>
        </div>
        <div class="panel-body">
            <?php
            if (isset($teste)) {
                echo "<pre>";
                print_r($teste);
                echo "</pre><br>";
            }
            ?>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Data prevista</th>
                        <th>Tarefa</th>
                        <th>Data Conclusão</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($concluidas)) { ?>
                        <?php if (count($concluidas) > 0) { ?>
                            <?php foreach ($concluidas as $k => $v) { ?>
                                <tr>
                                    <td><?= inverte_data($v['data_prevista']) ?></td>
                                    <td><?= $v['tarefa'] ?></td>
                                    <td><?php
                                        if ($v['data_conclusao'] != null) {
                                            echo inverte_data($v['data_conclusao']);
                                        }
                                        ?></td>
                                    <td class="text-center">
                                        <?php if (compara_data($v['data_prevista'], $v['data_conclusao']) < 0) { ?>
                                            <i class="glyphicon glyphicon-exclamation-sign text-success" title="Concluída antes do prazo" data-toggle="tooltip" data-placement="top"></i>
                                        <?php } elseif (compara_data($v['data_prevista'], $v['data_conclusao']) == 0) { ?>
                                            <i class="glyphicon glyphicon-exclamation-sign text-info" title="Concluída no prazo." data-toggle="tooltip" data-placement="top"></i>
                                        <?php } elseif (compara_data($v['data_prevista'], $v['data_conclusao']) > 0) { ?>
                                            <i class="glyphicon glyphicon-exclamation-sign text-danger" title="Concluída depois do prazo" data-toggle="tooltip" data-placement="top"></i>
            <?php } ?>
                                    </td>
                                    <td>

            <?php if ($v['status'] == 3) { ?>

                                            <form action="<?= site_url('tarefa/pendente') ?>" method="post" onsubmit="return confirm('Tornar tarefa pendente novamente?');" class="col-xs-6 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-warning" title="Tornar pendente"><i class="glyphicon glyphicon-exclamation-sign"></i></button>
                                            </form>
                                            <form action="<?= site_url('tarefa/delete') ?>" method="post" onsubmit="return confirm('Excluir tarefa (não poderá ser desfeito)?');" class="col-xs-6 text-center">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>"/>
                                                <button type="submit" class="btn btn-danger" title="Deletar"><i class="glyphicon glyphicon-remove"></i></button>
                                            </form>
                                <?php } ?>
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