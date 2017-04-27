<?php

//id, obm, datainicio, datafim, ts, usuario, status, reprovacao, usuarioreprovacao, aprovacao, responsavel
class Plano_model extends CI_Model {

    /**
      //Monta status
      $st = array(
      '0' => 'Desativado',
      '1' => 'Reprovado',
      '2' => 'Pendente',
      '3' => 'Aprovado intermediário',
      '4' => 'Aprovado',
      );
     */
    public function getAll($id = null) {

        if ($id === NULL) {
            $this->db->order_by('obm');
            $q = $this->db->get('plano');
        } else {
            $q = $this->db->get_where('plano', ['id' => $id]);
        }

        return $q->result_array();
    }

    public function get($id) {
        if ($this->exists($id)) {
            $this->db->where('id', $id);
            $r = $this->db->get('plano');
            return $r->result_array();
        } else {
            return null;
        }
    }

    public function getById($id) {
        $this->db->where('id', $id);
        $r = $this->db->get('plano');
        return $r->row_array();
    }

    public function getArrayById($id) {
        $sql = "select * from plano where id=? limit 1";
        $res = $this->db->query($sql, [$id]);
        if ($res->num_rows() <= 0) {
            throw new Exception("Plano não encontrado.");
        }
        $r = $res->row_array();
        return $r;
    }

    public function getAprovados() {
        $sql = "select * from plano where status=4 order by datainicio DESC, datafim DESC";
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function getAprovadosByObm($obm) {
        $sql = "select * from plano where status=4 and obm=? order by datainicio DESC, datafim DESC";
        $r = $this->db->query($sql, [$obm]);
        return $r->result_array();
    }

    public function getAllPendentes() {
        $sql = "SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC";
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function getAllPendentesObm($obms) {
        $sql = "SELECT * FROM plano WHERE status<4 and status>0 and obm in $obms ORDER BY datainicio DESC";
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function exists($id) {
        $this->db->where('id', $id);
        $r = $this->db->get('plano');
        $c = $r->result_array();
        if (count($c) > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function alteravel($id){
        $sql = "SELECT * FROM plano WHERE status=2 or status=1 and id=?";
        $res = $this->db->query($sql, [$id]);
        $r = $res->result_array();
        if(count($r)>0){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @return array Retorna um array com o ID do módulo como índice e nome como valor 
     * 
     */
    public function getAllById() {
        $this->db->where('status', 2);
        $this->db->order_by('obm', 'ASC');
        $r = $this->db->get('plano');
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
        $this->db->insert('plano', $data);
        if ($this->db->affected_rows() > 0) {
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
        $this->db->update('plano', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function aprovarDefinitivo($id, $idusuario) {
        if ($id == null || $id == '') {
            throw new Exception("Plano não identificado.");
        }
        $this->db->where(['id' => $id]);
        $this->db->set(['status' => '4']);
        $this->db->set(['responsavel' => $idusuario]);
        $this->db->set(['aprovacao' => date('Y-m-d h:m:s')]);
        $r = $this->db->update('plano');
        if ($r > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function aprovar($id, $operador, $nivel, $proximaobm) {
        //verificar se obm está no último nível
        if ($nivel == 1) {
            $this->db->set(['status' => '4']);
        } else {
            $this->db->set(['status' => '3']);
        }
        $this->db->where(['id' => $id]);
        $this->db->set(['responsavel' => $operador]);
        $this->db->set(['obmavaliacaopendente' => $proximaobm]);
        $this->db->set(['aprovacao' => date('Y-m-d h:m:s')]);
        $r = $this->db->update('plano');
        if ($r > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->load->model('planejamento_model');
        if (!$this->planejamento_model->isEmpty($id)) {
            throw new Exception("Existem itens cadastrados nesse plano.");
        }
        if ($this->db->delete('plano', ['id' => $id]) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function reprovar($data) {
        //$data = [plano=>'', operador=>'', motivo=>'']
        $this->db->where(['id' => $data['plano']['id']]);
        $upd = array('status' => 1, 'obmavaliacaopendente' => $data['plano']['obm'], 'usuarioreprovacao' => $data['operador']);
        $this->db->set('reprovacao', 'NOW()', FALSE);
        $this->db->update('plano', $upd);
        if ($this->db->affected_rows() > 0) {
            $d = array(
                'plano' => $data['plano']['id'],
                'operador' => $data['operador'],
                'motivo' => $data['motivo']
            );
            $this->db->insert('reprovacao', $d);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function retirarAprovacao($plano) {
        $sql = "update plano set aprovacao=null, responsavel=null where id=?";
        $res = $this->db->query($sql, [$plano]);
        if ($res > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getReprovacoesByPlano($id) {
        $sql = "select * from reprovacao where plano=?;";
        $r = $this->db->query($sql, [$id]);
        if ($r->num_rows() > 0) {
            return $r->result_array();
        } else {
            return false;
        }
    }

}
