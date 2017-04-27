<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Cadastro de Usuário</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('usuario/insert') ?>" method="post" class="row">
                <?php if (isset($user['id'])) { ?>
                    <input type="hidden" name="id" value="<?= $user['id'] ?>" />
                <?php } ?> 
                <div class="col-md-3">
                    <label class="control-label">Nome completo</label><a href="<?= site_url('usuario')?>" class="btn btn-link btn-sm"><?= gly("plus-sign", "Limpar/Novo usuário", "bottom")?></a>
                    <input type="text" name="nome" class="form-control" value="<?php
                    if (isset($user['nome'])) {
                        echo $user['nome'];
                    }
                    ?>"/>
                    <br>
                    <label class="control-label">Nome de guerra </label><span class="mandatory_field">*</span>
                    <input type="text" name="apelido" class="form-control" value="<?php if (isset($user['apelido'])) {
                        echo $user['apelido'];
                    } ?>"/>
                </div>
                <div class="col-md-3">
                    <label class="control-label">Posto/Graduação</label><span class="mandatory_field">*</span>
                    <select name="postograd" class="form-control selectpicker" data-live-search="true">
                        <?php foreach ($postograds as $key => $value) { ?>
                            <option value="<?= $key ?>" <?php
                            if (isset($user['postograd'])) {
                                if ($value['id'] == $user['postograd']) {
                                    echo "selected=''";
                                }
                            }
                            ?>><?= $value['nome'] ?> </option>
                    <?php } ?>
                    </select>
                    <br>
                    <br>
                    <label class="control-label">Matrícula</label>
                    <input type="text" name="matricula" class="form-control" value="<?php
                    if (isset($user['matricula'])) {
                        echo $user['matricula'];
                    }
                    ?>" maxlength="7"/>
                </div>
                <div class="col-md-3">
                    <label class="control-label">E-mail (Login)</label><span class="mandatory_field">*</span>
                    <input type="text" name="email" class="form-control" value="<?php
                    if (isset($user['email'])) {
                        echo $user['email'];
                    }
                    ?>"/>
                    <br>
                    <?php if(!isset($user)){ ?>
                    <label class="control-label">Senha</label><span class="mandatory_field">*</span>
                    <input type="password" name="senha" class="form-control" />
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <label class="control-label">Lotação</label><span class="mandatory_field">*</span>
                    <select name="obm" class="form-control selectpicker" data-live-search="true">
                        <?php if (isset($obms)) { ?>
                            <?php foreach ($obms as $key => $value) { ?>
                                <option value="<?= $key ?>" <?php
                            if(isset($user)){if ($key == $user['obm']) {echo "selected";}}?>><?= $value['nome'] ?> (<?= $municipios[$value['municipio']]['nome'] ?>)</option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                    <br>
                    <input type="hidden" name="id" value="<?php
                    if (isset($user['id'])) {
                        echo $user['id'];
                    }
                    ?>" />
                    <br>
                    <br>
                    <?php if(isset($user)) { ?>
                    <div class="text-center"><?= btn("Alterar", "warning", "lg", "Alterar cadastro", "bottom")?></div>
                    <?php } else { ?>
                    <div class="text-center"><?= btn("Cadastrar", "success", "lg", "Cadastrar usuário", "bottom")?></div>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Usuários Cadastrados</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>Posto/Graduação</th>
                        <th>Nome de Guerra</th>
                        <th>E-mail</th>
                        <th>Lotação</th>
                        <th>Alterar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
<?php if (isset($usuarios)) { ?>
                        <?php if (count($usuarios) > 0) { ?>
                            <?php foreach ($usuarios as $k => $v) { ?>
                                <tr>
                                    <td><?= $v['matricula'] ?></td>
                                    <td><?= $v['nome'] ?></td>
                                    <td class="text-center"><?= $postograds[$v['postograd']]['nome'] ?></td>
                                    <td><?= $v['apelido'] ?></td>
                                    <td><?= $v['email'] ?></td>
                                    <td><?= $obms[$v['obm']]['nome'] ?></td>
                                    <td class="text-center">
                                        <form action="<?= site_url('usuario')?>" method="post">
                                            <input type="hidden" name="id" value="<?= $v['id'] ?>" />
                                            <?=btn(gly("edit"), "info", null, "Editar", "bottom")?>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <?php if($v['status']==2){ ?>
                                        <form action="<?= site_url('usuario/desativar')?>" method="post" onsubmit="return confirm('Deseja realmente desativar o usuario?');">
                                            <input type="hidden" name="id" value="<?= $v['id'] ?>" />
                                            <?=btn(gly("remove"), "danger", null, "Desativar", "bottom")?>
                                        </form>
                                        <?php } else { ?>
                                        <form action="<?= site_url('usuario/ativar')?>" method="post">
                                            <input type="hidden" name="id" value="<?= $v['id'] ?>" />
                                            <?=btn(gly("ok"), "success", null, "Ativar", "bottom")?>
                                        </form>
                                        <?php } ?>
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


