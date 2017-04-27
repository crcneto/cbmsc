<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Elemento de Despesa (Objeto de Gasto)</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('objeto/insert') ?>" method="post">
                <div class="col-md-4">
                    <label class="control-label">Número</label> <a href="<?= site_url('objeto')?>" class="btn btn-link btn-sm" title="Limpar/Inserir novo" data-toggle="tooltip"><i class="glyphicon glyphicon-plus-sign"></i></a>
                    <br>
                    <input class="form-control" name="id" type="text" <?php if(isset($objeto)){echo "value='".$objeto['id']."'";}?>/>
                    <label class="control-label">Objeto de Gasto</label>&nbsp;<span title="." data-toggle="tooltip" data-placement="bottom" ><i class="glyphicon glyphicon-question-sign"></i></span>
                    <br>
                    <input class="form-control" name="nome" type="text" value="<?php if (isset($objeto['nome'])) { echo $objeto['nome'];}?>"/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Descrição</label>&nbsp;<span title="Breve descrição a ser exibida ao usuário durante a seleção" data-toggle="tooltip" data-placement="bottom" ><i class="glyphicon glyphicon-question-sign"></i></span>

                    <textarea class="form-control" name="descricao" rows="4" style="resize: none;"><?php if (isset($objeto['descricao'])) { echo $objeto['descricao']; }?></textarea>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Status</label>&nbsp;<span title="Quando ativo, a modalidade se torna selecionável ao planejamento e registro de fatos contábeis. Quando desativado, se torna inacessível" data-toggle="tooltip" data-placement="top" ><i class="glyphicon glyphicon-question-sign"></i></span>

                    <select class="form-control" name="status">
                        <option value="2">Ativo</option>
                        <option value="0" <?php if(isset($objeto)) {if($objeto['status']==0){echo "selected";} }?>>Desativado</option>
                    </select>
                    <br>
                    <?php if(isset($objeto)) { ?>
                    <button type="submit" class="btn btn-warning col-md-12">Alterar</button>
                    <?php } else { ?>
                    <button type="submit" class="btn btn-success col-md-12">Cadastrar</button>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Elementos de Despesa Cadastrados</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Data Criação</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($objetos)) { ?>
                        <?php if (count($objetos) > 0) { ?>
                            <?php foreach ($objetos as $ko => $vo) { ?>
                                <tr <?php if($vo['status']==0){echo "class='text-warning' title='Desativado' data-toggle='tooltip'";}?>>
                                    <td class="text-center"><?= $vo['id'] ?></td>
                                    <td><?= $vo['nome'] ?></td>
                                    <td class="text-center"><span title="<?= $vo['descricao'] ?>" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-question-sign"></i></span></td>
                                    <td class="text-center"><i class="glyphicon glyphicon-hourglass" title="<?= $vo['ts'] ?>" data-toggle="tooltip"></i></td>
                                    <td class="text-center">
                                        <form action="<?= site_url('objeto') ?>" method="post">
                                            <input type="hidden" value="<?= $vo['id'] ?>" name="id" />
                                            <button type="submit" class="btn btn-info btn-sm" title="Editar" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= site_url('objeto/delete') ?>" method="post" onsubmit="return confirm('Deseja realmente excluir este objeto? \n Esta operação não poderá ser desfeita!');">
                                            <input type="hidden" value="<?= $vo['id'] ?>" name="id" />
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
