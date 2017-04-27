<?php

class Destino_model extends CI_Model{
    
    /**
     * @usage
     * Single:  $this->destino_model->get(2);
     * All:     $this->destino_model->get();
     */
    public function get($id = null){
        
        if($id === NULL){
            $s = $this->db->query("select destino.id, destino.nome, destino.status, destino.aplicacao, destino.ts, aplicacao.nome as anome from destino, aplicacao where aplicacao.id=destino.aplicacao order by anome ASC, nome ASC;");
            return $s->result_array();
            
        } else {
            $q = $this->db->get_where('destino', ['id' => $id]);
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
        $r = $this->db->get('destino');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['id']] = $value;
        }
        return $md;
    }
    /*
     * @usage
     * $result = $this->destino_model->insert($this->input->post());
     *  print_r($result);
     */
    public function insert($data){
        $this->db->insert('destino', $data);
        if($this->db->insert_id()>0){
            return true;
        }else{
            return false;
        }
    }
    
    /**
     * @usage $result = $this->destino_model->update($data);
     */
    public function update($data){
        $this->db->where(['id'=>$data['id']]);
        $this->db->update('destino', $data);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){
        $this->db->delete('destino', ['id'=>$id]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
}
