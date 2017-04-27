<?php

class Municipio_model extends CI_Model {

    /**
     * @usage
     * 
     */
    public function get($id = null) {

        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('nome', 'ASC');
            $r = $this->db->get('municipio');
            $a = $r->result_array();
            $na = array();
            foreach ($a as $key => $value) {
                $na[$value['id']] = $value;
            }
            $res = $na;
        } else {
            $q = $this->db->get_where('municipio', ['id' => $id]);
            $res = $q->result_array();
        }

        return $res;
    }

    /**
     * @return array Retorna um array com o ID do município como índice e nome como valor 
     * 
     */
    public function getAllById() {
        //$this->db->where('status', 2);
        $this->db->order_by('nome', 'ASC');
        $r = $this->db->get('municipio');
        $a = $r->result_array();
        $na = array();
        foreach ($a as $key => $value) {
            $na[$value['id']] = $value;
        }
        return $na;
    }

    /*
     * @usage
     * $result = $this->municipio_model->insert($this->input->post());
     *  print_r($result);
     */

    public function insert($data) {
        $this->db->insert('municipio', $data);
        if ($this->db->insert_id() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @usage $result = $this->municipio_model->update($data);
     */
    public function update($data) {
        $this->db->where(['id' => $data['id']]);
        $this->db->update('municipio', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('municipio', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function checkIfUsed($id) {
        $sql = "select * from obm where municipio=?";
        $res = $this->db->query($sql, [$id]);
        if ($res->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function exists($id) {
        $sql = "select * from municipio where id=?";
        $r = $this->db->query($sql, [$id]);
        if ($r->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
