<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Especificação de Objeto <a href="<?= site_url('especificacao')?>" title="Limpar/Cadastrar novo" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="bottom"><i class="glyphicon glyphicon-plus-sign"></i></a></div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('especificacao/insert') ?>" method="post" class="form-group">
                <?php if (isset($es['id'])) { ?>
                    <input type="hidden" name="id" value="<?= $es['id'] ?>">
                <?php } ?>
                <div class="col-md-2">
                    <label class="control-label">Categoria econômica</label>
                    <br>
                    <select name="categoria" class="form-control selectpicker" id="cat" data-live-search="true">
                        <?php foreach ($cats as $key => $value) { ?>
                            <option value="<?= $key ?>" <?php
                            if (isset($es['categoria'])) {
                                if ($es['categoria'] == $value['id']) {
                                    echo "selected";
                                }
                            }
                            ?>><?= $value['id'] ?>-<?= $value['nome'] ?></option>
                                <?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="control-label">Natureza da Despesa</label>
                    <br>
                    <select name="natureza" class="form-control selectpicker" data-live-search="true">
                        <?php foreach ($nats as $key => $value) { ?>
                            <option value="<?= $key ?>" <?php
                            if (isset($es['natureza'])) {
                                if ($es['natureza'] == $key) {
                                    echo "selected";
                                }
                            }
                            ?>><?= $value['id'] ?>-<?= $value['nome'] ?></option>
                                <?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="control-label">Modalidade Aplicação</label>
                    <br>
                    <select name="aplicacao" class="form-control selectpicker" data-live-search="true">
                        <?php foreach ($apls as $key => $value) { ?>
                            <option value="<?= $key ?>" <?php
                            if (isset($es['aplicacao'])) {
                                if ($es['aplicacao'] == $key) {
                                    echo "selected";
                                }
                            }
                            ?>><?= $value['id'] ?>-<?= $value['nome'] ?></option>
                                <?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="control-label">Objeto de Gasto</label>
                    <br>
                    <select name="objeto" class="form-control selectpicker" data-live-search="true">
                        <?php foreach ($objs as $key => $value) { ?>
                            <option value="<?= $key ?>" <?php
                            if (isset($es['objeto'])) {
                                if ($es['objeto'] == $key) {
                                    echo "selected";
                                }
                            }
                            ?>><?= $value['id'] ?>-<?= $value['nome'] ?></option>
                                <?php } ?>
                    </select>
                </div>
                <div class="col-xs-1">
                    <label>Nº</label>
                    <br>
                    <input type="text" name="nro" value="<?php if (isset($es['nro'])) {
                                    echo $es['nro'];
                                } ?>" class="form-control" />
                </div>
                <div class="col-md-2">
                    <label class="control-label">Especificação</label>
                    <br>
                    <input type="text" name="nome" class="form-control" value="<?php if (isset($es['nome'])) {
                                    echo $es['nome'];
                                } ?>" />
                </div>

                <div class="col-md-1">
                    <select name="status" class="form-control col-md-12 selectpicker" data-live-search="true">
                        <option value="2">Ativo</option>
                        <option value="0" <?php if(isset($es['status'])){if($es['status']==0){echo "selected";}}?>>Desativado</option>
                    </select>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Especificações de Objeto Cadastrados</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th title="Categoria" data-toggle="">Cat...</th>
                        <th title="Natureza da despesa" data-toggle="">Nat...</th>
                        <th title="Modalidade de aplicação" data-toggle="">Mod...</th>
                        <th title="Objeto de despesa" data-toggle="">Obj...</th>
                        <th title="Número de identificação" data-toggle="">Nº</th>
                        <th title="Especificação" data-toggle="">Especificação</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($especificacoes)) { ?>
                        <?php if (count($especificacoes) > 0) { ?>
                            <?php foreach ($especificacoes as $k => $v) { ?>
                                <tr <?php if($v['status']==0){echo "class='text-warning' title='Desativado' data-toggle='tooltip'";}?>>
                                    <td class="text-center"><?= $v['categoria'] ?></td>
                                    <td class="text-center"><?= $v['natureza'] ?></td>
                                    <td class="text-center"><?= $v['aplicacao'] ?></td>
                                    <td class="text-center"><?= $v['objeto'] ?></td>
                                    <td class="text-center"><?php if(strlen($v['nro'])<2){echo "0";}?><?= $v['nro'] ?></td>
                                    <td class=""><?= $v['nome'] ?></td>
                                    <td class="text-center">
                                        <form action="<?= site_url('especificacao')?>" method="post">
                                        <input type="hidden" name="id" value="<?= $v['id'] ?>" />
                                        <button type="submit" class="btn btn-info btn-sm" title="Editar" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= site_url('especificacao/delete')?>" method="post" onsubmit="return confirm('Deseja realmente excluir esta especificação? \nA operação não poderá ser desfeita!');">
                                        <input type="hidden" name="id" value="<?= $v['id'] ?>" />
                                        <button type="submit" class="btn btn-danger btn-sm" title="Excluir" data-toggle="tooltip"><i class="glyphicon glyphicon-remove"></i></button>
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
