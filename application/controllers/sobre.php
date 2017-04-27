<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sobre extends CI_Controller{
    public function index(){
        $this->load->view('inc/header_view');
        $this->load->view('sobre/sobre_view');
        $this->load->view('inc/footer_view');
    }
    
    public function referencias(){
        $this->load->view('inc/header_view');
        $this->load->view('sobre/referencias_view');
        $this->load->view('inc/footer_view');
    }
    
    public function licenca(){
        $this->load->view('inc/header_view');
        $this->load->view('sobre/licenca_view');
        $this->load->view('inc/footer_view');
    }
    public function agradecimentos(){
        $this->load->view('inc/header_view');
        $this->load->view('sobre/agradecimentos_view');
        $this->load->view('inc/footer_view');
    }
}