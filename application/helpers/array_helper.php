<?php


function chk_campos_nulos($ar){
    foreach ($ar as $key => $value) {
        if($value==null || $value==''){
            throw new Exception("Campo '".$key."' inválido");
        }
    }
}

function zera_array($ar){
    foreach ($ar as $key => $value) {
        $ar[$key] = null;
    }
    return $ar;
}

function limpaArray(Array $array){
    if(!is_array($array)){
        return null;
    }
    foreach ($array as $key => $value) {
        if($value==NULL || $value==''){
            unset($array[$key]);
        }
    }
    return $array;
}




?>

