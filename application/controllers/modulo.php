<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modulo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('modulo_model');
    }

    public function index() {
        //carrega cabeçalho do site
        $this->load->view('inc/header_view');
        
        //Inicializa o array de opções 
        $data = array();

        //carrega os módulos cadastrados no banco
        $db_modulos = $this->modulo_model->get();
        
        
        // Se houver ID, carrega as informações nos campos
        if ($this->input->post('id') != null) {
            $id = $this->input->post('id');
            $m = $this->modulo_model->get($id);
            $data['mod'] = $m[0];
            
        } else {
            $data['mod'] = array('id' => '', 'nome' => '', 'status' => '');
        }
        
        //configura tabela
        $template = array(
            'table_open' => '<table class="table table-hover table-striped">',
            'thead_open' => '<thead>',
            'thead_close' => '</thead>',
            'heading_row_start' => '<tr>',
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
        
        //carrega library Table
        $this->load->library('table');

        //aplica o tempplate
        $this->table->set_template($template);


        //define a table head
        $this->table->set_heading(array(
            'Id','Módulo', 'Status', 'Criado em', 'Alterar', 'Excluir'
        ));
        
        
        //Cria array tab para inserção dos dados
        $tab = array();

        //Preenchimento da tabela
        foreach ($db_modulos as $row) {

            $tab[] = array(
                $row['id'], 
                $row['nome'],
                $row['status'],
                $row['ts'],
                '<form action="' . site_url('modulo/index') . '" id="form' . $row['id'] . '" method="post"><input type="hidden" name="id" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:document.getElementById(\'form' . $row['id'] . '\').submit();"><i class="glyphicon glyphicon-edit"></i></a></form>',
                '<a href="' . site_url('modulo/delete') . '/' . $row['id'] . '"><i class="glyphicon glyphicon-remove"></i></a>');
        }

        //Monta a tabela
        $this->table->_set_from_array($tab);

        //Gera a tabela
        $a = $this->table->generate();
        
        
        $data['tabela'] = $a;
        
        $this->load->view('modulo/modulo_view', $data);

        $this->load->view('inc/footer_view');
    }

    public function insert() {
         $id = $this->input->post('id');
            $nome = $this->input->post('nome');
            $status = 2;


            $mod = array(
                'id' => $id,
                'nome' => $nome,
                'status' => $status
            );

            session_start();
            if ($this->input->post('id') == NULL || $this->input->post('id') == "") {
                unset($mod['id']);
                if ($this->modulo_model->insert($mod)) {
                    $_SESSION['sucesso_mensagem'] = "Cadastrado com sucesso.";
                } else {
                    $_SESSION['erro_mensagem'] = "Erro ao cadastrar.";
                }
            } else {
                if ($this->modulo_model->update($mod)) {
                    $_SESSION['sucesso_mensagem'] = "Cadastro alterado com sucesso.";
                } else {
                    $_SESSION['erro_mensagem'] = "Erro ao alterar o cadastro.";
                }
            }

            redirect(site_url() . 'modulo');
    }

    public function delete($id) {
        if ($id != null || $id != "") {
            if ($this->modulo_model->delete($id)) {
                session_start();
                $_SESSION['sucesso_mensagem'] = "Excluído com sucesso.";
            } else {
                session_start();
                $_SESSION['erro_mensagem'] = "Erro ao excluir.";
            }

            redirect(site_url() .'modulo');
        }
    }
}
