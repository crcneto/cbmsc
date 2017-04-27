<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aplicacao extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Carrega model
        $this->load->model('aplicacao_model');
    }

    public function index() {

        //checa a autenticação
        $this->auth->checkAuth('configcontabil');

        //Array que será enviado à view
        $toView = array();

        try {

            // Carrega as aplicacoes cadastradas
            $aplicacoes = $this->aplicacao_model->getAllById();
            $toView['aplicacoes'] = $aplicacoes;
            
            if ($this->input->post('id') != null) {
                $id = $this->input->post('id');
                $m = $this->aplicacao_model->get($id);
                $toView['ap'] = $m[0];
            } 

        } catch (Exception $ex) {
            
            $this->msg->erro($ex->getMessage());
            
        } finally {
            
            $this->load->view('inc/header_view');
            $this->load->view('aplicacao/aplicacao_view', $toView);
            $this->load->view('inc/footer_view');
            
        }
    }

    //insert e update aplicacao
    public function insert() {

        //checa a autenticação
        $this->auth->checkAuth('aplicacao');

        try {

            //Inicializa as variáveis com o conteúdo recebido por POST
            $id = $this->input->post('id');
            $nome = $this->input->post('nome');
            $descricao = $this->input->post('descricao');
            $status = $this->input->post('status');
            
            $ap = [];

            if($id==null || $id=='' || !is_numeric($id)){
                throw new Exception("Número de identificação inválido");
            }
            if($nome==null || $nome=='' || strlen($nome)<2){
                throw new Exception("Nome inválido");
            }
            $ap['id'] = $id;
            $ap['nome'] = $nome;
            if($descricao!=null && $descricao!=''){
                $ap['descricao'] = $descricao;
            }
            if($status!= null && $status!='' && is_numeric($status)){
                $ap['status'] = $status;
            }


            if ($this->aplicacao_model->exists($id)) {
                $ap['ts'] = date("Y-m-d H:i:s");
                if ($this->aplicacao_model->update($ap)) {
                    $this->msg->sucesso("Alterado com sucesso");
                    redirect(site_url('aplicacao'));
                }else{
                    throw new Exception("Erro ao alterar.");
                }
            } else {
                if ($this->aplicacao_model->insert($ap)) {
                    $this->msg->sucesso("Cadastrado com sucesso");
                    redirect(site_url('aplicacao'));
                }else{
                    throw new Exception("Erro ao cadastrar.");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('aplicacao'));
        }
    }

    //delete Origem de Receita
    public function delete() {

        //checa a autenticação
        $this->auth->checkAuth('aplicacao');

        try {
            $id = $this->input->post('id');
            
            if ($id != null && $id != "" && is_numeric($id)) {
                if(!$this->aplicacao_model->exists($id)){
                    throw new Exception("Modalidade de aplicação não localizada");
                }
                
                if($this->aplicacao_model->checkIfUsed($id)){
                    throw new Exception("O item não pôde ser excluído porque já foi utilizado na especificação de objeto");
                }
                if ($this->aplicacao_model->delete($id)) {
                    $this->msg->sucesso("Excluído com sucesso.");
                    redirect(site_url('aplicacao'));
                } else {
                    throw new Exception("Erro ao excluir.");
                }
            }else{
                throw new Exception("Identificador inválido");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('aplicacao'));
        }
    }

}
