<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Acesso_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function deleteAll($usuario, $obm) {
        $sql = "delete from acesso where usuario=? and obm=?";

        $r = $this->db->query($sql, [$usuario, $obm]);

        if ($r > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($data) {
        $res = $this->db->insert('acesso', $data);

        if ($res > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAcessos($usuario, $obm) {
        $sql = "select * from acesso where usuario=? and obm=?";
        $res = $this->db->query($sql, [$usuario, $obm]);
        $r = $res->result_array();
        $a = [];
        foreach ($r as $v) {
            $a[$v['modulo']] = $v;
        }
        return $a;
    }

    public function getModuloId($nomeDoModulo) {
        $s = "select id from modulo where nome=? order by id asc limit 1";
        $rr = $this->db->query($s, [$nomeDoModulo]);
        if ($rr->num_rows() <= 0) {
            throw new Exception('Módulo não encontrado. Por gentileza, entre em contato com o administrador técnico do sistema.');
        }
        $m = $rr->row_array();
        return $m['id'];
    }

    public function getNivel($usuario, $nomeDoModulo, $obm) {
        $idModulo = $this->getModuloId($nomeDoModulo);

        $sql = "select nivel from acesso where usuario=? and modulo=?  and obm=?";
        $res = $this->db->query($sql, [$usuario, $idModulo, $obm]);
        if ($res->num_rows() <= 0) {
            return 0;
        }
        $row = $res->row_array();
        if ($row['nivel'] == 0) {
            return 0;
        } else {
            return $row['nivel'];
        }
    }

    public function possuiAcesso($usuario, $nomeDoModulo) {
        $modulo = $this->getModuloId($nomeDoModulo);
        $sql = "select * from acesso where usuario=? and modulo=? and nivel>0";
        $res = $this->db->query($sql, [$usuario, $modulo]);
        if ($res->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function modulosAutorizados($usuario, $modulos) {
        if (!$usuario) {
            throw new Exception('Erro ao carregar os módulos autorizados. Usuário não identificado.');
        }
        $sql = "select * from acesso as a, modulo as m where a.modulo=m.id and usuario=? and nivel>0";
        $res = $this->db->query($sql, [$usuario]);
        if ($res->num_rows() <= 0) {
            return null;
        }
        $r = $res->result_array();
        $modulos = array();
        foreach ($r as $k => $v) {
            $modulos[$v['nome']] = $v['id'];
        }
        return $modulos;
    }

    //retorna array com as OBMs onde o $usuario possui $nivel de acesso;
    public function getObmPorAcesso($usuario, $modulo, $nivel) {
        $sql = "select a.obm from acesso as a, modulo as m where usuario=? and a.modulo=m.id and m.nome=? and nivel=?";
        $res = $this->db->query($sql, [$usuario, $modulo, $nivel]);
        if ($res->num_rows() <= 0) {
            throw new Exception("Desculpe, acesso negado. Procure um administrador de sua OBM para liberar acesso.");
        }
        $r = $res->result_array();
        return $r;
    }
    
    //retorna os módulos onde o $usuario possui $acesso
    public function getModulosAutorizados($usuario, $nivel){
        $sql = "select modulo from acesso where usuario=? and nivel>=? group by modulo";
        $res = $this->db->query($sql, [$usuario, $nivel]);
        $r = $res->result_array();
        $a = [];
        if(count($r)<=0){
            throw new Exception('O usuário não possui acesso administrador a nenhum módulo.');
        }
        foreach ($r as $k => $v) {
            $a[] = $v['modulo'];
        }
        $sa = "(".implode(',', $a).")";
        return $sa;
    }
    //retorna os módulos onde o $usuario possui $acesso
    public function getAllModulosAutorizados($usuario, $nivel){
        $modulos = $this->getModulosAutorizados($usuario, $nivel);
        $sql = "select * from modulo where id in $modulos";
        $res = $this->db->query($sql);
        $r = $res->result_array();
        return $r;
    }
    

    //retorna a String das OBMs que o $usuario possui $nivel de acesso em $modulo
    public function getStringObmPorAcesso($usuario, $modulo, $nivel) {
        $res = $this->getObmPorAcesso($usuario, $modulo, $nivel);
        $a = [];
        foreach ($res as $k => $v) {
            $a[]=$v['obm'];
        }
        $sr = "(";
        $sr.= implode(",", $a);
        $sr .= ")";
        return $sr;
    }
    
    public function getObmsControleAcesso($usuario, $modulo, $nivel){
        $so = $this->getStringObmPorAcesso($usuario, $modulo, $nivel);
        $sql = "select * from obm where id in $so";
        $res = $this->db->query($sql);
        $r = $res->result_array();
        return $r;
    }

    public function obm_maior_acesso($modulo, $usuario) {
        //$sql = "select * from acesso where usuario=? and modulo=? order by nivel ASC limit 1";
        //
        // **** Apenas para testes ****
        return 3;
    }
    
    public function verificaAdministrador($operador, $obm){
        //verificar se o operador é administrador na OBM de avaliação
        $sql = "select * from acesso where usuario=? and obm=? and nivel=5";
        $rs = $this->db->query($sql, [$operador, $obm]);
        if($rs->num_rows()<=0){
            return false;
        }else{
            return true;
        }
    }
    
    public function checkNivel($operador, $modulo, $nivel){
        $sql = "select * from acesso as a, modulo as m  where a.modulo=m.id and a.usuario=? and m.nome=? and a.nivel=?";
        $res = $this->db->query($sql, [$operador, $modulo, $nivel]);
    }
    
    public function getEmailAdminsPlanejamentoPorObm($obm){
        $sql = "select u.email from acesso as a, usuario as u, modulo as m where a.usuario=u.id and a.obm=? and a.nivel=5 and a.modulo=m.id and m.nome='planejamento' group by u.email";
        $res = $this->db->query($sql, [$obm]);
        $r = $res->result_array();
        return $r;
    }

}
