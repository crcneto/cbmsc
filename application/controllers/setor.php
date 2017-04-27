<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Carrega model
        $this->load->model('setor_model');
    }


    public function index() {

        //Autenticação
        $this->auth->checkAuth('setor');

        //Array que será enviado à view
        $toView = array();

        try {

            //Carrega os setores
            $setores = $this->setor_model->getAllById();
            $toView['setores'] = $setores;

            if ($this->input->post('id') != null && $this->input->post('id') != '' && is_numeric($this->input->post('id'))) {
                $id = $this->input->post('id');
                $m = $this->setor_model->get($id);
                $toView['setor'] = $m[0];
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //inclui cabeçalho
            $this->load->view('inc/header_view');
            $this->load->view('setor/setor_view', $toView);
            $this->load->view('inc/footer_view');
        }
    }

    //insert e update Origem da Receita
    public function insert() {

        $this->auth->checkAuth('setor');

        $setor = [];
        try {
            //Inicializa as variáveis com o conteúdo recebido por POST
            $nome = $this->input->post('nome');
            $status = $this->input->post('status');

            if ($this->input->post('id') != null && $this->input->post('id') != '' && is_numeric($this->input->post('id'))) {
                $id = $this->input->post('id');
                $setor['id'] = $id;
            }
            if ($nome == null || $nome == '' || strlen($nome) < 3) {
                throw new Exception("Nome do setor inválido");
            } else {
                if (!isset($setor['id']) && $this->setor_model->exists_nome($nome)) {
                    throw new Exception("Setor já cadastrado");
                } else {
                    $setor['nome'] = $nome;
                }
            }
            if ($status == null || $status == '' || !is_numeric($status)) {
                throw new Exception("Status inválido");
            } else {
                $setor['status'] = $status;
            }
            
            if (isset($setor['id'])) {
                if ($this->setor_model->update($setor)) {
                    $this->msg->sucesso("Alterado com sucesso");
                } else {
                    throw new Exception("Erro ao alterar o cadastro do setor");
                }
            } else {
                if ($this->setor_model->insert($setor)) {
                    $this->msg->sucesso("Cadastrado com sucesso");
                } else {
                    throw new Exception("Erro ao cadastrar");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            redirect(site_url('setor'));
        }
    }

    //delete Origem de Receita
    public function delete() {

        try {

            $id = $this->input->post('id');

            if ($id == null || $id == "" || !is_numeric($id)) {
                throw new Exception("Erro ao identificar o setor");
            } else {
                if (!$this->setor_model->exists($id)) {
                    throw new Exception("Setor não localizado");
                }
                
                if($this->setor_model->used($id)){
                    throw new Exception("Este setor não pode ser excluido pois consta em um cadastro nos subsetores");
                }
                
                if ($this->setor_model->delete($id)) {
                    $this->msg->sucesso("Excluído com sucesso");
                } else {
                    throw new Exception("Erro ao excluir o setor");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            redirect(site_url('setor'));
        }
    }

}
