<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tarefa_model extends CI_Model {
    
    public function insert($data){
        $this->db->insert('tarefa', $data);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function getAllPendentes($usuario, $ordem='status desc, data_prevista asc'){
        $sql = "select * from tarefa where usuario=? and status<>3 order by $ordem";
        $res = $this->db->query($sql, [$usuario]);
        return $res->result_array();
    }
    public function getAllConcluidas($usuario, $ordem='data_conclusao desc, data_prevista asc'){
        $sql = "select * from tarefa where usuario=? and status=3 order by $ordem";
        $res = $this->db->query($sql, [$usuario]);
        return $res->result_array();
    }
    
    public function exists($id){
        $this->db->from('tarefa');
        $this->db->where(['id'=>$id]);
        $res = $this->db->get();
        if ($res->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function update($data){
        $this->db->where(['id' => $data['id']]);
        $this->db->update('tarefa', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function delete($id) {
        $this->db->delete('tarefa', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    
    
}

