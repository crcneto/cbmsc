<div class="container-fluid">
    <!--form action="<?php //site_url('plano/reprovar')  ?>" method="post" onsubmit="return confirm('O indeferimento tornará o plano aberto para edição novamente. Confirmar reprovação?');"-->
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Indeferir Plano</div>
        </div>
        <div class="panel-body">

            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <div class="panel-title"><span class="">Informações do planejamento</span></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12"><span style="font-weight: bold;">Plano</span> Nº: <?= $plano['id'] ?></div>
                        <div class="col-md-12"><span style="font-weight: bold;">OBM:</span> <?= $obms[$plano['obm']]['nome'] ?></div>
                        <div class="col-md-12"><span style="font-weight: bold;">Data Início:</span> <?= $plano['datainicio']; ?></div>
                        <div class="col-md-12"><span style="font-weight: bold;">Data Fim:</span> <?= $plano['datafim']; ?></div>
                        <div class="col-md-12"><span style="font-weight: bold;">Receitas:</span> </div>
                        <div class="col-md-12"><span style="font-weight: bold;">Aplicações:</span> </div>

                        <br>&nbsp;
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <div class="panel-title">Indeferimento geral <i class="glyphicon glyphicon-question-sign" title="Indeferir o plano sem justificar cada item." data-toggle="tooltip" data-placement="bottom"></i></div>
                    </div>
                    <div class="panel-body">
                        <form action="<?= site_url('plano/reprovar') ?>" method="post" onsubmit="return confirm('Deseja realmente indeferir o planejamento de maneira geral, tornando o planejamento editável novamente?');">
                            <input type="hidden" name="plano" value="<?=$id?>" />
                            <textarea name="motivo" class="form-control" style="resize: none;" rows="2"></textarea>
                            <br>
                            <br>
                            <button class="btn btn-success" type="submit">Indeferir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Itens do Planejamento</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Data</th>
                                <th class="text-center">Especificação</th>
                                <th class="text-center">Detalhamento</th>
                                <th class="text-center">Obs</th>
                                <th class="text-center">Qtd</th>
                                <th colspan="2" class="text-center">Valor</th>
                                <th class="text-center">Indeferimento individual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php /* foreach ($planejamentos as $k => $v) { ?>
                              <tr>
                              <td><?php echo inverte_data($v['dataprevista']); ?></td>
                              <td><?= $especs[$v['especificacao']] ?></td>
                              <td><?= $v['detalhamento'] ?></td>
                              <td><?= $v['obs'] ?></td>
                              <td class="text-center"><?= $v['qtd'] ?></td>
                              <td>R$</td>
                              <td class="text-right"><?php echo number_format($v['valor'], 2, ',', '.'); ?></td>
                              <td class="text-center"><input type="checkbox" name="plns[]" value="<?= $v['id'] ?>" <?php if($v['status']!=2){echo "checked=''";}?>/></td>
                              </tr>
                              <?php } */ ?>
                            <?php foreach ($planejamentos as $k => $v) { ?>
                                <tr style="vertical-align: middle;">

                                    <td style="vertical-align: middle;"><?php echo inverte_data($v['dataprevista']); ?></td>
                                    <td style="vertical-align: middle;" title="<?=$especs[$v['especificacao']]?>" ><?= character_limiter($especs[$v['especificacao']], 30, '...') ?></td>
                                    <td style="vertical-align: middle;"><?= $v['detalhamento'] ?></td>
                                    <td style="vertical-align: middle;" class="text-center"><i class="glyphicon glyphicon-info-sign" title="<?= $v['obs'] ?>" data-toggle="tooltip" data-placement="top"></i></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $v['qtd'] ?></td>
                                    <td style="vertical-align: middle;">R$
                                    <td class="text-right" style="vertical-align: middle;"><?php echo number_format($v['valor'], 2, ',', '.'); ?></td>
                                    <td>
                                        <?php if ($v['status'] == 2) { ?>
                                        <form action="<?= site_url('planejamento/indeferir') ?>" method="post" class="form-inline text-center" onsubmit="return confirm('Isto altera o status do plano para \'Reprovado\' tornando modificável novamente. Confirma?');">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>" />
                                                <textarea name="indeferimento" rows="1" cols="10" class="form-control" style="resize: none;"></textarea>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-thumbs-down"></i></button>
                                            </form>
                                        <?php } else { ?>
                                            <form action="<?= site_url('planejamento/deferir') ?>" method="post" class="text-center" onsubmit="return confirm('Essa ação excluirá o histórico de indeferimento deste item, porém não aprova o planejamento. Confirma?');">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>" />
                                                <button type="submit" class="btn btn-warning btn-sm" <?php if (isset($v['indeferimento'])) { ?> title="<?= $v['indeferimento'] ?>" data-toggle="tooltip" data-placement="left"<?php } ?>>Item indeferido&nbsp;<i class="glyphicon glyphicon-question-sign"></i></button>
                                            </form>
                                        <?php } ?>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/form-->
        </div>
