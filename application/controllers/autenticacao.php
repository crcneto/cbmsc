<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autenticacao extends CI_Controller {

    public function index() {
        if($this->session->userdata('usuario')){
            redirect(site_url());
        }
        $this->load->view('inc/header_view');
        $this->load->view('login/formlogin_view');
        $this->load->view('inc/footer_view');
    }

    public function login() {
        if($this->session->userdata('usuario')){
            redirect(site_url());
        }
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        try{
            if($login==null || $login == '' || $senha==null || $senha==''){
                throw new Exception('Campos obrigatórios não preenchidos.');
            }
            $this->load->model('usuario_model');
            $this->load->model('acesso_model');
            
            //verificação de combinação LOGIN/SENHA <- Retorna Usuário
            $r = $this->usuario_model->login($login, $senha);
            
            //Autenticação e carregamentos iniciais
            if ($r) {
                $user = $r;
                
                //campo obsoleto - apenas verificação
                $this->session->set_userdata('autenticado', 'sim');
                
                try{
                $r = true;//$this->auth->checkldapuser($login, $senha, $ldap_server = 'correio.cbm.sc.gov.br');
                if($r){
                    $aut = "Autenticado LDAP";
                }else{
                    $aut = "Não autenticado LDAP";
                }
                
                } catch (Exception $e){
                    $aut = $e->getMessage();
                }
                
                //carrega mensagem de boas-vindas
                $this->session->set_userdata('sucesso_mensagem', "Bem-vindo, " . $user['nome'] . "!<br>$aut");
                
                //carrega usuário na sessão
                $this->session->set_userdata('usuario', $user);
                
                //carrega operador (ID do usuário) na sessão
                $this->session->set_userdata('operador', $user['id']);
                
                //carrega os módulos autorizados na seção
                $autorizados = $this->acesso_model->modulosAutorizados($user['id']);
                $this->session->set_userdata('autorizados', $autorizados);
                
                //se houve acesso à página que exige autenticação, redireciona novamente para esta, se não, Home
                if($this->session->userdata('pagina')){
                    $pagina = $this->session->userdata('pagina');
                    $this->session->unset_userdata('pagina');
                    redirect(site_url($pagina));
                }else{
                    redirect(site_url());
                }
            }else{
                throw new Exception("Combinação de e-mail e senha incorreta.");
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('autenticacao'));
        }
        
    }

    public function logout() {
        //destrói a sessão e redireciona para a página inicial
        $this->session->sess_destroy();
        redirect(site_url());
    }

}
