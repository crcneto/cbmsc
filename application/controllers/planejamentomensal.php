<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Planejamentomensal extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('categoriaeconomica_model');
        $this->load->model('naturezadespesa_model');
        $this->load->model('aplicacao_model');
        $this->load->model('objeto_model');
        $this->load->model('especificacao_model');
        $this->load->model('plano_model');
        $this->load->model('obm_model');
        $this->load->model('origemreceita_model');
        $this->load->model('planejamento_model');
        $this->load->model('usuario_model');
        $this->load->library('session');
        if(isset($_SESSION)){
            session_start();
        }
    }
    
    public function index(){
        if($this->input->post('plano')==null || $this->input->post('plano')==''){
            $_SESSION['erro_mensagem'] = "É necessário escolher um plano existente";
            redirect(site_url('plano'));
        }
        $toView = array();
        
        //plano recebido por POST
        $planoa = $this->plano_model->get($this->input->post('plano'));
        $plano = $planoa[0];
        $toView['plano'] = $plano;
        
        //obms
        $obma = $this->obm_model->get($plano['obm']);
        $obm = $obma[0];
        $toView['obm'] = $obm;
        
        //Carrega origens de receita
        $origens = $this->origemreceita_model->getAllById();
        $toView['origens'] = $origens;
        
        //carrega especificações
        $especificacoes = $this->especificacao_model->getAllById();
        $toView['especs'] = $especificacoes;
        
        
         //cabeçalho
        $this->load->view('inc/header_view');
        
        //Helper de manipulação de datas
        $this->load->helper('data_helper');
        
        
        $this->load->view('planejamento/planejamentomensal_view', $toView);
        $this->load->view('inc/footer_view');
    }
}

