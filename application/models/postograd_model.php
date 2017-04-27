<?php

class Postograd_model extends CI_Model{
    
    public function get($id = null){
        
        if($id === NULL){
            $this->db->order_by('nome');
            $q = $this->db->get('postograd');
        } else {
            $q = $this->db->get_where('postograd', ['id' => $id]);
        }
        
        return $q->result_array();
    }
    
    /**
     * @return array Retorna um array com o ID do módulo como índice e nome como valor 
     */
    public function getAllById(){
        $this->db->where('status', 2);
        $this->db->order_by('nome','ASC');
        $r = $this->db->get('postograd');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['id']] = $value;
        }
        return $md;
        
    }
    /*
     * @usage
     * $result = $this->aplicacao_model->insert($this->input->post());
     *  print_r($result);
     */
    public function insert($data){

        $this->db->insert('postograd', $data);
        if($this->db->insert_id()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function update($data){

        $this->db->where(['id'=>$data['id']]);
        $this->db->update('postograd', $data);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){

        $this->db->delete('postograd', ['id'=>$id]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function exists($id){
        $sql = "select * from postograd where id=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
}