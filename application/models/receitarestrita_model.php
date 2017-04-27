<?php

if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}

    /*
     * create table receitarestrita(
    id serial unique not null, 
    receita integer references origemreceita(id),
    data_inicial date,
    data_final date,
    valor double precision not null default 0.00,
    obs varchar,
    operador integer references usuario(id),
    ts timestamp default now()
    );
     */

class Receitarestrita_model extends CI_Model{
    
    public function insert($data){
        $this->db->insert('receitarestrita', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update($data){
        $this->db->where(['id' => $data['id']]);
        $this->db->update('receitarestrita', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function get($limit = 50){
        $sql = "select * from receitarestrita order by data_inicial desc, data_final desc limit ?";
        $res = $this->db->query($sql, [$limit]);
        if($res->num_rows()>0){
            return $res->result_array();
        }else{
            return null;
        }
        
    }
    
    public function getById($id){
        $sql = "select * from receitarestrita where id=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()<=0){
            return false;
        }else{
            return $res->row_array();
        }
    }
    
    public function exists($id){
        $sql = "select * from receitarestrita where id=?";
        $res = $this->db->query($sql, [$id]);
        if($res->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }


    public function delete($id){
        $sql = "delete from receitarestrita where id=?";
        $this->db->query($sql, [$id]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function get_restrita_join_receita(){
        $sql = "select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2)";
        $res = $this->db->query($sql);
        if($res->num_rows()>0){
            return $res->result_array();
        }else{
            return false;
        }
    }
    
    public function get_restritas_totais($datainicial, $datafinal){
        $sql = "select og.id, og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>=? and data_final<=? group by nome, og.id order by nome asc";
        $res = $this->db->query($sql, [$datainicial, $datafinal]);
        if($res->num_rows()>0){
            return $res->result_array();
        }else{
            return false;
        }
    }
    
    public function get_total_aplicacoes_restritas($datainicial, $datafinal){
        $sql = "select sum(valor) as total from planejamento where tipo=1 and dataprevista between ? and ? and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>=? and data_final<=? group by og.id)";
        $res = $this->db->query($sql, [$datainicial, $datafinal, $datainicial, $datafinal]);
        if($res->num_rows()>0){
            return $res->row_array();
        }else{
            return false;
        }
    }
    
    public function get_total_por_receita($datainicial, $datafinal){
        $sql = "select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between ? and ? and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc";
        $res = $this->db->query($sql, [$datainicial, $datafinal]);
        if($res->num_rows()>0){
            return $res->result_array();
        }else{
            return false;
        }
    }
    
    public function get_all_restritas_por_data($di, $df){
        $sql="select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between ? and ? and og.status=3 order by o.nome asc, dataprevista desc";
        $res = $this->db->query($sql, [$di, $df]);
        if($res->num_rows()>0){
            return $res->result_array();
        }else{
            return false;
        }
    }
    
    
    
}