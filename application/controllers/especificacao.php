<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Especificacao extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //carregando os módulos necessários
        $this->load->model('categoriaeconomica_model');
        $this->load->model('naturezadespesa_model');
        $this->load->model('aplicacao_model');
        $this->load->model('objeto_model');
        $this->load->model('especificacao_model');
    }

    public function index() {

        //checa a autenticação
        $this->auth->checkAuth('especificacao');

        //Array que será enviado à view
        $toView = array();

        try {

            // Carrega as categorias
            $categorias = $this->categoriaeconomica_model->getAllById();
            $toView['categorias'] = $categorias;

            // Carrega as categorias selecionáveis
            $cats = $this->categoriaeconomica_model->get();
            $toView['cats'] = $cats;

            // Carrega as naturezas
            $naturezas = $this->naturezadespesa_model->getAllById();
            $toView['naturezas'] = $naturezas;

            // Carrega as naturezas selecionáveis
            $nats = $this->naturezadespesa_model->get();
            $toView['nats'] = $nats;

            // Carrega as modalidades 
            $aplicacoes = $this->aplicacao_model->getAllById();
            $toView['aplicacoes'] = $aplicacoes;

            // Carrega as modalidades selecionáveis
            $apls = $this->aplicacao_model->get();
            $toView['apls'] = $apls;

            // Carrega os Objetos 
            $objetos = $this->objeto_model->getAllById();
            $toView['objetos'] = $objetos;

            // Carrega os Objetos Selecionáveis
            $objs = $this->objeto_model->get();
            $toView['objs'] = $objs;

            //carrega especificações cadastradas
            $toView['especificacoes'] = $this->especificacao_model->getAllById();

            if ($this->input->post('id')) {
                $id = $this->input->post('id');
               
                $m = $this->especificacao_model->get($id);
                $toView['es'] = $m[0];
            }
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        } finally {
            //inclui cabeçalho
            $this->load->view('inc/header_view');

            $this->load->view('especificacao/especificacao_view', $toView);

            $this->load->view('inc/footer_view');
        }
    }

    //fim index()
    //insert e update OBM
    public function insert() {
        
        //checa a autenticação
        $this->auth->checkAuth('especificacao');
        
        try {
            //Inicializa as variáveis com o conteúdo recebido por POST
            
            $categoria = $this->input->post('categoria');
            $natureza = $this->input->post('natureza');
            $aplicacao = $this->input->post('aplicacao');
            $objeto = $this->input->post('objeto');
            $nro = $this->input->post('nro');
            $nome = $this->input->post('nome');
            $status = $this->input->post('status');

            // Inicializa array de parâmetros
            $ap = array(
                'categoria' => $categoria,
                'natureza' => $natureza,
                'aplicacao' => $aplicacao,
                'objeto' => $objeto,
                'nro' => $nro,
                'nome' => $nome,
                'status' => $status
            );

            if ($this->input->post('id')) {
                $id = $this->input->post('id');
                if($id=='' || $id==null || !is_numeric($id)){
                    throw new Exception("Identificador inválido");
                }
                $ap['id'] = $id;
            }
            
            if(!$nome || $nome=='' || strlen($nome)<2){
                throw new Exception("Especificação inválida");
            }

            if ($this->input->post('nro') == NULL || $this->input->post('nro') == "" || !is_numeric($this->input->post('nro'))) {
                throw new Exception("Número inválido");
            }
            if (isset($ap['id'])) {
                if ($this->especificacao_model->update($ap)) {
                    $this->msg->sucesso('Alterado com sucesso.');
                    redirect(site_url('especificacao'));
                } else {
                    throw new Exception("Erro ao alterar o objeto.");
                }
            } else {
                if ($this->especificacao_model->insert($ap)) {
                    $this->msg->sucesso("Cadastrado com sucesso.");
                } else {
                    throw new Exception("Erro ao cadastrar o objeto.");
                }
            }
            redirect(site_url('especificacao'));
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('especificacao'));
        }
    }

    //delete OBM
    public function delete() {
        
        //checa a autenticação
        $this->auth->checkAuth('especificacao');
        
        try {
            $id = $this->input->post('id');
            if ($id != null || $id != "") {
                if($this->especificacao_model->checkIfUsed($id)){
                    throw new Exception("Este item não pôde ser excluído porque já foi incluido em algum planejamento");
                }
                if ($this->especificacao_model->delete($id)) {
                    $this->msg->sucesso("Excluído com sucesso.");
                    redirect(site_url('especificacao'));
                } else {
                    throw new Exception("Erro ao excluir.");
                }
            }else{
                throw new Exception("Especificação não localizada");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('especificacao'));
        }
    }

}
