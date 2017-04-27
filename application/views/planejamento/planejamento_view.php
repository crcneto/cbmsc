<div class="container-fluid">
    
        <div class="panel panel-primary" style="margin-left: auto; margin-right: auto;">
            <div class="panel-heading">
                <div class="panel-title text-center" style="font-size: 1em; font-weight: bolder;">Resumo do Planejamento</div>
            </div>

            <div class="row" style="margin-top: 15px; margin-right: 15px;">
                <div class="col-md-1" style="margin-left: -75px;"></div>
                <div class="col-md-3">
                    <div class="alert-info" style="border-radius: 10px; background-color: steelblue; color: white;">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center">Planejamento</h3>
                                <div class="text-center" style="font-weight: bolder;"><?= $obms[$plano['obm']]['nome'] ?></div>
                                <br>
                                <span style="margin-left: 10px;" class="">Data Início: <?= $plano['datainicio'] ?></span>
                                <br>
                                <br>
                                <span style="margin-left: 10px;">Data Limite: <?= $plano['datafim'] ?></span>
                                <br>
                                <br>
                                <span style="margin-left: 10px;">Avaliadora: <?php
                                    $this->load->helper('text');
                                    echo character_limiter($obms[$plano['obmavaliacaopendente']]['nome'], 20);
                                    ?></span>
                                <br>
                                <br>
                                <div class="row" style="margin-left: -5px;">
                                    <div class="col-md-5">
                                        <form action="<?= site_url('plano/aprovar') ?>" onsubmit="return confirm('Deseja realmente aprovar todo o planejamento? \n <?php if(isset($balanco)&&$balanco!=0){echo "(Este planejamento possui diferença entre as receitas e aplicações.) \n";} ?>(A operação não poderá ser desfeita)');" method="post">
                                            <input type="hidden" name="id" value="<?= $plano['id'] ?>" />
                                            <button type="submit" class="btn btn-success btn-xs" <?php if(isset($balanco) && $balanco!=0){echo "disabled=''";} ?>><i class="glyphicon glyphicon-thumbs-up">&nbsp;</i>Aprovar Plano</button> 
                                        </form>
                                    </div>
                                    <div class="col-md-5">
                                        <form action="<?= site_url('plano/reprovar_plano') ?>" onsubmit="return confirm('Reprovar o planejamento?');" method="post">
                                            <input type="hidden" name="id" value="<?= $plano['id'] ?>" />
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-thumbs-down">&nbsp;</i>Reprovar Plano</button> 
                                        </form>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" style="">
                    <div class="" id="chart_div"></div>
                </div>
                <div class="col-md-4" style="margin-left: 0px;">
                    <div class="" id="chart_div2" style=""></div>
                </div>
            </div>

        </div>
        <!--    <hr style="border: 1px solid gray;">-->


        <div class="panel panel-primary" style="margin-left: 0px;">
            <div class="panel-heading">
                <div class="panel-title text-center" style="font-weight: bolder;">Incluir no Planejamento&nbsp;&nbsp;<?php if(isset($balanco)&&$balanco!=0){?><span title="Balanço: R$&nbsp;<?= number_format($balanco, 2, ',', '.')?>"  data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-exclamation-sign"></i></span><?php }?></div>
            </div>
            <div class="panel-body">
                <form action="<?= site_url('planejamento/insert') ?>" class="form-inline" method="post">
                    <input type="hidden" name="plano" value="<?= $plano['id'] ?>" />
                    <div class="row" style="margin-left: 1px;">
                        <div class="form-group">
                            <label>Tipo</label>
                            <br>
                            <select name="tipo" class="form-control" onchange="recdesp(this)">
                                <option value="1" selected="">Receita</option>
                                <option value="2">Aplicação de Recurso</option>
                            </select>
                        </div>
                        <div class="form-group" id="espec">
                            <label>Item</label>
                            <br>
                            <select name="especificacao" id="especificacao" class="form-control selectpicker" data-live-search="true">
                                <?php foreach ($especs as $key => $v) { ?>
                                    <?php if ($key > 0) { ?>
                                <option value="<?= $key ?>"><?= $v['categoria'] ?>.<?= $v['natureza'] ?>.<?= $v['aplicacao'] ?>.<?= $v['objeto'] ?>.<?php if(strlen($v['nro'])<2){echo "0";}?><?=$v['nro']?> - <?= $v['nome'] ?></option>
                                    <?php } ?>
                                <?php } ?> 
                            </select>
                        </div>
                        <div class="form-group" id="origem">
                            <label>Fonte Pagadora</label>
                            <br>
                            <select name="fonte" id="origens" class="form-control">
                                <?php foreach ($origens as $key => $v) { ?>
                                    <?php if($v['status']==2){ ?>
                                    <option value="<?= $key ?>"><?= $v['nome'] ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Detalhamento</label>
                            <br>
                            <input type="text" name="detalhamento" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Data Prevista</label>
                            <br>
                            <input type="text" name="dataprevista" class="form-control datepicker" />
                        </div>
                        <div class="form-group">
                            <label>Quantidade</label>
                            <br>
                            <input type="text" name="qtd" class="form-control" size="6"/>
                        </div>
                        <div class="form-group">
                            <label>Valor Total</label>
                            <br>
                            <input type="text" name="valor" class="form-control money" size="6" value="0.00"/>
                        </div>
                        <div class="form-group" id="subsetor">
                            <label>Setor da aplicação</label>
                            <br>
                            <select name="subsetor" class="form-control">
                                <option value="0">Diversos</option>
                                <?php foreach ($setores as $k => $v) { ?>
                                <option value="<?=$k?>"><?=$v['setor']?> - <?=$v['subsetor']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Observações</label>
                            <br>
                            <input type="text" name="obs" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <br>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title text-center" style="font-weight: bolder;">Plano de aplicação</div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Data</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Fonte</th>
                        <th class="text-center">Especificação</th>
                        <th class="text-center">Detalhamento</th>
                        <th class="text-center">Qtde</th>
                        <th class="text-center" colspan="2">Valor Total</th>
                        <!--th class="">Total</th-->
                        <th class="text-center">Obs</th>
                        <th class="text-center">Operador</th>
                        <th class="text-center">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($planejamentos)) { ?>
                        <?php foreach ($planejamentos as $k => $p) { ?>
                    <tr style="<?php if($p['tipo']==1){echo "color:blue;";}else{echo "color:red;";}?>">
                        <td><?=inverte_data($p['dataprevista'])?></td>
                        <td><?=$tipos[$p['tipo']]?></td>
                        <td><?=$origens[$p['origemreceita']]['nome']?></td>
                        <td><?=$especs[$p['especificacao']]['nome']?></td>
                        <td><?=$p['detalhamento']?></td>
                        <td><?=$p['qtd']?></td>
                        <td>R$</td>
                        <td class="text-right"><?php echo money_format('%i', $p['valor']);?></td>
                        <!--td><?php//$p['valor']*$p['qtd']?></td-->
                        <td><?=$p['obs']?></td>
                        
                        <td><?php print_r($usuarios[$p['operador']]['apelido']);?></td>
                        <td class="text-center">
                            <form action="<?= site_url('planejamento/delete')?>" method="post" onsubmit="return confirma()">
                                <input type="hidden" value="<?=$p['id']?>" name="id" />
                                <input type="hidden" value="<?=$plano['id']?>" name="plano" />
                                <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
                                <?php if($p['status']!=2){ ?>
                                <i class="glyphicon glyphicon-exclamation-sign" style="color:red;" title="<?=$p['indeferimento']?>" data-toggle="tooltip" data-placement="left"></i>
                                <?php } ?>
                            </form>
                            <script>function confirma(){return confirm('Deseja realmente excluir este item?');}</script>
                        </td>
                    </tr>
                        <?php } ?>
                    <?php } ?>


                </tbody>
            </table>
        </div>
        <!--Indeferimentos-->
        <?php if(isset($reprovacoes)){ ?>
         <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title text-center" style="font-weight: bolder;">Indeferimentos</div>
            </div>
             <div class="panel-body">
                 <?php if(!$reprovacoes){ ?>
                 <h4 class="text-center">Plano sem indeferimentos</h4>
                 <?php } else { ?>
                 <table class="table table-striped table-hover table-bordered">
                     <thead>
                        <tr>
                             <th class="text-center">Responsável pelo indeferimento</th>
                             <th class="text-center">Data/Hora</th>
                             <th class="text-center">Motivo</th>
                        </tr>
                     </thead>
                    <?php foreach ($reprovacoes as $ks => $vs) { ?>
                        <tr>
                            <td class=""><?=$usuarios[$vs['operador']]['pg_nome']?>&nbsp;<?=$usuarios[$vs['operador']]['apelido']?></td>
                            <td class=""><?=$vs['ts']?></td>
                            <td class=""><?=$vs['motivo']?></td>
                        </tr>
                    <?php } ?>
                 <?php } ?>
                 </table>
             </div>
        
    </div>
    <?php } ?>
        
    <!--
    Fim indeferimentos
    -->
    
    <!--
    Gráficos Google Charts
    -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
                                $("#espec").hide();
                                $("#subsetor").hide();

                                // Load the Visualization API and the corechart package.
                                google.charts.load('current', {'packages': ['corechart']});

                                // Set a callback to run when the Google Visualization API is loaded.
                                google.charts.setOnLoadCallback(drawChart);

                                // Callback that creates and populates a data table,
                                // instantiates the pie chart, passes in the data and
                                // draws it.
                                function drawChart() {

                                    // Create the data table.
                                    var data = new google.visualization.DataTable();
                                    data.addColumn('string', 'Topping');
                                    data.addColumn('number', 'Slices');
                                    data.addRows([
                                        <?php foreach ($receitas as $k => $v) {?>
                                            ['<?=$origens[$v['origemreceita']]['nome']?>', <?=$v['sum']?>],
                                        <?php }?>
                                        /*['Arrecadação Municipal', 4],*/
                                    ]);
                                    var options = {'title': 'Previsão de Arrecadação: R$ <?=number_format($totalreceitas['total'], 2, ',', '.')?>',
                                        'width': 450,
                                        'height': 300};

                                    var data2 = new google.visualization.DataTable();
                                    data2.addColumn('string', 'Topping');
                                    data2.addColumn('number', 'Slices');
                                    data2.addRows([
                                        <?php foreach ($despesas as $k => $v) {?>
                                            ['<?=$v['nome']?>', <?=$v['sum']?>],
                                        <?php }?>
                                        /*['Custeio', 3],
                                        ['Investimento', 3],
                                        ['Reserva de Contingência', 1]*/
                                    ]);
                                    var options2 = {'title': 'Alocação de Recursos: R$ <?=number_format($totaldespesas['total'], 2, ',', '.')?>',
                                        'width': 450,
                                        'height': 300,
                                        'colors': ['blue', 'green', 'red', 'yellow']};


                                    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                                    var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));

                                    chart.draw(data, options);
                                    chart2.draw(data2, options2);
                                }
    </script>
    <!--Fim Gráficos-->

    <script type="text/javascript">
        function recdesp(elm) {
            if (elm.value == 1) {
                $('#espec').hide();
                $('#subsetor').hide();
                $('#origem').show();
                
            } else {
                $('#espec').show();
                $('#subsetor').show();
                //$('#origem').hide();
            }
        }

        function hid(elm) {
            elm.hide();
        }

    </script>

