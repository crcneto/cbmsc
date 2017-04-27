<?php

class Origemreceita_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function get($id = null){
        
        if($id === NULL){
            $q = $this->db->get('origemreceita');
        } else {
            $q = $this->db->get_where('origemreceita', ['id' => $id]);
        }
        
        return $q->result_array();
    }
    
    /**
     * @return array Retorna um array com o ID do módulo como índice e nome como valor 
     * 
     */
    public function getAllById(){
        $this->db->order_by('nome','ASC');
        $r = $this->db->get('origemreceita');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['id']] = $value;
        }
        return $md;
    }
    /*
     * @usage
     * $result = $this->modulo_model->insert($this->input->post());
     *  print_r($result);
     */
    public function insert($data){
        $this->db->insert('origemreceita', $data);
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
        $this->db->update('origemreceita', $data);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){
        $this->load->model('planejamento_model');
        if($this->planejamento_model->existe_origem($id)){
            throw new Exception("Esta fonte não pode ser apagada pois já foi utilizada em algum planejamento.");
        }
        $this->db->delete('origemreceita', ['id'=>$id]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function getRestritas(){
        $sql = "SELECT * FROM origemreceita WHERE status=3";
        $res = $this->db->query($sql);
        if($res->num_rows()>0){
            return $res->result_array();
        }else{
            return null;
        }
    }
    public function getRestritasById(){
        $sql = "SELECT * FROM origemreceita WHERE status=3";
        $res = $this->db->query($sql);
        if($res->num_rows()>0){
            $r = $res->result_array();
            $ret = [];
            foreach ($r as $k => $v) {
                $ret[$v['id']] = $v;
            }
            return $ret;
        }else{
            return null;
        }
    }
    
    public function exists_origem_planejamento($id){
        $sql = "select * from planejamento where origemreceita=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function exists($id){
        $sql = "select * from origemreceita where id=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }


    public function existe_receita_restrita($id){
        $sql = "select * from receitarestrita where receita=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
}
