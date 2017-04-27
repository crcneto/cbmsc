<?php

class Naturezadespesa_model extends CI_Model {

    public function get($id = null) {

        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('id', 'ASC');
            $r = $this->db->get('naturezadespesa');
            $a = $r->result_array();
            $md = array();
            foreach ($a as $key => $value) {
                $md[$value['id']] = $value;
            }
            $res = $md;
        } else {
            $q = $this->db->get_where('naturezadespesa', ['id' => $id]);
            $res = $q->result_array();
        }

        return $res;
    }

    public function getAllById() {
        $this->db->order_by('id', 'ASC');
        $r = $this->db->get('naturezadespesa');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['id']] = $value;
        }
        return $md;
    }

    public function exists($id) {
        $this->db->where('id', $id);
        $r = $this->db->get('naturezadespesa');
        $c = $r->result_array();
        if (count($c) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($data) {
        $r = $this->db->insert('naturezadespesa', $data, true);
        if ($r) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data) {
        $this->db->where(['id' => $data['id']]);
        $this->db->update('naturezadespesa', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('naturezadespesa', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function checkIfUsed($id) {
        $sql = "select * from especificacao where natureza=?";
        $res = $this->db->query($sql, [$id]);
        if ($res->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
