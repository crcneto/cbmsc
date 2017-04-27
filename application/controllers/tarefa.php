<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tarefa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('tarefa_model');
    }

    public function index() {
        try {
            $this->auth->checkAuth('tarefa');
            $toView = [];
            $usuario = $this->session->userdata('operador');
            
            $tarefas = $this->tarefa_model->getAllPendentes($usuario);
            if (count($tarefas) > 0) {
                $toView['tarefas'] = $tarefas;
            }
            
            $concluidas = $this->tarefa_model->getAllConcluidas($usuario);
            if (count($concluidas) > 0) {
                $toView['concluidas'] = $concluidas;
            }

            $this->load->view('inc/header_view');
            $this->load->view('tarefa/tarefa_view', $toView);
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            $this->load->view('inc/header_view');
            $this->load->view('tarefa/tarefa_view');
            $this->load->view('inc/footer_view');
        }
    }
    
    public function concluir(){
        $this->auth->checkAuth('tarefa');
        try{
            if (!$this->input->post('id')) {
                throw new Exception("Tarefa não identificada.");
            }
            $id = $this->input->post('id');
            
            if(!$this->tarefa_model->exists($id)){
                throw new Exception("Tarefa não localizada.");
            }
            $data = ['id'=>$id, 'status'=>3, 'data_conclusao'=>Date('Y-m-d')];
            if($this->tarefa_model->update($data)){
                $this->msg->sucesso("Tarefa concluída.");
                redirect(site_url('tarefa'));
            }else{
                throw new Exception("Erro ao suspender a tarefa");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('tarefa'));
        }
    }
    
    public function suspender(){
        $this->auth->checkAuth('tarefa');
        try{
            if (!$this->input->post('id')) {
                throw new Exception("Tarefa não identificada.");
            }
            $id = $this->input->post('id');
            
            if(!$this->tarefa_model->exists($id)){
                throw new Exception("Tarefa não localizada.");
            }
            $data = ['id'=>$id, 'status'=>1];
            if($this->tarefa_model->update($data)){
                $this->msg->sucesso("Tarefa suspensa.");
                redirect(site_url('tarefa'));
            }else{
                throw new Exception("Erro ao suspender a tarefa");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('tarefa'));
        }
    }
    public function pendente(){
        $this->auth->checkAuth('tarefa');
        try{
             if (!$this->input->post('id')) {
                throw new Exception("Tarefa não identificada.");
            }
            $id = $this->input->post('id');
            
            if(!$this->tarefa_model->exists($id)){
                throw new Exception("Tarefa não localizada.");
            }
            $data = ['id'=>$id, 'status'=>2];
            if($this->tarefa_model->update($data)){
                $this->msg->sucesso("Tarefa pendente.");
                redirect(site_url('tarefa'));
            }else{
                throw new Exception("Erro ao tornar a tarefa pendente");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('tarefa'));
        }
    }

    public function delete() {
        $this->auth->checkAuth('tarefa');
        try {
            if (!$this->input->post('id')) {
                throw new Exception("Tarefa não identificada.");
            }
            $id = $this->input->post('id');
            
            if(!$this->tarefa_model->exists($id)){
                throw new Exception("Tarefa não localizada.");
            }
            if($this->tarefa_model->delete($id)){
                $this->msg->sucesso("Tarefa excluída.");
                redirect(site_url('tarefa'));
            }else{
                throw new Exception("Erro ao excluir a tarefa");
            }
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('tarefa'));
        }
    }

    public function insert() {
        try {
            $this->auth->checkAuth('tarefa');
            $usuario = $this->session->userdata('operador');
            $data = inverte_data_w_exception($this->input->post('data_prevista'));
            if (!$this->input->post('tarefa')) {
                throw new Exception('O campo tarefa deverá ser preenchido.');
            }
            $tarefa = $this->input->post('tarefa');
            $data = [
                'usuario' => $usuario,
                'data_prevista' => $data,
                'tarefa' => $tarefa
            ];
            if ($this->tarefa_model->insert($data)) {
                $this->msg->sucesso('Tarefa cadastrada com sucesso.');
                redirect(site_url('tarefa'));
            } else {
                throw new Exception("Erro ao cadastrar tarefa.");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('tarefa'));
        }
    }

}
