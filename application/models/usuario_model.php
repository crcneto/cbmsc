<?php

class Usuario_model extends CI_Model {

    public function get($id = null) {
        if ($id === NULL) {
            $sql = "select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status=2 order by apelido ASC, nome ASC, matricula ASC";
            $r = $this->db->query($sql);
            $a = $r->result_array();
            $na = array();
            foreach ($a as $key => $value) {
                $na[$value['id']] = $value;
            }
            $res = $na;
        } else {
            $q = $this->db->get_where('usuario', ['id' => $id]);
            $res = $q->result_array();
        }
        return $res;
    }

    public function getAllById() {
        $sql = "select id, matricula, apelido, nome, email, obm, postograd, status from usuario order by apelido ASC, nome ASC, matricula ASC";
        $r = $this->db->query($sql);
        $a = $r->result_array();
        $na = array();
        foreach ($a as $key => $value) {
            $na[$value['id']] = $value;
        }
        return $na;
    }

    public function getAll() {
        $sql = "select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC";
        $r = $this->db->query($sql);
        $a = $r->result_array();
        $na = array();
        foreach ($a as $key => $value) {
            $na[$value['id']] = $value;
        }
        return $na;
    }

    public function insert($data) {
        $this->db->insert('usuario', $data);
        if ($this->db->insert_id() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data) {
        $this->db->where(['id' => $data['id']]);
        $this->db->update('usuario', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('usuario', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function login($login, $senha) {
        $q = $this->db->get_where('usuario', array(
            'email' => $login,
            'senha' => md5($senha)
        ));
        $r = $q->result_array();
        if (count($r) > 0) {
            unset($r[0]['senha']);
            return $r[0];
        } else {
            return null;
        }
    }
    
    public function exists($id){
        $sql = "select * from usuario where id=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function exists_email($email){
        $sql = "select * from usuario where email=?";
        $res = $this->db->query($sql, [$email]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function exists_matricula($matricula){
        $sql = "select * from usuario where matricula=?";
        $res = $this->db->query($sql, [$matricula]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }

}
