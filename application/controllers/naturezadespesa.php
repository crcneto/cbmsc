<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Naturezadespesa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Carrega model
        $this->load->model('naturezadespesa_model');
    }

    public function index() {
        //checa a autenticação
        $this->auth->checkAuth('naturezadespesa');

        try {
            //Array que será enviado à view
            $toView = array();

            //carrega array com a relação de objetos já cadastrados
            $naturezas = $this->naturezadespesa_model->getAllById();
            $toView['naturezadespesas'] = $naturezas;

            if ($this->input->post('id') != null) {
                $id = $this->input->post('id');
                $m = $this->naturezadespesa_model->get($id);
                $toView['ce'] = $m[0];
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //inclui views
            $this->load->view('inc/header_view');

            $this->load->view('naturezadespesa/naturezadespesa_view', $toView);

            $this->load->view('inc/footer_view');
        }
    }

    //insert e update Natureza da Despesa
    public function insert() {

        //checa a autenticação
        $this->auth->checkAuth('naturezadespesa');

        try {
            //Inicializa as variáveis com o conteúdo recebido por POST
            $id = $this->input->post('id');
            $nome = $this->input->post('nome');
            $descricao = $this->input->post('descricao');
            $status = $this->input->post('status');
            
            if($id==null || $id=='' || !is_numeric($id)){
                throw new Exception("Número identificador inválido");
            }
            if($nome==null || $nome=='' || strlen($nome)<2){
                throw new Exception("Nome inválido");
            }
            $ce = [];
            $ce['id']=$id;
            $ce['nome']=$nome;
            if($descricao!=null && $descricao!=''){
                $ce['descricao'] = $descricao;
            }
            if($status!=null && $status!='' && is_numeric($status)){
                $ce['status'] = $status;
            }


            if (!$this->naturezadespesa_model->exists($id)) {

                if ($this->naturezadespesa_model->insert($ce)) {
                    $this->msg->sucesso("Cadastrado com sucesso.");
                    redirect(site_url('naturezadespesa'));
                } else {
                    throw new Exception("Erro ao cadastrar.");
                }
            } else {
                if ($this->naturezadespesa_model->update($ce)) {
                    $this->msg->sucesso("Cadastro alterado com sucesso.");
                    redirect(site_url('naturezadespesa'));
                } else {
                    throw new Exception("Erro ao alterar o cadastro.");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('naturezadespesa'));
        }
    }

    //delete Natureza da Despesa
    public function delete() {
        //checa a autenticação
        $this->auth->checkAuth('naturezadespesa');

        try {
            $id = $this->input->post('id');

            if ($id == null || $id == "") {
                throw new Exception("Natureza da despesa não identificada");
            }
            if (!$this->naturezadespesa_model->exists($id)) {
                throw new Exception("Natureza da despesa não encontrada");
            }
            if ($this->naturezadespesa_model->checkIfUsed($id)) {
                throw new Exception("O item não pôde ser excluído porque já foi utilizado em pelo menos uma especificação de objeto");
            }
            if ($this->naturezadespesa_model->delete($id)) {
                $this->msg->sucesso("Excluido com sucesso");
                redirect(site_url('naturezadespesa'));
            } else {
                throw new Exception("Erro ao excluir");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('naturezadespesa'));
        }
    }

}
