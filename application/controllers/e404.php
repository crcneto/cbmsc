<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class E404 extends CI_Controller{
    public function index(){
        
        $this->load->view('inc/header_view');

        $this->load->view('erro/e404_view');

        $this->load->view('inc/footer_view');
    }
}