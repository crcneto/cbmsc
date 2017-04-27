<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Origemreceita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('origemreceita_model');
        $this->load->model('receitarestrita_model');
    }

    public function index() {
        $this->auth->checkAuth('origemreceita');
        try {
            //Array que será enviado à view
            $toView = array();

            //Carrega as origens de receita cadastradas no banco de dados
            $rs = $this->origemreceita_model->get();
            $toView['fontes'] = $rs;

            if ($this->input->post('id') != null) {
                $id = $this->input->post('id');
                $m = $this->origemreceita_model->get($id);
                $toView['ori'] = $m[0];
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //Carrega views
            $this->load->view('inc/header_view');
            $this->load->view('origemreceita/origemreceita_view', $toView);
            $this->load->view('inc/footer_view');
        }
    }

    //insert e update Origem da Receita
    public function insert() {

        try {
            //Inicializa as variáveis com o conteúdo recebido por POST
            $id = $this->input->post('id');
            $nome = $this->input->post('nome');
            $status = $this->input->post('status');
            
            if($nome==null || $nome=='' || strlen($nome)<2){
                throw new Exception('Nome da fonte pagadora inválido');
            }


            // Inicializa array de parâmetros
            $or = array(
                'id' => $id,
                'nome' => $nome,
                'status' => $status
            );

            if ($this->input->post('id') == NULL || $this->input->post('id') == "") {
                unset($or['id']);
                if ($this->origemreceita_model->insert($or)) {
                    $this->msg->sucesso("Cadastrado com sucesso.");
                    redirect(site_url('origemreceita'));
                } else {
                    throw new Exception("Erro ao cadastrar.");
                }
            } else {
                
                if ($this->origemreceita_model->update($or)) {
                    $this->msg->sucesso("Cadastro alterado com sucesso.");
                    redirect(site_url('origemreceita'));
                } else {
                    throw new Exception("Erro ao alterar o cadastro.");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('origemreceita'));
        }
    }

    //delete Origem de Receita
    public function delete() {
        try {
            if (!$this->input->post('id')) {
                throw new Exception("Fonte pagadora não identificada.");
            }
            $id = $this->input->post('id');
            if ($this->origemreceita_model->exists_origem_planejamento($id)) {
                throw new Exception("Não foi possível excluir a fonte pagadora porque já foi utilizada em, pelo menos, um planejamento");
            }

            if ($this->origemreceita_model->existe_receita_restrita($id)) {
                throw new Exception("Não foi possível excluir a fonte pagadora porque já foi utilizada em, pelo menos, uma receita restrita");
            }
            

            if ($this->origemreceita_model->delete($id)) {
                $this->msg->sucesso("Excluído com sucesso.");
                redirect(site_url('origemreceita'));
            } else {
                throw new Exception("Erro ao excluir.");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('origemreceita'));
        }
    }

    //receitas restritas
    public function receitarestrita() {
        //Verifica autenticação
        $this->auth->checkAuth('origemreceita/receitarestrita');

        //Verifica se possui acesso BM4/BM6
        //
        // IMPLEMENTAR
        //
        
        try {
            // inicializa portadora de parâmetros
            $toView = [];

            //carrega lista de receitas restritas
            $toView['rrs'] = $this->origemreceita_model->getRestritasById();

            //carregar receitas restritas cadastradas
            $toView['restritas'] = $this->receitarestrita_model->get();

            if ($this->input->post('id')) {
                $id = $this->input->post('id');
                $receita = $this->receitarestrita_model->getById($id);
                $toView['receita'] = $receita;
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //Carrega views
            $this->load->view('inc/header_view');
            $this->load->view('origemreceita/receitarestrita_view', $toView);
            $this->load->view('inc/footer_view');
        }
    }

    public function receitarestritainsert() {
        //Verifica autenticação
        $this->auth->checkAuth('origemreceita/receitarestrita');

        //Verifica se possui acesso BM4/BM6
        //
        // IMPLEMENTAR
        //
        
        try {
            if (!$this->input->post('receita')) {
                throw new Exception('Erro ao identificar a receita');
            }
            if (!$this->input->post('datainicial')) {
                throw new Exception('Campo data inicial obrigatório');
            }
            if (!$this->input->post('datafinal')) {
                throw new Exception('Campo data final obrigatório');
            }
            if (!$this->input->post('valor')) {
                throw new Exception('Campo valor obrigatório');
            }

            $rr = [];

            if ($this->input->post('id')) {
                $id = $this->input->post('id');
                $rr = $this->receitarestrita_model->getById($id);
            }


            $rr['receita'] = $this->input->post('receita');
            $rr['data_inicial'] = inverte_data_w_exception($this->input->post('datainicial'));
            $rr['data_final'] = inverte_data_w_exception($this->input->post('datafinal'));
            $rr['valor'] = $this->input->post('valor');
            if ($this->input->post('obs')) {
                $rr['obs'] = $this->input->post('obs');
            }
            $rr['operador'] = $this->session->userdata('operador');

            if ($this->input->post('id')) {
                if ($this->receitarestrita_model->update($rr)) {
                    $this->msg->sucesso('Alteração de cadastro de receita alterada com sucesso.');
                    redirect(site_url('origemreceita/receitarestrita'));
                } else {
                    throw new Exception("Erro ao alterar a receita.");
                }
            } else {
                if ($this->receitarestrita_model->insert($rr)) {
                    $this->msg->sucesso('Cadastro de receita realizado com sucesso.');
                    redirect(site_url('origemreceita/receitarestrita'));
                } else {
                    throw new Exception("Erro ao inserir a receita.");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('origemreceita/receitarestrita'));
        }
    }

    public function receitarestritadelete() {
        //Verifica autenticação
        $this->auth->checkAuth('origemreceita/receitarestrita');

        //Verifica se possui acesso BM4/BM6
        //
        // IMPLEMENTAR
        //
        
        try {
            if (!$this->input->post('id')) {
                throw new Exception('Erro ao identificar a receita');
            }
            $id = $this->input->post('id');

            //carrega classe model
            $this->load->model('receitarestrita_model');

            if (!$this->receitarestrita_model->exists($id)) {
                throw new Exception("Receita não encontrada");
            }

            if ($this->receitarestrita_model->delete($id)) {
                $this->msg->sucesso('Receita excluida com sucesso.');
                redirect(site_url('origemreceita/receitarestrita'));
            } else {
                throw new Exception("Erro ao excluir a receita restrita.");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('origemreceita/receitarestrita'));
        }
    }

}
