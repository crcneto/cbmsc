<?php

class Obm_model extends CI_Model {

    /**
     * @usage
     */
    public function get($id = null) {
        if ($id === NULL) {
            $this->db->where('status', 2);
            $this->db->order_by('nivel ASC, nome ASC');
            $r = $this->db->get('obm');
            $a = $r->result_array();
            $na = array();
            foreach ($a as $key => $value) {
                $na[$value['id']] = $value;
            }
            $res = $na;
        } else {
            $q = $this->db->get_where('obm', ['id' => $id]);
            $res = $q->result_array();
        }

        return $res;
    }

    public function exists($id) {
        $sql = "select * from obm where id=?";
        $r = $this->db->query($sql, [$id]);
        if ($r->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getObmSuperior($id) {
        $ra = $this->get($id);
        $obm = $ra[0];
        $os = $this->get($obm['superior']);
        $obmsuperior = $os[0];
        return $obmsuperior;
    }

    public function getArrayById($id) {
        if (!$id) {
            throw new Exception('Identificação de OBM inválida.');
        }
        $sql = "select * from obm where id=? limit 1";
        $res = $this->db->query($sql, [$id]);
        if ($res->num_rows() <= 0) {
            throw new Exception('OBM não encontrada');
        }
        $obm = $res->row_array();
        return $obm;
    }

    /**
     * @usage
     * $this->obm_model->getAllById()
     * @return array Retorna um array com o ID como índice e o array da tupla.
     */
    public function getAllById() {
        //$this->db->where('status', 2);
        $this->db->order_by('nivel ASC, nome ASC');
        $r = $this->db->get('obm');
        $a = $r->result_array();
        $na = array();
        foreach ($a as $key => $value) {
            $na[$value['id']] = $value;
        }
        return $na;
    }

    public function insert($data) {
        $obmsuperior = $this->get($data['superior']);
        $nivel = $obmsuperior[0]['nivel'] + 1;
        $data['nivel'] = $nivel;
        $this->db->insert('obm', $data);
        if ($this->db->insert_id() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data) {
        $superior = $this->get($data['superior']);
        $data['nivel'] = $superior[0]['nivel'] + 1;
        $this->db->where(['id' => $data['id']]);
        $this->db->update('obm', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('obm', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getSubordinadasDiretas($id = 1) {
        $sql = "select * from obm where superior=?";
        $r = $this->db->query($sql, [$id]);
        $res = $r->result_array();
        $rr = [];
        foreach ($res as $key => $value) {
            if ($value['id'] != $value['superior']) {
                $rr[$value['id']] = $value;
            }
        }
        return $rr;
    }

    public function getIdsSubordinadasDiretas($id = 1) {
        $sql = "select id from obm where superior=?";
        $r = $this->db->query($sql, [$id]);
        $res = $r->result_array();
        $ids = [];
        foreach ($res as $key => $value) {
            $ids[] = $value['id'];
        }
        return $ids;
    }

    public function getSuperior($id) {
        $obm = $this->get($id);
        return $obm[0]['superior'];
    }

    public function getSuperiores($id) {
        $ss = [];
        $sup = $id;
        while ($sup > 1) {
            $s = $this->getSuperior($sup);
            $ss[] = $s;
            $sup = $s;
        }
        return $ss;
    }

    public function getMinimas() {
        $sql = 'select * from obm where id not in (select superior from obm)';
        $r = $this->db->query($sql);
        $res = $r->result_array();
        return $res;
    }

    public function setSubordinadas($obms) {
        foreach ($obms as $key => $value) {
            $obms[$key]['subordinadas'] = $this->getSubordinadasDiretas($key);
        }
        return $obms;
    }

    public function setSuperiores($obms) {
        foreach ($obms as $key => $value) {
            $obms[$key]['superiores'] = $this->getSuperiores($key);
        }
        return $obms;
    }

    public function getAllHierarquia() {
        $obms = $this->getAllById();
        $obms = $this->setSuperiores($obms);

        foreach ($obms as $id => $obm) {
            $subordinadas = [];

            foreach ($obms as $sid => $sobm) {
                if (in_array($id, $sobm['superiores'])) {
                    $subordinadas[] = $sobm['id'];
                }
            }
            $obms[$id]['subordinadas'] = $subordinadas;
        }
        return $obms;
    }

    public function getStringSubordinadas($obm) {
        //Hierarquia
        $hierarquia = $this->obm_model->getAllHierarquia();
        $ob = $hierarquia[$obm];
        $subordinadas = $ob['subordinadas'];
        $string = "(";
        foreach ($subordinadas as $k => $v) {
            if ($k == 0) {
                $string .= $v;
            } else {
                $string .= "," . $v;
            }
        }
        $string = $string . ")";
        return $string;
    }

    public function getStringObmESubordinadas($obm) {
        //Hierarquia
        $hierarquia = $this->obm_model->getAllHierarquia();
        $ob = $hierarquia[$obm];
        $subordinadas = $ob['subordinadas'];
        if (count($subordinadas) == 0) {
            $string = "($obm";
        } else {
            $string = "($obm,";
        }

        foreach ($subordinadas as $k => $v) {
            if ($k == 0) {
                $string .= $v;
            } else {
                $string .= "," . $v;
            }
        }
        $string = $string . ")";
        return $string;
    }

}
