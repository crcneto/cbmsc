<?php

class Aplicacao_model extends CI_Model {

    public function get($id = null) {

        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('id', 'ASC');
            $r = $this->db->get('aplicacao');
            $a = $r->result_array();
            $md = array();
            foreach ($a as $key => $value) {
                $md[$value['id']] = $value;
            }
            $res = $md;
        } else {
            $q = $this->db->get_where('aplicacao', ['id' => $id]);
            $res = $q->result_array();
        }

        return $res;
    }

    public function exists($id) {
        $this->db->where('id', $id);
        $r = $this->db->get('aplicacao');
        $c = $r->result_array();
        if (count($c) > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return array Retorna um array com o ID do módulo como índice e nome como valor 
     * 
     */
    public function getAllById() {
        //$this->db->where('status', 2);
        $this->db->order_by('id', 'ASC');
        $r = $this->db->get('aplicacao');
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
        $r = $this->db->insert('aplicacao', $data);
        if ($r > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @usage $result = $this->aplicacao_model->update($data);
     */
    public function update($data) {
        $this->db->where(['id' => $data['id']]);
        $this->db->update('aplicacao', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('aplicacao', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function checkIfUsed($id) {
        $sql = "select * from especificacao where aplicacao=?";
        $res = $this->db->query($sql, [$id]);
        if ($res->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
