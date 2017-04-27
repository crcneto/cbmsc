<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Correio {

    private $CI;
    private $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'vistoriasneto',
        'smtp_pass' => 'meupau01',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1'
    );
    private $from = array('CBMSC', 'Sistema CBMSC');

    public function __construct() {
        $this->CI = & get_instance();
    }
    
    public function sendMail($destinatarios, $assunto, $mensagem){
        $this->CI->load->library('email', $this->config);
        $this->CI->email->set_newline("\r\n");
        $this->CI->email->from($this->from);
        $this->CI->email->to($destinatarios);
        $this->CI->email->reply_to($this->from);
        $this->CI->email->subject($assunto);
        $this->CI->email->message($mensagem);
        return $this->CI->email->send();
    }

}

/*
 * $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'vistoriasneto',
                    'smtp_pass' => 'meupau01',
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1'
                );
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");

                $this->email->from('vistoriasneto@gmail.com', 'EllaOdonto');
                $list = array($usuario['email']);
                $this->email->to($list);
                $this->email->reply_to('vistoriasneto@gmail.com', 'EllaOdonto');
                $this->email->subject('Seja Bem-vindo ao EllaOdonto!');
                $this->email->message('Olá, ' . $usuario['nome'] . '\n Seja bem-vindo ao EllaOdonto. \n Sua nova senha é ' . $senha);
                $this->email->send();
 */