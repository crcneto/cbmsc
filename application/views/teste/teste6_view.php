<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Teste de Login com LDAP servidor CBMSC</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('home/teste6') ?>" method="post">
                <label>Login</label>
                <input type="text" name="login" class="form-control" />
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" />
                <br>
                <button id="btn" class="btn btn-success" type="submit">Testar</button>
            </form>
        </div>
    </div>
    <?php if (isset($res)) { ?>
        <?php if ($res) { ?>
            <div class="btn btn-success" >Login realizado com sucesso</div>
        <?php } else { ?>
            <div class="btn btn-danger" >Erro na autenticação com LDAP</div>
        <?php } ?>
    <?php } else { ?>
            <div class="btn btn-info">Não verificado</div>
    <?php } ?>
</div>
<script>
    $('#btn').click(function () {

    });
</script>