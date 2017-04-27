<?php

class Setor_model extends CI_Model {

    public function get($id = null) {

        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('nome', 'ASC');
            $r = $this->db->get('setor');
            $a = $r->result_array();
            $md = array();
            foreach ($a as $key => $value) {
                $md[$value['id']] = $value;
            }
            $res = $md;
        } else {
            $q = $this->db->get_where('setor', ['id' => $id]);
            $res = $q->result_array();
        }

        return $res;
    }

    /**
     * @return array Retorna um array com o ID do módulo como índice e nome como valor 
     */
    public function getAllById() {
        //$this->db->where('status', 2);
        $this->db->order_by('nome', 'ASC');
        $r = $this->db->get('setor');
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

    public function insert($data) {
        if ($this->db->insert('setor', $data) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data) {

        $this->db->where(['id' => $data['id']]);
        $this->db->update('setor', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {

        $this->db->delete('setor', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function exists_nome($nome){
        $sql = "select * from setor where upper(nome)=upper(?)";
        $res = $this->db->query($sql,[$nome]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function exists($id){
        $sql = "select * from setor where id=?";
        $res = $this->db->query($sql,[$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function used($id){
        $sql = "select * from subsetor where setor=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }

}
