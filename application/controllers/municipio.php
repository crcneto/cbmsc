<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Municipio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('municipio_model');
    }

    public function index() {
        //verifica acesso e login
        $this->access->has('municipio');

        $toView = array();

        try {
            //Carrega os muncipios cadastrados no banco de dados
            $municipios = $this->municipio_model->getAllById();
            $toView['municipios'] = $municipios;

            if ($this->input->post('id') != null) {
                $id = $this->input->post('id');
                $m = $this->municipio_model->get($id);
                $toView['mun'] = $m[0];
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //inclui as views
            $this->load->view('inc/header_view');
            $this->load->view('municipio/municipio_view', $toView);
            $this->load->view('inc/footer_view');
        }
    }

    public function insert() {
        
        try{
            
            $nome = $this->input->post('nome');
            $abrev = $this->input->post('abrev');
            $habitantes = $this->input->post('habitantes');
            $status = $this->input->post('status');
            
            $mun = [];
            
            if($this->input->post('id')!=null && $this->input->post('id')!='' && is_numeric($this->input->post('id'))){
                $id = $this->input->post('id');
                $mun['id'] = $id;
            }
            if($nome==null || $nome=='' || strlen($nome)<2){
                throw new Exception('Nome inválido');
            }
            
            if($abrev==null || $abrev=='' || strlen($abrev)<2){
                throw new Exception('Abreviação inválida');
            }
            
            if($habitantes== null || $habitantes=='' || !is_numeric($habitantes)){
                    throw new Exception("Número de habitantes inválido.");
            }
            
            if($status==null || $status=='' || !is_numeric($status)){
                throw new Exception("Status inválido");
            }
            $mun['nome'] = $nome;
            $mun['abrev'] = $abrev;
            $mun['habitantes'] = $habitantes;
            $mun['status'] = $status;
            
            
            if(isset($id)){
                if($this->municipio_model->update($mun)){
                    $this->msg->sucesso("Município alterado com sucesso");
                }else{
                    throw new Exception("Erro ao alterar o município");
                }
            }else{
                if($this->municipio_model->insert($mun)){
                    $this->msg->sucesso("Município cadastrado com sucesso");
                }else{
                    throw new Exception("Erro ao cadastrar o município");
                }
            }
            redirect(site_url('municipio'));
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('municipio'));
        }

        
    }

    public function delete() {
        try {
            $id = $this->input->post('id');
            if ($id != null && $id != "" && is_numeric($id)) {
                if ($this->municipio_model->checkIfUsed($id)) {
                    throw new Exception("O item não pôde ser excluído devido a referência de um cadastro de OBM ");
                }
                if ($this->municipio_model->delete($id)) {
                    $this->msg->sucesso("Excluído com sucesso.");
                    redirect(site_url('municipio'));
                } else {
                    throw new Exception("Erro ao excluir o município");
                }
            } else {
                throw new Exception("Município não identificado");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('municipio'));
        }
    }

}
