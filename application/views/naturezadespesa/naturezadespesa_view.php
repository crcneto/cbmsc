<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Natureza da Despesa</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('naturezadespesa/insert') ?>" method="post">
                <div class="col-md-4">
                    <label class="control-label">Número</label><span class="mandatory_field">*</span>
                    <input class="form-control" name="id" type="text" value="<?php
                    if (isset($ce['id'])) {
                        echo $ce['id'];
                    }
                    ?>"/>
                    <br>
                    <label class="control-label">Natureza</label>
                    <input class="form-control" name="nome" type="text" value="<?php
                    if (isset($ce['nome'])) {
                        echo $ce['nome'];
                    }
                    ?>"/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Descrição</label>&nbsp;<span title="Breve descrição a ser exibida ao usuário durante a seleção" data-toggle="tooltip" data-placement="bottom" ><i class="glyphicon glyphicon-question-sign"></i></span>
                    <textarea class="form-control" name="descricao" rows="5" style="resize: none;"><?php
                        if (isset($ce['descricao'])) {
                            echo $ce['descricao'];
                        }
                        ?></textarea>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Status</label>&nbsp;<span title="Quando ativo, a natureza da despesa se torna selecionável ao planejamento e registro de fatos contábeis. Quando desativado, se torna inacessível" data-toggle="tooltip" data-placement="top" ><i class="glyphicon glyphicon-question-sign"></i></span>

                    <select class="form-control" name="status">
                        <option value="2">Ativo</option>
                        <option value="0" <?php if(isset($ce)){if($ce['status']==0){echo "selected";}} ?>>Desativado</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-success col-md-12 btn-lg">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Natureza das Despezas Cadastradas</div>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Criada em</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($naturezadespesas)) { ?>
                        <?php if (count($naturezadespesas) > 0) { ?>
                            <?php foreach ($naturezadespesas as $k => $v) { ?>
                                <tr <?php if($v['status']==0){echo "class='text-warning'";}?>>
                                    <td class="text-center"><?= $v['id'] ?></td>
                                    <td><?= $v['nome'] ?></td>
                                    <td class="text-center"><i class="glyphicon glyphicon-info-sign" title="<?= $v['descricao'] ?>" data-toggle='tooltip'></i></td>
                                    <td class="text-center"><i class="glyphicon glyphicon-hourglass" title="<?= $v['ts'] ?>" data-toggle='tooltip'></i></td>
                                    <td class="text-center">
                                        <form action="<?= site_url('naturezadespesa')?>" method="post" >
                                        <input type="hidden" value="<?= $v['id']?>" name="id" />
                                        <button type="submit" class="btn btn-info btn-sm" title="Alterar" data-toggle='tooltip'><i class="glyphicon glyphicon-edit"></i></button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= site_url('naturezadespesa/delete')?>" method="post" onsubmit="return confirm('Deseja realmente excluir este item? \n Esta operação não poderá ser desfeita!');">
                                        <input type="hidden" value="<?= $v['id']?>" name="id" />
                                        <button type="submit" class="btn btn-danger btn-sm" title="Excluir" data-toggle='tooltip'><i class="glyphicon glyphicon-remove"></i></button>
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

