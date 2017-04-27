<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Selecione o período</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('receitarestrita') ?>" method="post">
                <div class="col-md-4">
                    <label>Data Inicial</label>
                    <input type="text" name="di" class="form-control datepicker" value="<?php
                    if (isset($di)) {
                        echo inverte_data($di);
                    }
                    ?>" />
                </div>
                <div class="col-md-4">
                    <label>Data Final</label>
                    <input type="text" name="df" class="form-control datepicker" value="<?php
                    if (isset($df)) {
                        echo inverte_data($df);
                    }
                    ?>"/>
                </div>
                <div class="col-md-4">
                    <br>
                    <button type="submit" class="btn btn-success btn-lg">Carregar</button>
                </div>
            </form>
        </div>
    </div>
    <?php if (isset($receitas)) { ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title text-center" style="font-weight: bolder;">Total: R$ <?= number_format($totalgeral, 2, ',', '.') ?> &nbsp;-&nbsp; Distribuído: R$ <?php
                    if (isset($totalaplicado)) {
                        echo number_format($totalaplicado['total'], 2, ',', '.');
                    }
                    ?> </div>
            </div>
            <div class="panel-body">
                <div id="columnchart_material" style="width: 900px; height: 500px;"></div>
                <br>

            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title text-center">Distribuir receita</div>
            </div>
            <div class="panel-body">
                <form action="<?= site_url('receitarestrita/insert') ?>" method="post">
                    <?php if(isset($di) && isset($df)) { ?>
                    <input type="hidden" name="di" value="<?=$di?>" />
                    <input type="hidden" name="df" value="<?=$df?>" />
                    <?php } ?>
                    <div class="col-md-2">
                        <label>Selecione a receita</label>
                        <select name="receita" class="form-control selectpicker" data-live-search="true">
                            <?php foreach ($receitas as $k => $v) { ?>
                                <option value="<?=$v['id']?>"><?= $v['nome'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label>Selecione o plano</label>
                        <select name="plano" class="form-control selectpicker" data-live-search="true">
                            <?php foreach ($planos as $k => $v) { ?>
                                <option value="<?= $v['id'] ?>"><?php echo $obms[$v['obm']]['nome'] . " (" . inverte_data($v['datainicio']) . " a " . inverte_data($v['datafim']) . ")"; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label>Data Prevista</label>
                        <input type="date" name="dataprevista" class="form-control datepicker" required="" <?php if(isset($dp)) {echo "value='". inverte_data($dp)."' style='color:red;'";}?>/>
                    </div>
                    <div class="col-md-1">
                        <label>Qtd</label>
                        <input type="number" name="qtd" class="form-control" value="1" required=""/>
                    </div>
                    <div class="col-md-2">
                        <label>Valor Total</label>
                        <input type="text" name="valor" class="form-control money" required=""/>
                    </div>
                    <div class="col-md-2">
                        <label>Detalhamento</label>
                        <input type="text" name="detalhamento" class="form-control" />
                    </div>
                    <div class="col-md-1">
                        <br>
                        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Receita Distribuída</div>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Plano</th>
                            <th class="text-center">OBM</th>
                            <th class="text-center">Fonte Pagadora</th>
                            <th class="text-center">Detalhamento</th>
                            <th class="text-center" colspan="2">Valor</th>
                            <th class="text-center">Data Prevista</th>
                            <th class="text-center">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (isset($todasrestritas)) { ?>
                            <?php if (count($todasrestritas > 0)) { ?>
                                <?php foreach ($todasrestritas as $k => $v) { ?>
                                    <tr>
                                        <td class="text-center">
                                            <form action="<?= site_url('planejamento/visualizar') ?>" method="post" id="form_visualizar<?= $v['plano'] ?>">
                                                <input type="hidden" name="id" value="<?= $v['plano'] ?>" />
                                                <i class="glyphicon glyphicon-eye-open text-success" onclick="$('#form_visualizar<?= $v['plano'] ?>').submit()" style="cursor: pointer;" title="Visualizar plano" data-toggle="tooltip" data-placement="top"></i>
                                            </form>

                                        </td>
                                        <td><?= $v['obm'] ?></td>
                                        <td><?= $v['og_nome'] ?></td>
                                        <td><?= $v['detalhamento'] ?></td>
                                        <td class="text-left">R$</td> <td class="text-right"><?= number_format($v['valor'], 2, ',', '.') ?></td>
                                        <td><?= inverte_data($v['dataprevista']) ?></td>
                                        <td class="text-center">
                                            <?php if ($v['status'] == 1 || $v['status'] == 2) { ?>
                                                <form action="<?= site_url('receitarestrita/delete_item') ?>" method="post" onsubmit="return confirm('Deseja realmente excluir esta receita? Isto excluirá o item do planejamento da OBM. \n Esta operação não poderá ser desfeita.');">
                                                    <input type="hidden" name="id" value="<?= $v['planejamento'] ?>" />
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <i class="glyphicon glyphicon-exclamation-sign text-warning" title="Este item não pode ser removido porque está incluido em um planejamento já aprovado" data-toggle="tooltip" data-placement="left"></i>
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
                <div class="panel-title">Testes</div>
            </div>
            <div class="panel-body">
                <pre><?php //print_r($comparativo);  ?></pre>
                <br>
                <pre><?php //print_r($todasrestritas);  ?></pre>
            </div>
        </div>
    <?php } ?>
</div>
<?php if (true) { ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
                                                    google.charts.load('current', {'packages': ['bar']});
                                                    google.charts.setOnLoadCallback(drawChart);

                                                    function drawChart() {
                                                        var data = google.visualization.arrayToDataTable([
                                                            ['Receitas', 'TOTAL', 'DISTRIBUIDO'],
    <?php if (isset($comparativo)) { ?>
        <?php foreach ($comparativo as $k => $v) { ?>
                                                                    ['<?= $v['nome'] ?>', <?= $v['total'] ?>, <?= $v['distribuido'] ?>],
        <?php } ?>
    <?php } ?>
                                                        ]);

                                                        var options = {
                                                            chart: {
                                                                title: 'Situação Atual',
                                                                subtitle: 'Distribuição das receitas restritas (BM4/BM6)',
                                                            }
                                                        };

                                                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                                        chart.draw(data, options);
                                                    }
    </script>

<?php } ?>

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