<?php

class Categoriaeconomica_model extends CI_Model {

    public function get($id = null) {

        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('id', 'ASC');
            $r = $this->db->get('categoriaeconomica');
            $a = $r->result_array();
            $md = array();
            foreach ($a as $key => $value) {
                $md[$value['id']] = $value;
            }
            $q = $md;
        } else {
            $res = $this->db->get_where('categoriaeconomica', ['id' => $id]);
            $q = $res->result_array();
        }

        return $q;
    }

    public function getAllById() {
        //$this->db->where('status', 2);
        $this->db->order_by('id', 'ASC');
        $r = $this->db->get('categoriaeconomica');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['id']] = $value;
        }
        return $md;
    }

    public function exists($id) {
        $this->db->where('id', $id);
        $r = $this->db->get('categoriaeconomica');
        if ($r->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($data) {
        if ($this->db->insert('categoriaeconomica', $data) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data) {
        $this->db->where(['id' => $data['id']]);
        $this->db->update('categoriaeconomica', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('categoriaeconomica', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkIfUsed($id) {
        $sql = "select * from especificacao where categoria=?";
        $res = $this->db->query($sql, [$id]);
        if ($res->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
