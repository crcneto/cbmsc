<!DOCTYPE html>
<html lang="br">
    <head>
        <title>.: CBMSC :.</title>
        <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css" />
        <link rel="shortcut icon" href="<?= base_url() ?>public/img/firefighter.ico" />
        <!--Bootstrap Select-->
        <link rel="stylesheet" href="<?= site_url('public/css/bootstrap-select.min.css')?>">
        <meta charset="utf-8">
        <script src="<?= base_url() ?>public/js/jquery-3.1.1.min.js"></script>
        <script src="<?= base_url() ?>public/js/bootstrap.js"></script>
        <script src="<?= base_url() ?>public/js/bootstrap-datepicker.js"></script>
        <script src="<?= base_url() ?>public/js/jquery.maskMoney.min"></script>
        <!--Bootstrap Select-->
        <script src="<?= site_url('public/js/bootstrap-select.min.js')?>"></script>
        <script>
            $(document).ready(function () {
                $(".datepicker").datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true
                }).on(
                        'changeDate', function (e) {
                            $(this).blur();
                            $(this).datepicker('hide');
                        }
                );

                $(".money").maskMoney({'thousands': ''});
                $('.selectpicker').selectpicker();
            });
        </script>
    </head>
    <body role="document">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url() ?>"><span style=""><img src="<?= site_url() ?>public/img/logo_cbmsc.ico" height="20" width="20" style="margin-bottom: 6px;"/></span>&nbsp;CBMSC</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= site_url() ?>"><i class="glyphicon glyphicon-home"></i>&nbsp;Inicial <span class="sr-only"></span></a></li>
                        <!--li><a href="#">Link</a></li-->
                        <?php if ($this->session->userdata('autenticado')!=NULL) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-menu-hamburger"></i>&nbsp;Admin <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header text-center">Cadastros</li>
                                    <li role="separator" class="divider"></li>
                                    <?php if($this->access->autorizado('municipio')){ ?>
                                    <li><a href="<?= base_url() ?>municipio"><i class="glyphicon glyphicon-map-marker"></i> &nbsp;Município</a></li>
                                    <?php } ?>
                                    <?php if($this->access->autorizado('obm')){ ?>
                                    <li><a href="<?= base_url() ?>obm"><i class="glyphicon glyphicon-home"></i>&nbsp;OBM</a></li>
                                    <?php } ?>
                                    <?php if($this->access->autorizado('usuario')){ ?>
                                    <li><a href="<?= base_url() ?>usuario"><i class="glyphicon glyphicon-user"></i>&nbsp;Usuário</a></li>
                                    <?php } ?>
                                    <?php if($this->access->autorizado('controledeacesso')){ ?>
                                    <li><a href="<?= base_url() ?>acesso"><i class="glyphicon glyphicon-certificate"></i>&nbsp;Controle de Acesso</a></li>
                                    <?php } ?>
                                    <?php if($this->access->autorizado('setor')){ ?>
                                    <li><a href="<?= base_url() ?>setor"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;Setor</a></li>
                                    <?php } ?>
                                    <?php if($this->access->autorizado('subsetor')){ ?>
                                    <li><a href="<?= base_url() ?>subsetor"><i class="glyphicon glyphicon-folder-close"></i>&nbsp;Subsetor</a></li>
                                    <?php } ?>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header text-center">Configurações</li>
                                    <li role="separator" class="divider"></li>
                                    <?php if($this->access->autorizado('postograd')){ ?>
                                    <li><a href="<?= site_url('postograd') ?>"><i class="glyphicon glyphicon-pawn"></i>&nbsp;Posto/Graduação</a></li>
                                    <?php } ?>
                                    <?php if($this->access->autorizado('modulo')){ ?>
                                    <li><a href="<?= site_url('modulo') ?>"><i class="glyphicon glyphicon-th-large"></i>&nbsp;Módulo</a></li>
                                    <?php } ?>

                                </ul>
                            </li>
                            <?php if($this->access->autorizado('plano')||$this->access->autorizado('planejamento')){ ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-usd"></i>&nbsp;Contábil <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Planejamento</li>
                                    <li role="separator" class="divider"></li>
                                    <?php if($this->access->autorizado('planejamento')){ ?>
                                    <li><a href="<?= site_url('plano') ?>"><i class="glyphicon glyphicon-calendar"></i>&nbsp;Planejamentos</a></li>
                                    <?php } ?>
                                    <?php if($this->access->autorizado('planejamento')){ ?>
                                    <li><a href="<?= site_url('planejamento/regiao') ?>"><i class="glyphicon glyphicon-screenshot"></i>&nbsp;Planejamentos por região</a></li>
                                    <?php } ?>
                                    <?php if($this->access->autorizado('planejamento')){ ?>
                                    <li><a href="<?= site_url('plano/aprovados') ?>"><i class="glyphicon glyphicon-ok"></i>&nbsp;Planejamentos Aprovados</a></li>
                                    <li><a href="<?= site_url('origemreceita/receitarestrita') ?>"><i class="glyphicon glyphicon-ban-circle"></i>&nbsp;Gerenciar Receitas Restritas</a></li>
                                    <li><a href="<?= site_url('receitarestrita') ?>"><i class="glyphicon glyphicon-transfer"></i>&nbsp;Distribuição de receitas restritas</a></li>
                                    <?php } ?>
                                    <!--li><a href="#">Relatório por OBM</a></li-->
                                    <li role="separator" class="divider"></li>

                                    <!--li class="dropdown-header">Movimentação</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Fatos Contábeis</a></li>
                                    <li><a href="#">Relatório por OBM</a></li>
                                    <li role="separator" class="divider"></li-->

                                    <li class="dropdown-header">Cadastros</li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url('origemreceita') ?>">Fonte Pagadora</a></li>
                                    <li><a href="<?= base_url('categoriaeconomica') ?>">Categoria Econômica</a></li>
                                    <li><a href="<?= base_url('naturezadespesa') ?>" title="">Natureza da Despesa&nbsp;<span title="É um agregador de elementos de despesa com as mesmas características quanto ao objeto de gasto" data-toggle="tooltip" data-placement="right" ><i class="glyphicon glyphicon-question-sign"></i></span></a></li>
                                    <li><a href="<?= base_url('aplicacao') ?>">Modalidade de Aplicação</a></li>
                                    <li><a href="<?= base_url('objeto') ?>">Objeto de Gasto&nbsp;<span title="Elemento de despesa" data-toggle="tooltip" data-placement="right" ><i class="glyphicon glyphicon-question-sign"></i></span></a></li>
                                    <li><a href="<?= base_url('especificacao') ?>">Especificação de Objeto&nbsp;<span title="Subitem da natureza da despesa" data-toggle="tooltip" data-placement="right" ><i class="glyphicon glyphicon-question-sign"></i></span></a></li>

                                </ul>
                            </li>
                            <?php } ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Testes <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('home/teste1') ?>">Teste 1(Listagem Objetos)</a></li>
                                    <li><a href="<?= base_url('home/teste2') ?>">Teste 2 (Sessão)</a></li>
                                    <li><a href="<?= base_url('home/teste3') ?>">Teste 3 (E-mail)</a></li>
                                    <li><a href="<?= base_url('home/teste4') ?>">Teste 4 (Setores)</a></li>
                                    <li><a href="<?= base_url('home/teste5') ?>">Teste 5 ()</a></li>
                                    <li><a href="<?= base_url('home/teste6') ?>">Teste 6 (LDAP)</a></li>
                                    <li><a href="<?= base_url('obm/estrutura') ?>">Teste OBM (Estrutura OBM)</a></li>
                                    <li><a href="<?= base_url('home/teste7') ?>">Teste 7 (Compara datas)</a></li>
                                    <li><a href="<?= base_url('obm/estrutura') ?>">Teste 8 (Estrutura)</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>

                    <!--Se usuário não estiver autenticado, exibe formulário de login-->
                    <?php if ($this->session->userdata('autenticado')==null || $this->session->userdata('autenticado')=='') { ?>

                        <div class="navbar-form navbar-right">
                            <!--div class="form-group">
                                <input type="text" name="login" class="form-control" size="8" placeholder="Usuário">
                            </div>
                            <div class="form-group">
                                <input type="password" name="senha" class="form-control" size="8" placeholder="Senha">
                            </div>
                            <button type="submit" class="btn btn-success">Entrar</button-->
                            <a href="<?= site_url('autenticacao')?>" class="btn btn-success">Entrar</a>
                        </div>

                    <?php } ?>

                    <!-- Se usuário autenticado, exibe opções de usuário -->
                    <?php if ($this->session->userdata('usuario')!=null) { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>&nbsp;<?php $usuario = $this->session->userdata('usuario'); echo $usuario['nome']; ?>&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="glyphicon glyphicon-user" style="color: blue;"></i>&nbsp; Perfil</a></li>
                                    <li><a href="<?= site_url('tarefa')?>"><i class="glyphicon glyphicon-tasks" style="color: blue;"></i>&nbsp; Tarefas</a></li>
                                    <li><a href="<?= site_url('usuario/changepass')?>"><i class="glyphicon glyphicon-edit text-warning"></i>&nbsp;Alterar senha</a></li>
                                    <li class="disabled"><a href="#"><i class="glyphicon glyphicon-envelope text-info"></i>&nbsp;Mensageiro</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= site_url('autenticacao/logout')?>" style="color:red;"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Sair</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= site_url('sobre') ?>"><i class="glyphicon glyphicon-info-sign text-primary"></i>&nbsp;Sobre</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php } ?>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row">
            <br>
            <br>
            <br>
        </div>
        <div class="container">
            <?php /*if (isset($_SESSION['erro_mensagem'])) { ?>

                <div class="panel panel-danger" style="font-weight: bolder; font-size: 1.5em;">
                    <div class="panel-heading alert-danger">
                        <div class="panel-title alert-danger text-center"><?php echo $_SESSION['erro_mensagem']; ?></div>
                    </div>
                </div>

            <?php } */?>
            <?php /*if (isset($_SESSION['sucesso_mensagem'])) { ?>

                <div class="panel panel-success">
                    <div class="panel-heading alert-success">
                        <div class="panel-title alert-success text-center"><?php echo $_SESSION['sucesso_mensagem']; ?></div>
                    </div>
                </div>

            <?php } */?>
            
            <!--Substituir-->
            <?php if ($this->session->userdata('erro_mensagem')!=null && $this->session->userdata('erro_mensagem')!='') { ?>

                <div class="panel panel-danger" style="font-weight: bolder; font-size: 1.5em;">
                    <div class="panel-heading alert-danger">
                        <div class="panel-title alert-danger text-center"><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;<?php echo $this->session->userdata('erro_mensagem'); ?></div>
                    </div>
                </div>

            <?php } ?>
            <?php if ($this->session->userdata('sucesso_mensagem')!=null && $this->session->userdata('sucesso_mensagem')!='') { ?>

                <div class="panel panel-success"  style="/*font-weight: bolder; font-size: 1.5em;*/">
                    <div class="panel-heading alert-success">
                        <div class="panel-title alert-success text-center"><?php echo $this->session->userdata('sucesso_mensagem'); ?></div>
                    </div>
                </div>

            <?php } ?>
        </div>