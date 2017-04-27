<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <span>Planejamento por região (OBMs subordinadas)</span>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-md-1"></div>

            <form action="<?= site_url('planejamento/regiao') ?>" method="post" class=" col-md-10">
                <div class="col-md-3">
                    <label>Selecione a OBM responsável pela região&nbsp;<i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="top" data-original-title="Será apresentado um relatório resumido de todas as OBMs subordinadas à selecionada"  title="Será apresentado um relatório resumido de todas as OBMs subordinadas à selecionada"></i></label>
                    <select name="obm" class="form-control selectpicker" data-live-search="true">
                        <?php foreach ($obms as $ko => $vo) { ?>
                        <option value="<?= $vo['id'] ?>" <?php if(isset($obm_id)){if($vo['id']==$obm_id){echo "selected";}} ?>><?= $vo['nome'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Por objeto</label>
                    <br>
                    <br>
                    <select name="especificacao" class="form-control selectpicker" data-live-search="true">
                        <option value="todos">Todos</option>
                        <?php foreach ($especificacoes as $k => $v) { ?>
                        <option value="<?=$k?>"><?=$v['categoria']?>.<?=$v['natureza']?>.<?=$v['aplicacao']?>.<?=$v['objeto']?> - <?=$v['nome']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Data Inicial</label>
                    <br>
                    <br>
                    <input type="text" name="datainicio" class="form-control datepicker" value="<?php if(isset($datainicio)){echo $datainicio;}?>" />
                </div>
                <div class="col-md-2">
                    <label>Data Final</label>
                    <br>
                    <br>
                    <input type="text" name="datafim" class="form-control datepicker" value="<?php if(isset($datafim)){echo $datafim;}?>" />
                </div>
                <div class="col-md-2">
                    <label>&nbsp;</label>
                    <br>
                    <button class="btn btn-success btn-lg">Exibir</button>
                </div>
            </form>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <span>Resumo Geral</span><?php if(isset($obm_id)){ echo " -> ".$obms[$obm_id]['nome']; }?><?php if(isset($datainicio)){ echo "  (".$datainicio; }?><?php if(isset($datafim)){ echo "  a  ".$datafim.")"; }?>
            </div>
        </div>
        <div class="panel-body">
            <div id="chart_receitas" class="col-md-6"></div><div id="chart_despesas" class="col-md-6"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Resumo do Planejamento das Aplicações <?php if(isset($esp)){echo "(".$especificacoes[$esp]['nome'].")";}?> </div>
        </div>
        <div class="panel-body">
            <div id="chart_aplicacoes"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">titulo</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nº plano</th>
                        <th>Receita/Despesa</th>
                        <th>Origem</th>
                        <th>Cat/Nat/Apl/Obj/Espec</th>
                        <th>Valor</th>
                        <th>Data prevista</th>
                        <th>OBM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($geral)){ ?>
                    <?php foreach ($geral as $k => $v) { ?>
                    <tr class="<?php if($v['categoria']==0){echo "text-success";}elseif($v['categoria']==9){echo "text-info";}else{echo "text-warning";} ?>">
                        <td><?=$v['plano']?></td>
                        <td><?php if($v['tipo']==1){echo 'Receita';}else{echo "Aplicação";}?></td>
                        <td><?=$v['og_nome']?></td>
                    <td><?php if($v['categoria']!=0){?><?=$v['categoria']?>.<?=$v['natureza']?>.<?=$v['aplicacao']?>.<?=$v['objeto']?>&nbsp;<?=$v['descricao']?><?php }else{ echo "Receita";} ?></td>
                        <td class="text-right">
                            <div class="col-md-6 text-left">
                                R$
                            </div>
                            <div class="col-md-6 text-right"><?= number_format($v['valor'],2,',','.')?></div>
                        </td>
                        <td><?= inverte_data($v['dataprevista'])?></td>
                        <td><?=$v['obm_nome']?></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
            <!--pre>
                <?php //print_r($totalreceitas);?><br>
                <?php //print_r($totaldespesas);?><br>
                <?php //print_r($grupo_receitas);?><br>
                <?php //print_r($grupo_categorias);?><br>
                <?php //print_r($teste);?>
            </pre-->
        </div>
    </div>
    <?php //if(isset($apl_por_obm)){print_r($apl_por_obm);} ?>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">


    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages': ['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart1);
    google.charts.setOnLoadCallback(drawChart2);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart1() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
<?php foreach ($grupo_receitas as $k => $v) { ?>
                ['<?= $k?>', <?= $v ?>],
<?php } ?>
            /*['Arrecadação Municipal', 4],*/
        ]);
        var options = {'title': 'Previsão de Arrecadação: R$ <?= number_format($totalreceitas, 2, ',','.') ?>',
            'width': 450,
            'height': 300};

        var data2 = new google.visualization.DataTable();
        data2.addColumn('string', 'Topping');
        data2.addColumn('number', 'Slices');
        data2.addRows([
<?php foreach ($grupo_categorias as $k => $v) { ?>
                ['<?= $k ?>', <?= $v ?>],
<?php } ?>

        ]);
        var options2 = {'title': 'Alocação de Recursos: R$ <?= number_format($totaldespesas, 2, ',', '.') ?>',
            'width': 450,
            'height': 300,
            'colors': ['blue', 'green', 'red', 'yellow']};


        var chart = new google.visualization.PieChart(document.getElementById('chart_receitas'));
        var chart2 = new google.visualization.PieChart(document.getElementById('chart_despesas'));

        chart.draw(data, options);
        chart2.draw(data2, options2);
    }

    function drawChart2() {
        <?php if(isset($apl_por_obm)){ ?>
            var data = google.visualization.arrayToDataTable([
                ["OBM", "Valor", {role: "style"}],
                <?php foreach ($apl_por_obm as $kd => $vd) {?>
                ["<?=$vd['obm']?>", <?=$vd['sum']?>, "blue"],
                <?php } ?>
            
            ]);
        <?php } else { ?>
            var data = google.visualization.arrayToDataTable([
                ["Despesa", "Valor", {role: "style"}],
                <?php foreach ($grupo_aplicacoes as $kd => $vd) {?>
                ["<?=$kd?>", <?=$vd?>, "blue"],
                <?php } ?>

            ]);
        <?php } ?>
        

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"},
            2]);

        var options = {
            title: "Resumo do planejamento das aplicações <?php if(isset($esp)){echo "(".$especificacoes[$esp]['nome'].")";}?>",
            width: 1000,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("chart_aplicacoes"));
        chart.draw(view, options);

    }
</script>