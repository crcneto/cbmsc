<?php

/**
 * Classe de persistência dos módulos do sistema
 *
 * @author neto
 */
class modulo_model extends CI_Model{
    /**
     * @usage
     * Single:  $this->modulo_model->get(2);
     * All:     $this->modulo_model->get();
     */
    public function get($id = null){
        
        if($id === NULL){
            $this->db->order_by('nome','ASC');
            $q = $this->db->get('modulo');
        } else {
            $q = $this->db->get_where('modulo', ['id' => $id]);
        }
        
        return $q->result_array();
    }
    
    /**
     * @return array Retorna um array com o ID do módulo como índice e nome como valor 
     * 
     */
    public function getAllById(){
        $this->db->where('status', 2);
        $this->db->order_by('nome','ASC');
        $r = $this->db->get('modulo');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['id']] = $value;
        }
        return $md;
    }
    
    public function getAllIdByNome(){
        $this->db->order_by('nome','ASC');
        $r = $this->db->get('modulo');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['nome']] = $value['id'];
        }
        return $md;
    }
    /*
     * @usage
     * $result = $this->modulo_model->insert($this->input->post());
     *  print_r($result);
     */
    public function insert($data){
        $this->db->insert('modulo', $data);
        if($this->db->insert_id()>0){
            return true;
        }else{
            return false;
        }
    }
    
    /**
     * @usage $result = $this->modulo_model->update($data);
     */
    public function update($data){
        $this->db->where(['id'=>$data['id']]);
        $this->db->update('modulo', $data);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){
        $this->db->delete('modulo', ['id'=>$id]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
}
