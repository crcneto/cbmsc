<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('obm_model');
        $this->load->model('municipio_model');
        $this->load->model('postograd_model');
        $this->load->model('usuario_model');
    }

    public function index() {

        $this->auth->checkAuth('usuario');

        //Array que será enviado à view
        $toView = array();

        try {
            // Carrega os municípios
            $municipios = $this->municipio_model->getAllById();
            $toView['municipios'] = $municipios;

            // Carrega as OBMs 
            $obms = $this->obm_model->getAllById();
            $toView['obms'] = $obms;

            // Carrega as graduações 
            $postograds = $this->postograd_model->getAllById();
            $toView['postograds'] = $postograds;


            //Carrega os Usuários cadastrados no banco de dados
            $toView['usuarios'] = $this->usuario_model->getAllById();



            if ($this->input->post('id') != null && $this->input->post('id') != '') {
                $id = $this->input->post('id');
                $m = $this->usuario_model->get($id);
                $toView['user'] = $m[0];
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //inclui views
            $this->load->view('inc/header_view');
            $this->load->view('usuario/usuario_view', $toView);
            $this->load->view('inc/footer_view');
        }
    }

    //insert e update OBM
    public function insert() {
        //verifica autenticação
        $this->auth->checkAuth('usuario');

        try {

            //Inicializa as variáveis com o conteúdo recebido por POST
            
            $user = [];
            
            $nome = $this->input->post('nome');
            $apelido = $this->input->post('apelido');
            $matricula = $this->input->post('matricula');
            $postograd = $this->input->post('postograd');
            $email = $this->input->post('email');
            
            $obm = $this->input->post('obm');
            $status = $this->input->post('status');
            
            if($this->input->post('id')!=null && $this->input->post('id')!='' && is_numeric($this->input->post('id'))){
                $id = $this->input->post('id');
                if(!$this->usuario_model->exists($id)){
                    throw new Exception("Usuário inválido");
                }
                $user['id'] = $id;
            }
            
            if($this->input->post('senha')!=null && $this->input->post('senha')!=''){
                $senha = $this->input->post('senha');
                if(strlen($senha)<4){
                    throw new Exception('Senha inválida. A senha deve conter pelo menos 4 dígitos');
                }
                $user['senha'] = md5($senha);
            }
            
            if($this->input->post('nome')==null || $this->input->post('nome')=='' || strlen($this->input->post('nome'))<3){
                throw new Exception("Nome inválido");
            }else{
                $nome = $this->input->post('nome');
                $user['nome'] = $nome;
            }
            if($this->input->post('apelido')==null || $this->input->post('apelido')=='' || strlen($this->input->post('apelido'))<3){
                throw new Exception("Nome de guerra inválido");
            }else{
                $apelido = $this->input->post('apelido');
                $user['apelido'] = $apelido;
            }
            
            if($this->input->post('matricula')!=null && $this->input->post('matricula')!='' && strlen($this->input->post('matricula'))==7 && is_numeric($this->input->post('matricula'))){
                if(!isset($user['id']) && $this->usuario_model->exists_matricula($matricula)){
                    throw new Exception("Matrícula já cadastrada");
                }
                $user['matricula'] = $matricula;
            }else{
                if($this->input->post('matricula')!=null && $this->input->post('matricula')!=''){
                    if(strlen($this->input->post('matricula'))!=7 || !is_numeric($this->input->post('matricula'))){
                        throw new Exception("Matrícula inválida");
                    }
                }
            }
            
            if($this->input->post('postograd')==null || $this->input->post('postograd')=='' || !is_numeric($this->input->post('postograd'))){
                throw new Exception("Posto/Graduação inválida");
            }
            if(!$this->postograd_model->exists($this->input->post('postograd'))){
                throw new Exception("Posto/Graduação não localizado");
            }else{
                $postograd = $this->input->post('postograd');
                $user['postograd'] = $postograd;
            }
            
            if($this->input->post('email')==null || $this->input->post('email')==''){
                throw new Exception("E-mail/Login inválido");
            }else{
                
                if(!isset($user['id']) && $this->usuario_model->exists_email($email)){
                    throw new Exception("E-mail/Login já existente");
                }
                $user['email'] = $email;
            }
            
            if($this->input->post('obm')==null || $this->input->post('obm')=='' || !is_numeric($this->input->post('obm'))){
                throw new Exception("OBM inválida");
            }else{
                if(!$this->obm_model->exists($this->input->post('obm'))){
                    throw new Exception("OBM não localizada");
                }
                $obm = $this->input->post('obm');
                $user['obm'] = $obm;
            }
            
            if($this->input->post('status')=='' || $this->input->post('status')==null || !is_numeric($this->input->post('obm'))){
                throw new Exception("Status inválido");
            }else{
                $status = $this->input->post('status');
                $user['status'] = $status;
            }

            if(isset($user['id'])){
                if($this->usuario_model->update($user)){
                    $this->msg->sucesso("Cadastro realizado com sucesso");
                }else{
                    throw new Exception("Erro ao cadastrar usuário");
                }
            }else{
                if($this->usuario_model->insert($user)){
                    $this->msg->sucesso("Cadastrado com sucesso");
                }else{
                    throw new Exception("Erro ao alterar usuário");
                }
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            redirect(site_url('usuario'));
        }
    }

    //delete usuario
    public function delete() {
        //checa a autenticação
        $this->auth->checkAuth('usuario');

        $id = $this->input->post('id');

        try {
            if ($id == null || $id == '') {
                throw new Exception('Identificador de usuário inválido.');
            }
            if ($this->usuario_model->delete($id)) {
                $this->session->set_userdata('sucesso_mensagem', 'Usuário excluído.');
            } else {
                throw new Exception('Erro ao excluir usuário');
            }
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('usuario'));
        }
    }
    //delete OBM
    public function desativar() {
        //checa a autenticação
        $this->auth->checkAuth('usuario');

        $id = $this->input->post('id');
        $user = [
            'id'=>$id,
            'status'=>0
        ];

        try {
            if ($id == null || $id == '') {
                throw new Exception('Identificador de usuário inválido.');
            }
            if(!$this->usuario_model->exists($id)){
                throw new Exception("Usuário não encontrado");
            }
            if ($this->usuario_model->update($user)) {
                $this->msg->sucesso('Usuário desativado.');
            } else {
                throw new Exception('Erro ao desativar usuário');
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            redirect(site_url('usuario'));
        }
    }
    //delete OBM
    public function ativar() {
        //checa a autenticação
        $this->auth->checkAuth('usuario');

        $id = $this->input->post('id');
        $user = [
            'id'=>$id,
            'status'=>2
        ];

        try {
            if ($id == null || $id == '') {
                throw new Exception('Identificador de usuário inválido.');
            }
            if(!$this->usuario_model->exists($id)){
                throw new Exception("Usuário não encontrado");
            }
            if ($this->usuario_model->update($user)) {
                $this->msg->sucesso('Usuário ativado.');
            } else {
                throw new Exception('Erro ao ativar usuário');
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            redirect(site_url('usuario'));
        }
    }

    //formulário alterar senha
    public function changepass() {
        //checa a autenticação
        $this->auth->checkAuth('changepass');

        //inclui cabeçalho
        $this->load->view('inc/header_view');

        //inclui formulário
        $this->load->view('usuario/alterarsenha_view');

        //inclui cabeçalho
        $this->load->view('inc/footer_view');
    }

    //alterar senha
    public function alterarsenha() {
        //checa a autenticação
        $this->auth->checkAuth('usuario');

        $senha1 = $this->input->post('senha1');
        $senha2 = $this->input->post('senha2');
        $senha3 = $this->input->post('senha3');


        try {
            if ($senha1 == null || $senha2 == null || $senha3 == null) {
                throw new Exception('Campos obrigatórios não preenchidos');
            }
            if ($senha2 != $senha3) {
                throw new Exception('Confirmação de senha inválida');
            }
            if (strlen($senha2) < 6) {
                throw new Exception('Sua nova senha deve conter pelo menos 6 caracteres.');
            }

            $usuario = $this->session->userdata('usuario');
            if (!$this->usuario_model->login($usuario['email'], $senha1)) {
                throw new Exception('Senha incorreta');
            }


            $data = array(
                'id' => $usuario['id'],
                'senha' => md5($senha2)
            );

            if (!$this->usuario_model->update($data)) {
                throw new Exception('Erro ao alterar a senha.');
            }


            $this->session->set_userdata('sucesso_mensagem', 'Senha alterada com sucesso. Utilize a nova senha no próximo login.');
            redirect(site_url());
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('usuario/changepass'));
        }
    }

}
