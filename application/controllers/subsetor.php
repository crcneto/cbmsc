<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subsetor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('subsetor_model');
        $this->load->model('setor_model');
    }

    public function index() {
        //Autenticação
        $this->auth->checkAuth('subsetor');

        //Array que será enviado à view
        $toView = array();

        try {
            // Carrega os setores
            $setores = $this->setor_model->getAllById();
            $toView['setores'] = $setores;

            // Carrega os setores selecionáveis
            $sets = $this->setor_model->get();
            $toView['sets'] = $sets;

            // Carrega todos os subsetores
            $subsetores = $this->subsetor_model->getAllById();
            $toView['subsetores'] = $subsetores;

            // Editar
            if ($this->input->post('id') != null) {
                $id = $this->input->post('id');
                $m = $this->subsetor_model->get($id);
                $toView['subsetor'] = $m[0];
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //inclui cabeçalho
            $this->load->view('inc/header_view');
            $this->load->view('subsetor/subsetor_view', $toView);
            $this->load->view('inc/footer_view');
        }
    }

    public function insert() {

        //Autenticação
        $this->auth->checkAuth('subsetor');

        try {

            $subsetor = [];

            if ($this->input->post('id') != NULL && $this->input->post('id') != "" && is_numeric($this->input->post('id'))) {
                $id = $this->input->post('id');
                $subsetor['id'] = $id;
            }

            //Inicializa as variáveis com o conteúdo recebido por POST
            $nome = $this->input->post('nome');
            $setor = $this->input->post('setor');
            $status = $this->input->post('status');

            if (!$nome || $nome == '' || strlen($nome) < 2) {
                throw new Exception("Nome de derivação (subsetor) inválido");
            }
            if (!$setor || $setor = '' || !is_numeric($setor)) {
                throw new Exception("Setor inválido");
            } else {
                if (!$this->setor_model->exists($setor)) {
                    throw new Exception("Setor não encontrado");
                }
            }
            if (!$status || $status == '' || !is_numeric($status)) {
                throw new Exception("Status inválido");
            }

            $subsetor['nome'] = $nome;
            $subsetor['setor'] = $setor;
            $subsetor['status'] = $status;

            if (isset($subsetor['id'])) {
                if ($this->subsetor_model->update($subsetor)) {
                    $this->msg->sucesso("Cadastro alterado com sucesso");
                } else {
                    throw new Exception("Erro ao alterar o cadastro");
                }
            } else {
                if ($this->subsetor_model->insert($subsetor)) {
                    $this->msg->sucesso("Cadastrado com sucesso");
                } else {
                    throw new Exception("Erro ao cadastrar");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            redirect(site_url('subsetor'));
        }
    }

    //delete OBM
    public function delete() {
        
        //Autenticação
        $this->auth->checkAuth('subsetor');

        try {
            
            $id = $this->input->post("id");
            
            //verifica identificador
            if ($id == null || $id == "" || !is_numeric($id)) {
                throw new Exception("Identificador inválido");
            }
            //verifica se existe
            if(!$this->subsetor_model->exists($id)){
                throw new Exception("Identificador não encontrado");
            }
            //verifica se possui relação com outras tabelas
            
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            redirect(site_url('subsetor'));
        }
    }

}
