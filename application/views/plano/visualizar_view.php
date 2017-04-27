<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Plano de Aplicação</div>
        </div>
        <div class="panel-body">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <label>OBM</label>
                <input type="text" name="obm" value="<?=$obms[$plano['obm']]['nome']?>" disabled="" class="form-control"/>
            </div>
            <div class="col-md-3">
                <label>Data Inicial</label><br>
                <input type="text" name="di" value="<?=$plano['datainicio']?>" disabled="" class="form-control"/>
            </div>
            <div class="col-md-3">
                <label>Data Final</label><br>
                <input type="text" name="df" value="<?=$plano['datafim']?>" disabled="" class="form-control"/>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Resumo Geral</div>
        </div>
        <div class="panel-body">
            <div id="chart_receitas" class="col-md-6"></div><div id="chart_despesas" class="col-md-6"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Resumo do Planejamento das Aplicações</div>
        </div>
        <div class="panel-body">
            <div id="chart_aplicacoes"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Receitas</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Receita</th>
                        <th class="text-center">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($receitas as $kr => $vr) {?>
                    <tr class="text-info">
                        <td class="col-md-9"><?=$origens[$vr['origemreceita']]['nome']?></td>
                        <td class="col-md-3"><div class="text-left col-md-6">R$</div><div class="text-right col-md-6"><?=number_format($vr['sum'], 2, ',', '.')?></td>
                    </tr>
                    <?php } ?>
                    <tr class="">
                        <td class="col-md-9 text-right">TOTAL</td>
                        <td class="col-md-3"><div class="text-left col-md-6">R$</div><div class="text-right col-md-6"><?=number_format($totalreceitas['total'], 2, ',', '.')?></td>
                    </tr>
                </tbody>
            </table>
            <?php //print_r($receitas)?>
            <?php //print_r($origens)?>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Aplicações</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Cat/Nat/Apl/Obj</th>
                        <th class="text-center">Descrição</th>
                        <th class="text-center">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php setlocale(LC_MONETARY,"pt_BR", "ptb");?>
                    <?php foreach ($alldespesas as $kav => $kvav) {?>
                    <tr class="<?php if($kvav['categoria']==3){ echo "text-info";}elseif($kvav['categoria']==4){ echo "text-success";} ?>">
                        <td class="text-center"><?=$kvav['categoria']?>.<?=$kvav['natureza']?>.<?=$kvav['aplicacao']?>.<?=$kvav['objeto']?></td>
                        <td><?=$kvav['nome']?></td>
                        <td><div class="text-left col-md-6">R$</div><div class="text-right col-md-6"><?=number_format($kvav['valor'], 2, ',', '.');?></div></td>
                    </tr>
                    <?php } ?>
                    <tr class="">
                        <td colspan="2" class="text-right">TOTAL</td>
                        <td class=""><div class="text-left col-md-6">R$</div><div class="text-right col-md-6"><?=number_format($totaldespesas['total'], 2, ',', '.')?></td>
                    </tr>
                </tbody>
            </table>
            <pre><?php //print_r($alldespesas); ?></pre>
        </div>
    </div>
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
<?php foreach ($receitas as $k => $v) { ?>
                ['<?= $origens[$v['origemreceita']]['nome'] ?>', <?= $v['sum'] ?>],
<?php } ?>
            /*['Arrecadação Municipal', 4],*/
        ]);
        var options = {'title': 'Previsão de Arrecadação: R$ <?= number_format($totalreceitas['total'], 2, ',','.') ?>',
            'width': 450,
            'height': 300};

        var data2 = new google.visualization.DataTable();
        data2.addColumn('string', 'Topping');
        data2.addColumn('number', 'Slices');
        data2.addRows([
<?php foreach ($despesas as $k => $v) { ?>
                ['<?= $v['nome'] ?>', <?= $v['sum'] ?>],
<?php } ?>

        ]);
        var options2 = {'title': 'Alocação de Recursos: R$ <?= number_format($totaldespesas['total'], 2, ',', '.') ?>',
            'width': 450,
            'height': 300,
            'colors': ['blue', 'green', 'red', 'yellow']};


        var chart = new google.visualization.PieChart(document.getElementById('chart_receitas'));
        var chart2 = new google.visualization.PieChart(document.getElementById('chart_despesas'));

        chart.draw(data, options);
        chart2.draw(data2, options2);
    }

    function drawChart2() {
        var data = google.visualization.arrayToDataTable([
            ["Despesa", "Valor", {role: "style"}],
            <?php foreach ($alldespesas as $kd => $vd) {?>
            ["<?=$vd['nome']?>", <?=$vd['valor']?>, "blue"],
            <?php } ?>
            
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"},
            2]);

        var options = {
            title: "Resumo do planejamento das aplicações",
            width: 1000,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("chart_aplicacoes"));
        chart.draw(view, options);

    }
</script>