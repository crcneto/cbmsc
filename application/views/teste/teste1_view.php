
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <select name="">
        <?php foreach ($especs as $key => $v) {?>
            <option value=""><?=$v['categoria']?>.<?=$v['natureza']?>.<?=$v['aplicacao']?>.<?=$v['objeto']?> - <?=$v['nome']?></option>
        <?php } ?>
        </select>
        <br>
        <pre>
        <?php if(isset($param2)){print_r($param2);} ?>
        <br>
        <?php if(isset($param3)){print_r($param3);} ?>
        <br>
        <?php if(isset($param4)){print_r($param4);} ?>
        <br>
        <?php if(isset($param5)){print_r($param5);} ?>
        <br>
        <?php if(isset($param6)){print_r($param6);} ?>
        <br>
        </pre>
    </div>
    <div class="col-md-3"></div>
</div>
