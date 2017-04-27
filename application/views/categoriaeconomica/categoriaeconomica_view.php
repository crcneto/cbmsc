<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Categoria Econômica</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('categoriaeconomica/insert') ?>" method="post">
                <div class="col-md-4">
                    <label class="control-label">Número</label> <a href="<?= site_url('categoriaeconomica')?>" title="Criar novo" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="bottom"><i class="glyphicon glyphicon-plus-sign"></i></a>
                    <input class="form-control" name="id" type="text" value="<?php
                    if (isset($ce['id'])) {
                        echo $ce['id'];
                    }
                    ?>"/>
                    <br>
                    <label class="control-label">Categoria</label>
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
                    <label class="control-label">Status</label>&nbsp;<span title="Quando ativo, o tipo se torna selecionável ao planejamento e registro de fatos contábeis. Quando desativado, se torna inacessível" data-toggle="tooltip" data-placement="top" ><i class="glyphicon glyphicon-question-sign"></i></span>
                    <select class="form-control" name="status">
                        <option value="2">Ativo</option>
                        <option value="0" <?php if(isset($ce)){if($ce['status']==0){echo "selected";}} ?>>Desativado</option>
                    </select>
                    <br>
                    <?php //if (isset($ce['id'])) {   ?>
                    <!--input type="hidden" name="id" value="<?php //if (isset($ce['id'])) {echo $ce['id'];}     ?>"/-->
                    <?php //}   ?>
                    <button type="submit" class="btn btn-<?php if(isset($ce)){echo "warning";}else{echo "success";}?> col-md-12 btn-lg"><?php if(isset($ce)){echo "Alterar";}else{echo "Cadastrar";}?></button>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Categorias Econômicas Cadastradas</div>
        </div>
        <div class="panel-body">
            <?php //echo $tabela; ?>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Incluida em</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categorias as $k => $v) { ?>
                    <tr <?php if($v['status']==0){echo "class='text-warning'";}?>>
                        <td class="text-center"><?=$v['id']?></td>
                        <td><?=$v['nome']?></td>
                        <td class="text-center"><i class="glyphicon glyphicon-info-sign" title="<?=$v['descricao']?>" data-toggle="tooltip" data-placement="top"></i></td>
                        <td class="text-center"><i class="glyphicon glyphicon-hourglass" title="<?= $v['ts']?>" data-toggle="tooltip" data-placement="top"></i></td>
                        <td class="text-center">
                            <form action="<?= site_url('categoriaeconomica')?>" method="post">
                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                            <button type="submit" class="btn btn-info" title="Editar" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-edit"></i></button>
                            </form>
                        </td>
                        <td class="text-center">
                            <form action="<?= site_url('categoriaeconomica/delete')?>" method="post" onsubmit="return confirm('Deseja realmente excluir esta categoria? \n Esta operação não poderá ser desfeita!');">
                            <input type="hidden" name="id" value="<?=$v['id']?>" />
                            <button type="submit" class="btn btn-danger" title="Excluir" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-remove"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>