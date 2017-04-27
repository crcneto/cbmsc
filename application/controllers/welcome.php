<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function padrao() {
        try {
            //Verificar autenticacao
            //Verificar permissões de acesso
            //
            $toView = array();
            $toView['variavel'] = "Dados";


            $this->load->view('inc/header_view');
            $this->load->view('plano/variavel_view', $toView);
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('pagina'));
        }
    }

    public function index() {
        $this->load->view('welcome_message');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */