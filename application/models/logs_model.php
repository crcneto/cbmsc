<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logs_model extends CI_Model{
    
    public function log($data){
        
        $operador = $data['operador'];
        $sql = $data['sql'];
        $s = "insert into logs (usuario, transacao) values (?, ?);";
        
        $r = $this->db->query($s, [$operador, $sql]);
        
        return $this->db->last_query();
    }
}
