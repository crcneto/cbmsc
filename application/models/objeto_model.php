<?php

class Objeto_model extends CI_Model {

    public function get($id = null) {

        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('id ASC, nome ASC');
            $r = $this->db->get('objeto');
            $a = $r->result_array();
            $md = array();
            foreach ($a as $key => $value) {
                $md[$value['id']] = $value;
            }
            $res = $md;
        } else {
            $q = $this->db->get_where('objeto', ['id' => $id]);
            $res = $q->result_array();
        }

        return $res;
    }

    public function exists($id) {
        $this->db->where('id', $id);
        $r = $this->db->get('objeto');
        $c = $r->result_array();
        if (count($c) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllById() {
        //$this->db->where('status', 2);
        $this->db->order_by('id ASC, nome ASC');
        $r = $this->db->get('objeto');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['id']] = $value;
        }
        return $md;
    }

    public function insert($data) {
        $r = $this->db->insert('objeto', $data);
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
        $this->db->update('objeto', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('objeto', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function checkIfUsed($id) {
        $sql = "select * from especificacao where objeto=?";
        $res = $this->db->query($sql, [$id]);
        if ($res->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
