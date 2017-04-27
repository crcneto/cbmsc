<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Modalidade de Aplicação</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('aplicacao/insert') ?>" method="post">
                <div class="col-md-4">
                    <label class="control-label">Número</label><a href="<?= site_url('aplicacao')?>" class="btn btn-link btn-sm" title="Limpar/Cadastrar novo" data-toggle="tooltip"><i class="glyphicon glyphicon-plus-sign"></i></a>
                    <br>
                    <input class="form-control" name="id" type="text" value="<?php
                    if (isset($ap['id'])) {
                        echo $ap['id'];
                    }
                    ?>"/>

                    <label class="control-label">Aplicação</label>&nbsp;<span title="A modalidade de aplicação tem por finalidade indicar se os recursos são aplicados diretamente por órgãos ou entidades no âmbito da mesma esfera de Governo ou por outro ente da Federação e suas respectivas entidades, e objetiva, precipuamente, possibilitar a eliminação da dupla contagem dos recursos transferidos ou descentralizados. Também indica se tais recursos são aplicados mediante transferência para entidades privadas sem fins lucrativos, outras instituições ou ao exterior." data-toggle="tooltip" data-placement="bottom" ><i class="glyphicon glyphicon-question-sign"></i></span>
                    <br>
                    <input class="form-control" name="nome" type="text" value="<?php
                    if (isset($ap['nome'])) {
                        echo $ap['nome'];
                    }
                    ?>"/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Descrição</label>&nbsp;<span title="Breve descrição a ser exibida ao usuário durante a seleção" data-toggle="tooltip" data-placement="bottom" ><i class="glyphicon glyphicon-question-sign"></i></span>
                    <textarea class="form-control" name="descricao" rows="4" style="resize: none;"><?php if (isset($ap['descricao'])) {
                        echo $ap['descricao'];
                    } ?></textarea>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Status</label>&nbsp;<span title="Quando ativo, a modalidade se torna selecionável ao planejamento e registro de fatos contábeis. Quando desativado, se torna inacessível" data-toggle="tooltip" data-placement="top" ><i class="glyphicon glyphicon-question-sign"></i></span>

                    <select class="form-control" name="status">
                        <option value="2">Ativo</option>
                        <option value="0" <?php if(isset($ap)){if($ap['status']==0){echo "selected";}}?>>Desativado</option>
                    </select>

                    <br>

                    <button type="submit" class="btn btn-<?php if(isset($ap)){echo 'warning';}else{echo 'success';}?> col-md-12"><?php if(isset($ap)){echo "Alterar";}else{echo "Cadastrar";}?></button>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Modalidades de Aplicação Cadastradas</div>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Tipo de Aplicação</th>
                        <th>Descrição</th>
                        <th>Criada em</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (isset($aplicacoes)) { ?>
                    <?php if (count($aplicacoes) > 0) { ?>
                        <?php foreach ($aplicacoes as $k => $v) { ?>
                                                <tr <?php if ($v['status'] == 0) {
                                echo "class='text-warning'";
                            } ?>>
                                                    <td class="text-center" style="font-weight: bold;"><?= $v['id'] ?></td>
                                                    <td><?= $v['nome'] ?></td>
                                                    <td class="text-center"><i class="glyphicon glyphicon-info-sign" title="<?= $v['descricao'] ?>" data-toggle="tooltip"></i></td>
                                                    <td class="text-center"><i class="glyphicon glyphicon-hourglass" title="<?= $v['ts'] ?>" data-toggle="tooltip"></i></td>
                                                    <td class="text-center">
                                                        <form action="<?= site_url('aplicacao') ?>" method="post">
                                                            <input type="hidden" value="<?= $v['id'] ?>" name="id" />
                                                            <button type="submit" class="btn btn-info btn-sm" title="Editar" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></button>
                                                        </form>
                                                    </td>
                                                    <td class="text-center">
                                                        <form action="<?= site_url('aplicacao/delete') ?>" method="post" onsubmit="return confirm('Deseja realmente excluir esta modalidade de aplicação? \n Esta operação não poderá ser desfeita!');">
                                                            <input type="hidden" value="<?= $v['id'] ?>" name="id" />
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