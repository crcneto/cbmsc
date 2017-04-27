<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Postograd extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //Carrega model
        $this->load->model('postograd_model');
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
        $postograds = $this->postograd_model->getAllById();
        $toView['postograds'] = $postograds;

        //Monta a Tabela de exibição (Template)
        $this->setTableTemplate(array(
            'Posto/Graduação', 'Abreviação', 'Alterar', 'Excluir'
        ));

        //Carrega as graduações cadastradas no banco de dados
        $rs = $this->postograd_model->get();

        //Cria array adaptador para exibição
        $tab = array();

        //Preenchimento da tabela
        foreach ($rs as $row) {
            //$teste = ;

            $tab[] = [
                $row['nome'],
                $row['abrev'],
                '<form action="' . site_url('postograd/index') . '" id="form' . $row['id'] . '" method="post"><input type="hidden" name="id" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:document.getElementById(\'form' . $row['id'] . '\').submit();"><i class="glyphicon glyphicon-edit"></i></a></form>',
                '<a href="' . site_url('postograd/delete') . '/' . $row['id'] . '"><i class="glyphicon glyphicon-remove"></i></a>'];
        }

        //Monta a tabela
        $this->table->_set_from_array($tab);


        //Gera a tabela
        $a = $this->table->generate();


        //Prepara para passar p/ a view
        $toView['tabela'] = $a;

        if ($this->input->post('id') != null) {
            $id = $this->input->post('id');
            $m = $this->postograd_model->get($id);
            $toView['postograd'] = $m[0];
        } else {
            $toView['postograd'] = array('id' => '', 'nome' => '', 'abrev'=>'', 'status' => '');
        }

        $this->load->view('postograd/postograd_view', $toView);

        $this->load->view('inc/footer_view');
    }
    
    //insert e update Origem da Receita
    public function insert() {

        //Inicializa as variáveis com o conteúdo recebido por POST
        $id = $this->input->post('id');
        $nome = $this->input->post('nome');
        $abrev= $this->input->post('abrev');
        $status = $this->input->post('status');


        // Inicializa array de parâmetros
        $ap = array(
            'id' => $id,
            'nome' => $nome,
            'abrev' => $abrev,
            'status' => $status
        );


        session_start();
        if ($this->input->post('id') == NULL || $this->input->post('id') == "") {
            unset($ap['id']);
            if ($this->postograd_model->insert($ap)) {
                $_SESSION['sucesso_mensagem'] = "Cadastrado com sucesso.";
            } else {
                $_SESSION['erro_mensagem'] = "Erro ao cadastrar.";
            }
        } else {
            if ($this->postograd_model->update($ap)) {
                $_SESSION['sucesso_mensagem'] = "Cadastro alterado com sucesso.";
            } else {
                $_SESSION['erro_mensagem'] = "Erro ao alterar o cadastro.";
            }
        }

        redirect(site_url('postograd'));
    }

    //delete Origem de Receita
    public function delete($id) {
        if ($id != null || $id != "") {
            if ($this->postograd_model->delete($id)) {
                session_start();
                $_SESSION['sucesso_mensagem'] = "Excluído com sucesso.";
            } else {
                session_start();
                $_SESSION['erro_mensagem'] = "Erro ao excluir.";
            }

            redirect(site_url('postograd'));
        }
    }
}