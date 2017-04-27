<?php
//$success = $this->session->flashdata('success');
?>
<div class="container">
    <?php if($this->session->flashdata('erro_mensagem')!=null) { ?>
    <div class="panel panel-danger">
        <div class="panel-heading alert-danger">
            <div class="panel-title alert-danger text-center"><?php echo $this->session->flashdata('erro_mensagem'); ?></div>
        </div>
    </div>
    <?php } ?>
    <?php if($this->session->flashdata('sucesso_mensagem')!=null) { ?>
    <div class="panel panel-danger">
        <div class="panel-heading alert-success">
            <div class="panel-title alert-success text-center"><?php echo $this->session->flashdata('sucesso_mensagem'); ?></div>
        </div>
    </div>
    <?php } ?>
    <br><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel panel">
                <div class="panel-heading">
                    <div class="panel-title">Últimas noticias de SC</div>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                    <?php                    foreach ($noticias as $i) { ?>
                        <li class="list-group-item-text">
                            <a href="#" class="list-group-item-text"><?php $r = explode(' ', $i['time']); echo $r[4];?> - </a>
                            <a href="<?=$i['link']?>" title="<?=$i['descricao']?>" data-toggle="tooltip" data-placement="top" target="_blank"><?=$i['titulo']?></a>
                        </li>
                        <li class="list-group-item-text">&nbsp;</li>
                    <?php } ?>
                    </ul>
                </div>
                <div class="panel-footer">
                    <span style="font-size: 0.8em;">Fonte: <a href="http://anoticia.clicrbs.com.br/sc/" target="_blank">Jornal A Notícia</a></span>
                </div>
            </div>
        </div>
        <div class="col-md-1"><iframe scrolling="no" marginwidth="0" marginheight="0" src="https://selos.climatempo.com.br/selos/MostraSelo120.php?CODCIDADE=377,372,374,1438,1447&SKIN=padrao" width="120" height="170" frameborder="0"></iframe></div>
    </div>
</div>

<iframe scrolling="no" marginwidth="0" marginheight="0" src="https://selos.climatempo.com.br/selos/MostraSelo120.php?CODCIDADE=377,372,374,1438,1447&SKIN=padrao" width="120" height="170" frameborder="0"></iframe>