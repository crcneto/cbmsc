<?php

/**
 * Retorna uma string com a data invertida (troca '/' por '-'). Ex: inverte_data('2016/10/01') -> 01-10-2016
 * @param string $date
 * @return string
 */
function inverte_data($date) {
    $date2 = str_replace('/', '-', $date);
    $d = explode('-', $date2);
    if (checkdate($d[1], $d[2], $d[0]) || checkdate($d[1], $d[0], $d[2])) {
        return $d[2] . '-' . $d[1] . '-' . $d[0];
    } else {
        return "Data inválida";
    }
}
function inverte_data_w_exception($date) {
    $date2 = str_replace('/', '-', $date);
    $d = explode('-', $date2);
    if(count($d)<3){
        throw new Exception("Data inválida.");
    }
    if (checkdate($d[1], $d[2], $d[0]) || checkdate($d[1], $d[0], $d[2])) {
        return $d[2] . '-' . $d[1] . '-' . $d[0];
    } else {
        throw new Exception("Data inválida.");
    }
}

/**
 * Retorna o array com a data
 * @param String $data
 * @return Array
 */
function dateToArray($data) {
    $data = str_replace('/', '-', $data);
    $d = explode('-', $data);
    if (checkdate($d[1], $d[2], $d[0]) || checkdate($d[1], $d[0], $d[2])) {
        return $d;
    } else {
        return array();
    }
}

/**
 * Retorna o mês por extenso
 * @param Int $mes
 * @return string
 */
function getMes($mes = 01) {
    $m = [
        '01' => 'Janeiro',
        '02' => 'Fevereiro',
        '03' => 'Março',
        '04' => 'Abril',
        '05' => 'Maio',
        '06' => 'Junho',
        '07' => 'Julho',
        '08' => 'Agosto',
        '09' => 'Setembro',
        '10' => 'Outubro',
        '11' => 'Novembro',
        '12' => 'Dezembro'
    ];
    return $m[$mes];
}

function ts_to_date($date) {
    $d = substr($date, 0, 10);
    return $d;
}

function getDataPorExtenso($data) {
    $d = dateToArray($data);
    return $d[0] . " de " . getMes($d[1]) . " de " . $d[2] . ".";
}

function form_to_db($date) {
    $date2 = str_replace('/', '-', $date);
    $d = explode('-', $date2);
    return $d[2] . '-' . $d[1] . '-' . $d[0];
}

function compara_data($data1, $data2){
    $d1 = new DateTime($data1);
    $d2= new DateTime($data2);
    
    if($d1<$d2){
        return 1;
    }elseif ($d1>$d2) {
        return -1;
    }elseif ($d1==$d2) {
        return 0;
    }
}

?>