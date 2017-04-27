<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logs {

    private $CI;


    public function __construct() {
        $this->CI = & get_instance();
    }
    
    public function log($sql){
        $this->CI->load->model('logs_model');
        $data = array();
        $data['operador'] = $this->CI->session->userdata('operador');
        $data['sql'] = $sql;
        
        $this->CI->logs_model->log($data);
    }
    
}
