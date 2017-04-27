<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Compare as datas</div>
        </div>
        <div class="panel-body">
            <form action="<?= site_url('home/teste7')?>" method="post">
                <label>Data 1</label>
                <input type="text" class="form-control datepicker" name="data1" />
                <label>Data 2</label>
                <input type="text" class="form-control datepicker" name="data2" />
                <button type="submit">Comparar</button>
            </form>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title text-center">Resultado</div>
        </div>
        <div class="panel-body">
            <?=$resultado?>
        </div>
    </div>
</div>