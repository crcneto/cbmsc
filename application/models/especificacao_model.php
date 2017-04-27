<?php

class Especificacao_model extends CI_Model {

    public function get($id = null) {

        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('categoria ASC, natureza ASC, aplicacao ASC, objeto ASC, nro ASC, nome ASC');
            $r = $this->db->get('especificacao');
            $a = $r->result_array();
            $md = array();
            foreach ($a as $key => $value) {
                $md[$value['id']] = $value;
            }
            $res = $md;
        } else {
            $q = $this->db->get_where('especificacao', ['id' => $id]);
            $res = $q->result_array();
        }

        return $res;
    }

    public function exists($id) {
        $this->db->where('id', $id);
        $r = $this->db->get('especificacao');
        $c = $r->result_array();
        if (count($c) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllById() {
        //$this->db->where('status', 2);
        $this->db->order_by('categoria ASC, natureza ASC, aplicacao ASC, objeto ASC, nro ASC, nome ASC');
        $r = $this->db->get('especificacao');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            $md[$value['id']] = $value;
        }
        return $md;
    }

    public function getAllByIdString() {
        $this->db->where('status', 2);
        $this->db->order_by('categoria ASC, natureza ASC, aplicacao ASC, objeto ASC, nome ASC');
        $r = $this->db->get('especificacao');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $v) {
            if ($v['categoria'] == 0) {
                $md[$v['id']] = $v['nome'];
            } else {
                if (strlen($v['nro']) < 2) {
                    $md[$v['id']] = $v['categoria'] . '.' . $v['natureza'] . '.' . $v['aplicacao'] . '.' . $v['objeto'] . '.0' . $v['nro'] . ' - ' . $v['nome'];
                } else {
                    $md[$v['id']] = $v['categoria'] . '.' . $v['natureza'] . '.' . $v['aplicacao'] . '.' . $v['objeto'] . '.' . $v['nro'] . ' - ' . $v['nome'];
                }
            }
        }
        return $md;
    }

    public function insert($data) {
        $r = $this->db->insert('especificacao', $data);
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
        $this->db->update('especificacao', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('especificacao', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function checkIfUsed($id) {
        $sql = "select * from planejamento where especificacao=?";
        $res = $this->db->query($sql, [$id]);
        if ($res->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
