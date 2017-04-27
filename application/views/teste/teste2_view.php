<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Titulo</div>
        </div>
        <div class="panel-body">
            <pre>
                <?php if($this->session->userdata('usuario')){
                    echo "Tem sessão";
                }else{
                    echo "Não tem sessão";
                } ?>
            </pre>
        </div>
    </div>
</div>
