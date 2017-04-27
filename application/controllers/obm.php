<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Obm extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('obm_model');
        $this->load->model('municipio_model');
    }

    public function index() {
        //Array que será enviado à view
        $toView = array();
        
        //checa a autenticação
        $this->auth->checkAuth('obm');
        
        try {
            

            // Carrega os municípios
            $municipios = $this->municipio_model->getAllById();
            $toView['municipios'] = $municipios;
            
            // Carrega os municípios selecionáveis
            $muns = $this->municipio_model->get();
            $toView['muns'] = $muns;

            // Carrega as OBMs selecionáveis
            $obmss = $this->obm_model->get();
            $toView['obmss'] = $obmss;
            
            // Carrega as OBMs 
            $obms = $this->obm_model->getAllById();
            $toView['obms'] = $obms;

            if ($this->input->post('id') != null) {
                $id = $this->input->post('id');
                $m = $this->obm_model->get($id);
                if(count($m)>0){
                    $toView['obm'] = $m[0];
                }
            }
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //inclui cabeçalho, dinamico e rodapé
            $this->load->view('inc/header_view');
            $this->load->view('obm/obm_view', $toView);
            $this->load->view('inc/footer_view');
        }
    }

    //insert e update OBM
    public function insert() {
        //checa a autenticação
        $this->auth->checkAuth('obm');
        
        $om = [];
        
        try {

            if($this->input->post('id')!=null && $this->input->post('id')!='' && is_numeric($this->input->post('id'))){
                $id = $this->input->post('id');
                $om['id'] = $id;
            }
            
            if($this->input->post('nome')==null || $this->input->post('nome')=='' || strlen($this->input->post('nome'))<3){
                throw new Exception("Nome inválido");
            
            }
            if($this->input->post('abrev')==null || $this->input->post('abrev')==''){
                throw new Exception("Abreviação inválida");
            
            }
            
            if($this->input->post('superior')==null || $this->input->post('superior')=='' || !is_numeric($this->input->post('superior'))){
                throw new Exception("OBM superior inválida");
            
            }
            if(!$this->obm_model->exists($this->input->post('superior'))){
                throw new Exception("OBM superior não localizada");
            }
            
            if($this->input->post('municipio')==null || $this->input->post('municipio')=='' || !is_numeric($this->input->post('municipio'))){
                throw new Exception("Município inválido");
            
            }
            if(!$this->municipio_model->exists($this->input->post('municipio'))){
                throw new Exception("Município não localizado");
            }
            
            if($this->input->post('status')==null || $this->input->post('status')=='' || !is_numeric($this->input->post('status'))){
                throw new Exception("Status inválido");
            
            }
            
            //Inicializa as variáveis com o conteúdo recebido por POST
            $nome = $this->input->post('nome');
            $abrev = $this->input->post('abrev');
            $superior = $this->input->post('superior');
            $municipio = $this->input->post('municipio');
            $status = $this->input->post('status');
            
            $om['nome']=$nome;
            $om['abrev']=$abrev;
            $om['superior']=$superior;
            $om['municipio']=$municipio;
            $om['status']=$status;
            
            

            if ($id == NULL || $id == "") {
                if ($this->obm_model->insert($om)) {
                    $this->msg->sucesso("Cadastrado com sucesso.");
                } else {
                    throw new Exception("Erro ao cadastrar.");
                }
            } else {
                if ($this->obm_model->update($om)) {
                    $this->msg->sucesso("Cadastro alterado com sucesso.");
                } else {
                    throw new Exception("Erro ao alterar o cadastro.");
                }
            }
            redirect(site_url('obm'));
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('obm'));
        }
    }

    //delete OBM
    public function delete() {
        //checa a autenticação
        $this->auth->checkAuth('obm');
        
        try {
            $id = $this->input->post('id');
            if ($id != null || $id != "") {
                if ($this->obm_model->delete($id)) {
                    $this->msg->sucesso("Excluído com sucesso.");
                } else {
                    throw new Exception("Erro ao excluir.");
                }
                redirect(site_url('obm'));
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('obm'));
        }
    }

    public function estrutura() {
        $toView = [];
        //checa a autenticação
        $this->auth->checkAuth('obm');
        
        try{
            
            $all_obms = $this->obm_model->getAllHierarquia();
            $toView['all_obms'] = $all_obms;
            
            $obms = $this->obm_model->getAllById();
            $toView['obms'] = $obms;
            
            $muns = $this->municipio_model->getAllById();
            $toView['muns'] = $muns;
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        }finally{
            //inclui cabeçalho, dinamico e rodapé
            $this->load->view('inc/header_view');
            $this->load->view('obm/estrutura_view', $toView);
            $this->load->view('inc/footer_view');
        }
        
        
    }

}
