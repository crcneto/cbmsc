<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Destino extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //Carrega model
        $this->load->model('destino_model');
        $this->load->model('aplicacao_model');
    }
    
    private function setTableTemplate($thead) {
        //Carrega a Library Table do Framework 
        $this->load->library('table');

        //define o template da Table
        $template = array(
            'table_open' => '<table class="table table-hover table-striped table-bordered">',
            'thead_open' => '<thead class="text-center">',
            'thead_close' => '</thead>',
            'heading_row_start' => '<tr class="text-center">',
            'heading_row_end' => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end' => '</th>',
            'tbody_open' => '<tbody>',
            'tbody_close' => '</tbody>',
            'row_start' => '<tr>',
            'row_end' => '</tr>',
            'cell_start' => '<td>',
            'cell_end' => '</td>',
            'row_alt_start' => '<tr>',
            'row_alt_end' => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end' => '</td>',
            'table_close' => '</table>'
        );

        //aplica o tempplate
        $this->table->set_template($template);

        //define o cabeçalho da Table
        $this->table->set_heading($thead);
    }
    public function index(){
        
        //inclui cabeçalho
        $this->load->view('inc/header_view');
        
        //Array que será enviado à view
        $toView = array();

        // Carrega as aplicacoes cadastradas
        $aplicacoes = $this->aplicacao_model->getAllById();
        $toView['aplicacoes'] = $aplicacoes;
        
        // Carrega os destinos cadastrados
        $destinos = $this->destino_model->getAllById();
        $toView['destinos'] = $destinos;

        //Monta a Tabela de exibição (Template)
        $this->setTableTemplate(array(
            'Tipo de Aplicação', 'Destino da aplicação', 'Status', 'Criado em', 'Alterar', 'Excluir'
        ));

        //Carrega os destinos de aplicação cadastrados no banco de dados
        $rs = $this->destino_model->get();

        //Cria array adaptador para exibição
        $tab = array();

        //Preenchimento da tabela
        foreach ($rs as $row) {
            //$teste = ;

            $tab[] = [
                $aplicacoes[$row['aplicacao']]['nome'],
                $row['nome'],
                $row['status'],
                $row['ts'],
                '<form action="' . site_url('destino/index') . '" id="form' . $row['id'] . '" method="post"><input type="hidden" name="id" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:document.getElementById(\'form' . $row['id'] . '\').submit();"><i class="glyphicon glyphicon-edit"></i></a></form>',
                '<a href="' . site_url('destino/delete') . '/' . $row['id'] . '"><i class="glyphicon glyphicon-remove"></i></a>'];
        }

        //Monta a tabela
        $this->table->_set_from_array($tab);


        //Gera a tabela
        $a = $this->table->generate();


        //Prepara para passar p/ a view
        $toView['tabela'] = $a;

        if ($this->input->post('id') != null) {
            $id = $this->input->post('id');
            $m = $this->destino_model->get($id);
            $toView['destino'] = $m[0];
        } else {
            $toView['destino'] = array('id' => '', 'nome' => '', 'aplicacao'=>'', 'status' => '', 'ts' => '');
        }

        $this->load->view('destino/destino_view', $toView);


        //Retirar após testes
        //echo "<br><br><br><pre>";
        //print_r($this->obm_model->get());
        //print_r($teste);
        //echo "</pre>";
        //inclui o rodapé
        $this->load->view('inc/footer_view');
    }
    
    //insert e update Origem da Receita
    public function insert() {

        //Inicializa as variáveis com o conteúdo recebido por POST
        $id = $this->input->post('id');
        $nome = $this->input->post('nome');
        $aplicacao = $this->input->post('aplicacao');
        $status = $this->input->post('status');


        // Inicializa array de parâmetros
        $ap = array(
            'id' => $id,
            'nome' => $nome,
            'aplicacao' => $aplicacao,
            'status' => $status
        );


        session_start();
        if ($this->input->post('id') == NULL || $this->input->post('id') == "") {
            unset($ap['id']);
            if ($this->destino_model->insert($ap)) {
                $_SESSION['sucesso_mensagem'] = "Cadastrado com sucesso.";
            } else {
                $_SESSION['erro_mensagem'] = "Erro ao cadastrar.";
            }
        } else {
            if ($this->destino_model->update($ap)) {
                $_SESSION['sucesso_mensagem'] = "Cadastro alterado com sucesso.";
            } else {
                $_SESSION['erro_mensagem'] = "Erro ao alterar o cadastro.";
            }
        }

        redirect(site_url() . 'destino');
    }

    //delete Origem de Receita
    public function delete($id) {
        if ($id != null || $id != "") {
            if ($this->destino_model->delete($id)) {
                session_start();
                $_SESSION['sucesso_mensagem'] = "Excluído com sucesso.";
            } else {
                session_start();
                $_SESSION['erro_mensagem'] = "Erro ao excluir.";
            }

            redirect(site_url() . 'destino');
        }
    }
}