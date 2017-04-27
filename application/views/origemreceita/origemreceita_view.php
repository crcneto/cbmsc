<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Fonte Pagadora</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('origemreceita/insert') ?>" method="post">
                <div class="col-md-4">
                    <label class="control-label">Fonte Pagadora</label>&nbsp;<span><i class="glyphicon glyphicon-question-sign" title="Cadastro de possíveis origens de recursos autorizadas pelo comando do CBMSC como fonte pagadora" data-toggle="tooltip" data-placement="top"></i>&nbsp;<a href="<?= site_url('origemreceita')?>" class="btn btn-link btn-sm">Novo</a></span>
                    <input class="form-control" name="nome" type="text" value="<?php if (isset($ori['nome'])) { echo $ori['nome'];} ?>"/>
                        <?php if (isset($ori['id'])) { ?>
                            <input type="hidden" name="id" value="<?php if (isset($ori['id'])) { echo $ori['id'];}?>"/>
                        <?php } ?>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Status</label>&nbsp;<span title="Quando ativo, a origem se torna selecionável ao planejamento e registro de fatos contábeis. Quando desativado, se torna inacessível" data-toggle="tooltip" data-placement="top" ><i class="glyphicon glyphicon-question-sign"></i></span>
                    <br>
                    <select class="form-control" name="status">
                        <option value="2">Ativo</option>
                        <option value="3">Restrito</option>
                        <option value="0">Desativado</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <br>
                    <button type="submit" class="btn btn-success col-md-12">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Fontes Pagadoras Cadastradas</div>
        </div>
        <div class="panel-body">
            <?php //echo $tabela; ?>
            <table class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th class="text-center">Origem</th>
                        <th class="text-center">Data criação</th>
                        <th class="text-center">Alterar</th>
                        <th class="text-center">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($fontes)) { ?>
                        <?php if (count($fontes) > 0) { ?>
                            <?php foreach ($fontes as $k => $v) { ?>
                                <tr <?php if($v['status']==0){echo "class='text-warning' title='Desativado' data-toggle='tooltip'";}?>>
                                    <td><?=$v['nome']?></td>
                                    <td class="text-center"><i class="glyphicon glyphicon-hourglass" title="<?=$v['ts']?>" data-toggle="tooltip"></i></td>
                                    <td class="text-center">
                                        <form action="<?= site_url('origemreceita')?>" method="post">
                                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                                            <button type="submit" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= site_url('origemreceita/delete')?>" method="post" onsubmit="return confirm('Deseja realmente apagar a fonte pagadora? \n (Essa operação não poderá ser desfeita)');">
                                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
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