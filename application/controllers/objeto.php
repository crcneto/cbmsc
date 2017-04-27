<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Objeto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Carrega model
        $this->load->model('objeto_model');
    }

    public function index() {
        
        //checa a autenticação
        $this->auth->checkAuth();

        //Array que será enviado à view
        $toView = array();

        try {
            
            // Carrega as aplicacoes cadastradas
            $objetos = $this->objeto_model->getAllById();
            $toView['objetos'] = $objetos;
            
            $id = $this->input->post('id');

            if ($id != null && $id != '') {
                $m = $this->objeto_model->get($id);
                $toView['objeto'] = $m[0];
            }
            
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //inclui views
            $this->load->view('inc/header_view');
            $this->load->view('objeto/objeto_view', $toView);
            $this->load->view('inc/footer_view');
        }
    }

    //insert e update Origem da Receita
    public function insert() {

        //checa a autenticação
        $this->auth->checkAuth('objeto');

        try {
            //Inicializa as variáveis com o conteúdo recebido por POST
            $id = $this->input->post('id');
            $nome = $this->input->post('nome');
            $descricao = $this->input->post('descricao');
            $status = $this->input->post('status');

            $ap = [];

            if (!$id || $id == '' || !is_numeric($id)) {
                throw new Exception("Número de identificação inválido");
            }

            if ($nome == null || $nome == '' || strlen($nome) < 2) {
                throw new Exception("Objeto inválido");
            }

            $ap['id'] = $id;
            $ap['nome'] = $nome;
            if ($descricao != null && $descricao != '') {
                $ap['descricao'] = $descricao;
            }
            if ($status != null && $status != '' && is_numeric($status)) {
                $ap['status'] = $status;
            }

            if (!$this->objeto_model->exists($ap['id'])) {
                if ($this->objeto_model->insert($ap)) {
                    $this->msg->sucesso('Cadastrado com sucesso.');
                    redirect(site_url('objeto'));
                }else{
                    throw new Exception("Erro ao cadastrar");
                }
            } else {
                if ($this->objeto_model->update($ap)) {
                    $this->msg->sucesso('Cadastro alterado com sucesso');
                    redirect(site_url('objeto'));
                }else{
                    throw new Exception("Erro ao alterar o cadastro");
                }
            }

        } catch (Exception $ex) {
            
            $this->msg->erro($ex->getMessage());
            redirect(site_url('objeto'));
        }
    }

    //delete Origem de Receita
    public function delete() {
        try {
            $id = $this->input->post('id');
            if (!$id) {
                throw new Exception('Identificador não informado.');
            } else {
                if($this->objeto_model->checkIfUsed($id)){
                    throw new Exception("O item não pôde ser excluído porque já havia sido utilizado na especificação de objeto");
                }
                if (!$this->objeto_model->delete($id)) {
                    throw new Exception('Erro ao deletar objeto.');
                } else {
                    $this->msg->sucesso('Excluído com sucesso.');
                    redirect(site_url('objeto'));
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('objeto'));
        }
    }

}
