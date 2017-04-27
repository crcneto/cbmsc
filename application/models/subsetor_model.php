<?php

class Subsetor_model extends CI_Model {

    public function get($id = null) {

        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('nome', 'ASC');
            $r = $this->db->get('subsetor');
            $a = $r->result_array();
            $na = array();
            foreach ($a as $key => $value) {
                $na[$value['id']] = $value;
            }
            $res = $na;
        } else {
            $q = $this->db->get_where('subsetor', ['id' => $id]);
            $res = $q->result_array();
        }

        return $res;
    }
    
    public function getAllById() {
        //$this->db->where('status', 2);
        $sql = "select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc";
        $r = $this->db->query($sql);
        //$this->db->order_by('nome', 'ASC');
        //$r = $this->db->get('subsetor');
        $a = $r->result_array();
        $na = array();
        foreach ($a as $key => $value) {
            $na[$value['id']] = $value;
        }
        return $na;
    }

    public function getAllSetorSubsetorById() {
        $sql = "select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc";
        $res = $this->db->query($sql);
        $r = $res->result_array();
        $a = [];
        foreach ($r as $k => $v) {
            $a[$v['id']] = $v;
        }
        return $a;
    }
    
    public function insert($data) {
        if ($this->db->insert('subsetor', $data) > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @usage $result = $this->subsetor_model->update($data);
     */
    public function update($data) {
        $this->db->where(['id' => $data['id']]);
        if ($this->db->update('subsetor', $data) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('subsetor', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
