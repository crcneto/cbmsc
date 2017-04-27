<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Access {

    private $CI;

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function has($nomeDoModulo) {
        try {
            $this->CI->auth->checkAuth();
            $this->CI->load->model('acesso_model', 'am');
            $usuario = $this->CI->session->userdata('operador');
            if (!$this->CI->am->possuiAcesso($usuario, $nomeDoModulo)) {
                throw new Exception('Desculpe, você não possui acesso a este módulo');
            }
        } catch (Exception $ex) {
            $this->CI->msg->erro($ex->getMessage());
            redirect(site_url());
        }
    }
    
    public function autorizado($nomeDoModulo){
        if($this->CI->session->userdata('autorizados')==null){
            return false;
        }else{
            $modulos = $this->CI->session->userdata('autorizados');
            if(array_key_exists($nomeDoModulo, $modulos)){
                return true;
            }else{
                return false;
            }
        }
        
    }

}
