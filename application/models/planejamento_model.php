<?php

class Planejamento_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('array_helper');
    }

    public function getAllByPlano($id) {
        $sql = "select * from planejamento where plano=? order by tipo ASC, dataprevista ASC";
        $r = $this->db->query($sql, [$id]);
        return $r->result_array();
    }

    public function getAllByObm($id) {
        $sql = "select * from planejamento where ";
    }

    public function get($id) {
        $sql = "select * from planejamento where id=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()<=0){
            return false;
        }else{
            return $res->row_array();
        }
    }
    
    public function exists($id){
        $sql = "select * from planejamento where id=?;";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function zeraStatus($plano){
        $sql = "update planejamento set status=2 where plano=?";
        $res = $this->db->query($sql, [$plano]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }

    public function changeStatus($id, $status=3){
        if(!$this->exists($id)){
            throw new Exception("Item de planejamento não identificado.");
        }
        $sql = "update planejamento set status=? where id=?;";
        $res = $this->db->query($sql, [$status, $id]);
        if($this->db->affected_rows()<=0){
            return false;
        }else{
            return true;
        }
    }

    public function insert($data) {
        
        $this->db->insert('planejamento', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update($data) {
        $this->db->where(['id' => $data['id']]);
        $this->db->update('planejamento', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function isEmpty($plano){
        if($plano==null || $plano==''){
            throw new Exception("Plano não informado.");
        }
        $sql = "select * from planejamento where plano=?";
        $r = $this->db->query($sql, [$plano]);
        if($r->num_rows()>0){
            return false;
        }else{
            return true;
        }
    }


    public function delete($id){
        $sql = "delete from planejamento where id=?";
        $this->db->query($sql, [$id]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function getTotalReceitas($plano){
        $sql = "select sum(valor) as total from planejamento where plano=? and tipo=1";
        $r = $this->db->query($sql, [$plano]);
        $res = $r->result_array();
        return $res[0];
    }
    public function getTotalDespesas($plano){
        $sql = "select sum(valor) as total from planejamento where plano=? and tipo=2";
        $r = $this->db->query($sql, [$plano]);
        $res = $r->result_array();
        return $res[0];
    }

    public function getReceitasPorFonte($plano){
        $sql = "select origemreceita, sum(valor) from planejamento where plano=? and tipo=1 and status=2 group by origemreceita";
        $r = $this->db->query($sql, [$plano]);
        return $r->result_array();
    }
    public function getDespesas($plano){
        $sql = "select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano=? and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome";
        $r = $this->db->query($sql, [$plano]);
        return $r->result_array();
    }
    
    public function getAllDespesasByPlano($plano){
        $sql = "select * from planejamento where plano=? and tipo=2 and status=2";
        $r = $this->db->query($sql, [$plano]);
        return $r->result_array();
    }
    
    public function getDespesasPorEspecificacao($plano){
        $sql = "select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano=? and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome";
        $r = $this->db->query($sql, [$plano]);
        return $r->result_array();
    }
    
    public function getPlanejamentoAprovadoRegiao($subordinadas, $di, $df){
        $sql = "select * from planejamento as pj, plano as pn where pj.plano=pn.id and pn.datainicio>=? and pn.datafim<=? and pn.obm in $subordinadas";
        $r = $this->db->query($sql, [$di, $df]);
        return $r->result_array();
    }
    
    public function getPlanejamentoPorRegiao($subordinadas, $di, $df){
        if(strlen($subordinadas)<3){
            throw new Exception("Sem lançamentos no período.");
        }
        $sql = "select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in $subordinadas and pj.dataprevista between ? and ? and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc";
        $r = $this->db->query($sql, [$di, $df]);
        return $r->result_array();
    }
    public function getPlanejamentoPorRegiaoEspecificacao($subordinadas, $di, $df, $esp){
        if(strlen($subordinadas)<3){
            throw new Exception("Sem lançamentos no período.");
        }
        $sql = "select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in $subordinadas and pj.dataprevista between ? and ? and pn.status=4 and e.id=? order by o.nome asc, tipo asc, origemreceita asc";
        $r = $this->db->query($sql, [$di, $df, $esp]);
        return $r->result_array();
    }
    
    public function getBySomaObjetoByObm($subordinadas, $di, $df, $esp){
        if(strlen($subordinadas)<3){
            throw new Exception("Sem lançamentos no período.");
        }
        $sql = "select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in $subordinadas and pj.dataprevista between ? and ? and pn.status=4 and e.id=? order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm";
        $r = $this->db->query($sql, [$di, $df, $esp]);
        return $r->result_array();
    }
    
    public function existePlanejamento($plano){
        $sql = "select * from planejamento where plano=?";
        $res = $this->db->query($sql, [$plano]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function deferir_item($id){
        $sql = "update planejamento set status=2, indeferimento=null, ind_operador=null, ind_ts=null where id=?";
        $res = $this->db->query($sql, [$id]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function existe_origem($origemreceita){
        $sql = "select * from planejamento where origemreceita=?";
        $res = $this->db->query($sql, [$origemreceita]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }

}

?>