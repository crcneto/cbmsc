<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categoriaeconomica extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Carrega model
        $this->load->model('categoriaeconomica_model');
    }

    public function index() {

        //checa a autenticação
        $this->auth->checkAuth('categoriaeconomica');

        try {

            //Array que será enviado à view
            $toView = array();

            //carrega array com a relação de objetos já cadastrados
            $categorias = $this->categoriaeconomica_model->getAllById();
            $toView['categorias'] = $categorias;

            

            
/***
 *** Código antigo
 ***
 * 
 *          //Carrega as categorias cadastradas no banco de dados
            //$rs = $this->categoriaeconomica_model->get();
            //$toView['categorias'] = $rs;
            //Monta a Tabela de exibição (Template)
            $this->setTableTemplate(array(
                'Número', 'Categoria', 'Descrição', 'Criada em', 'Alterar', 'Excluir'
            ));
 
            //Cria array adaptador para exibição
            $tab = array();

            //Preenchimento da tabela
            foreach ($rs as $row) {
                //$teste = ;

                $tab[] = [
                    $row['id'],
                    $row['nome'],
                    '<span title="' . $row['descricao'] . '" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-question-sign"></i></span>',
                    $row['ts'],
                    '<form action="' . site_url('categoriaeconomica/index') . '" id="form' . $row['id'] . '" method="post"><input type="hidden" name="id" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:document.getElementById(\'form' . $row['id'] . '\').submit();"><i class="glyphicon glyphicon-edit"></i></a></form>',
                    '<a href="' . site_url('categoriaeconomica/delete') . '/' . $row['id'] . '"><i class="glyphicon glyphicon-remove"></i></a>'];
            }

            //Monta a tabela
            $this->table->_set_from_array($tab);


            //Gera a tabela
            $a = $this->table->generate();


            //Prepara para passar p/ a view
            $toView['tabela'] = $a;
*/
            if ($this->input->post('id') != null) {
                $id = $this->input->post('id');
                $m = $this->categoriaeconomica_model->get($id);
                $toView['ce'] = $m[0];
            } 



            //inclui views
            $this->load->view('inc/header_view');
            $this->load->view('categoriaeconomica/categoriaeconomica_view', $toView);
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('categoriaeconomica'));
            
        }
    }

    //insert e update da Categoria
    public function insert() {

        try {
            //Inicializa as variáveis com o conteúdo recebido por POST
            $id = $this->input->post('id');
            if($id==null || $id=='' || !is_numeric($id)){
                throw new Exception("Número de identificação inválido");
            }
            $nome = $this->input->post('nome');
            if($nome==null || $nome=='' || strlen($nome)<2){
                throw new Exception("Nome inválido");
            }
            $descricao = $this->input->post('descricao');
            $status = $this->input->post('status');

            // Inicializa array de parâmetros
            $ce = array(
                'id' => $id,
                'nome' => $nome,
                'descricao' => $descricao,
                'status' => $status,
            );

            //se não existe, insere
            if ($this->categoriaeconomica_model->exists($id) < 1) {
                if ($this->categoriaeconomica_model->insert($ce)) {
                    $this->msg->sucesso("Cadastrado com sucesso.");
                    redirect(site_url('categoriaeconomica'));
                } else {
                    throw new Exception('Erro ao cadastrar.');
                }

                //se não, update
            } else {
                if ($this->categoriaeconomica_model->update($ce)) {
                    $this->msg->sucesso("Cadastro alterado com sucesso.");
                    redirect(site_url('categoriaeconomica'));
                } else {
                    throw new Exception("Erro ao alterar o cadastro.");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('categoriaeconomica'));
        }
    }

    //delete categoria economica
    public function delete() {
        
        try {
            $id = $this->input->post('id');
            if ($id == null || $id == "") {
                throw new Exception("Categoria inválida.");
            }
            if($this->categoriaeconomica_model->checkIfUsed($id)){
                throw new Exception("Esta categoria econômica não pode ser excluída porque foi relacionada a uma especificação de despesa.");
            }
            if ($this->categoriaeconomica_model->delete($id)) {
                $this->msg->sucesso("Excluída com sucesso.");
                redirect(site_url('categoriaeconomica'));
            } else {
                throw new Exception("Erro ao excluir.");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('categoriaeconomica'));
        }
    }

}
