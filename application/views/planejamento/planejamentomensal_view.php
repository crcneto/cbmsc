<?php if (!isset($toView)) { ?>
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-header alert-info text-center">
                <h3 class="panel-title">Planejamento Mensal</h3>
            </div>
            <div class="panel-body">
                <div class="">
                    <span>OBM: <?= $obm['nome'] ?></span>
                </div>
                <form action="<?= site_url('planejamento/insertmulti')?>" method="post" class="">
                    <div class="form-group">
                        <div class="input-group">
                            <label>Data Prevista <span class="glyphicon glyphicon-question-sign" title="Data prevista para o acontecimento (receita/aplicação de recurso).Geralmente utilizado o último dia do mês desejado." data-toggle="tooltip" data-placement="right">&nbsp;</span></label>
                            <input type="text" name="data" class="form-control datepicker" />
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th colspan="6" class="text-center">
                                    <h3>Receitas</h3>
                                </th>
                            </tr>
                            <tr>
                                <th>Fonte Pagadora</th>
                                <th>Detalhamento</th>
                                <th>Quantidade</th>
                                <th>Valor Total</th>
                                <th>Observações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($origens as $key => $value) { ?>
                                <tr>
                                    <td style="font-weight: bolder;"><?= $value['nome'] ?></td>
                                    <td><input type="text" name="detalhamento" class="form-control"/></td>
                                    <td><input type="text" name="qtd" class="form-control" size="3"/></td>
                                    <td><input type="text" name="valor" class="form-control" size="3"/></td>
                                    <td><input type="text" name="obs" class="form-control" size="20"/></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td colspan="6" class="text-center"><h3>Aplicação de Recurso</h3></td>
                            </tr>
                            <tr>
                                <th class="text-center">Fonte Pagadora</th>
                                <th class="text-center">Item</th>
                                <th class="text-center">Detalhamento</th>
                                <th class="text-center">Qtd</th>
                                <th class="text-center">Valor</th>
                                <th class="text-center">Observações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($especs as $key => $a) { ?>
                                <tr>
                                    <td>
                                        <select name="origemreceita" class="form-control">
                                            <?php foreach ($origens as $k => $v) { ?>
                                                <option value="<?= $k ?>"><?= $v['nome'] ?></option>
                                            <?php } ?>
                                        </select> 
                                    </td>
                                    <td><?= $a['categoria']." . ".$a['natureza']." . ".$a['aplicacao']." . ".$a['objeto']." . ".$a['nome'] ?></td>
                                    <td><input type="text" name="detalhamento" class="form-control" /></td>
                                    <td><input type="text" name="qtd" class="form-control" size="3" /></td>
                                    <td><input type="text" name="valor" class="form-control money" size="3" /></td>
                                    <td><input type="text" name="obs" class="form-control" /></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>
                <pre>
                    <?= print_r($plano) ?>
                </pre>
            </div>
        </div>
    </div>


<?php } ?>
