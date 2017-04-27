<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Estrutura das OBMS</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Abreviação</th>
                        <th>Município</th>
                        <th>Status</th>
                        <th>Superiores</th>
                        <th>Subordinadas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($all_obms)){ ?>
                        <?php if(count($all_obms)>0){ ?>
                            <?php foreach($all_obms as $k=>$v){ ?>
                                <tr>
                                    <td class="text-center"><?=$v['id']?></td>
                                    <td><?=$v['nome']?></td>
                                    <td><?=$v['abrev']?></td>
                                    <td class="text-center"><?=$muns[$v['municipio']]['nome']?></td>
                                    <td class="text-center"><?php if($v['status']==0){echo "Desativado";}else{echo"Ativo";}?></td>
                                    <td>
                                        <?php if(isset($v['superiores'])){ ?>
                                        <?php if(count($v['superiores'])>0){ ?>
                                        <?php foreach($v['superiores'] as $kk=>$vv){ ?>
                                        <?=$obms[$vv]['nome']."<br>"?>
                                        <?php } ?>
                                        <?php } ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if(isset($v['subordinadas'])){ ?>
                                        <?php if(count($v['subordinadas'])>0){ ?>
                                        <?php foreach($v['subordinadas'] as $kk=>$vv){ ?>
                                        <?=$obms[$vv]['nome']."<br>"?>
                                        <?php } ?>
                                        <?php } ?>
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