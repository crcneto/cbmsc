<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('categoriaeconomica_model');
        $this->load->model('naturezadespesa_model');
        $this->load->model('aplicacao_model');
        $this->load->model('objeto_model');
        $this->load->model('especificacao_model');
        $this->load->model('obm_model');
    }

    public function index() {
        $this->load->helper('noticias_helper');
        $toView = array();

        $noticias = getNews();

        $toView['noticias'] = $noticias;

        $this->load->view('inc/header_view');

        $this->load->view('home/home_view', $toView);

        $this->load->view('inc/footer_view');
    }

    public function teste1() {
        $this->load->view('inc/header_view');

        //Array que será enviado à view
        $toView = array();

        // Carrega as categorias
        $categorias = $this->categoriaeconomica_model->getAllById();
        $toView['categorias'] = $categorias;

        // Carrega as naturezas
        $naturezas = $this->naturezadespesa_model->getAllById();
        $toView['naturezas'] = $naturezas;

        // Carrega as modalidades 
        $aplicacoes = $this->aplicacao_model->getAllById();
        $toView['aplicacoes'] = $aplicacoes;

        // Carrega os Objetos 
        $objetos = $this->objeto_model->getAllById();
        $toView['objetos'] = $objetos;

        //
        $especificacoes = $this->especificacao_model->getAllById();
        $toView['especs'] = $especificacoes;

        $toView['param2'] = $this->obm_model->getObmSuperior(7);

        $this->load->view('teste/teste1_view', $toView);
        $this->load->view('inc/footer_view');
    }

    public function teste2() {
        $toView = [];
        $get = $this->input->get();
        $post = $this->input->post();

        $toView['get'] = $get;
        $toView['post'] = $post;

        $toView['teste2'] = money_format('%i', '1234.5');

        $this->load->view('inc/header_view');
        $this->load->view('teste/teste2_view', $toView);
        $this->load->view('inc/footer_view');
    }

    public function teste3() {
        try {
            $destinatarios = ['claudiorcneto@gmail.com', 'claudiorcneto@yahoo.com.br'];
            $assunto = 'Teste de Sistema';
            $mensagem = "Teste de envio de e-mail do sistema.";
            if ($this->correio->sendMail($destinatarios, $assunto, $mensagem)) {
                $this->msg->sucesso('Email enviado com sucesso.');
            } else {
                throw new Exception("Erro ao enviar e-mail.");
            }
            redirect(site_url());
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url());
        }
    }

    public function teste4() {
        try {
            $sql = "select st.nome as setor, ss.nome as subsetor, sum(p.valor) as valor from planejamento as p, subsetor as ss, setor as st where plano=31 and ss.id=p.subsetor and ss.setor=st.id group by st.nome, ss.nome";
            $res = $this->db->query($sql);
            $r = $res->result_array();
            echo '<pre>';
            print_r($r);
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url());
        }
    }

    public function teste5() {
        try {
            echo "<!DOCTYPE html><head><meta charset='utf8' /></head><body>";
            echo "Teste de existência de módulo: <a href='" . site_url('home/teste5?nome=municipio') . "'>Clique aqui e troque os parâmetros da requisicao (nome=xxx)</a>";
            $this->load->model('acesso_model', 'am');
            if (!$this->input->get('nome')) {
                $nome = 'municipio';
            } else {
                $nome = $this->input->get('nome');
            }
            $r = $this->am->getModuloId($nome);
            pd($r);
        } catch (Exception $ex) {
            pd($ex->getMessage());
        } finally {
            echo "</body></html>";
        }
    }

    public function teste6() {
        $toView = array();
        try {
            if ($this->input->post('login') && $this->input->post('senha')) {
                $login = $this->input->post('login');
                $senha = $this->input->post('senha');

                $res = $this->checkldapuser($login, $senha);
                if ($res) {
                    $toView['res'] = true;
                } else {
                    $toView['res'] = false;
                }
            }


            $this->load->view('inc/header_view');
            $this->load->view('teste/teste6_view', $toView);
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            $this->load->view('inc/header_view');
            $this->load->view('teste/teste6_view');
            $this->load->view('inc/footer_view');
        }
    }
    
    public function teste7(){
        try {
            $toView = [];
            
            if($this->input->post('data1') && $this->input->post('data2')){
                $data1 = inverte_data($this->input->post('data1'));
                $data2 = inverte_data($this->input->post('data2'));
                $res = compara_data($data1, $data2);
                if($res==1){
                    $toView['resultado'] = 'Data 1 menor que Data 2';
                }elseif($res==0){
                    $toView['resultado'] = 'Data 1 igual  Data 2';
                }elseif($res==-1){
                    $toView['resultado'] = 'Data 1 maior que Data 2';
                }
            }else{
                throw new Exception("Preencha as datas.");
            }
            $this->load->view('inc/header_view');
            $this->load->view('teste/teste7_view', $toView);
            $this->load->view('inc/footer_view');
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            $this->load->view('inc/header_view');
            $this->load->view('teste/teste7_view');
            $this->load->view('inc/footer_view');
        }
    }

    public function checkldapuser($username, $password, $ldap_server = 'correio.cbm.sc.gov.br') {

        global $erro_ldap;
        $erro_ldap = "";

        if ($connect = @ldap_connect($ldap_server)) { // if connected to ldap server
            ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 3);

            // bind to ldap connection
            if (($bind = @ldap_bind($connect)) == false) {
                $erro_ldap .= "ERRO NA PRIMEIRA NO BIND ANONIMO<br>\n";
                return false;
            }

            // search for user cn=E193,ou=Groups,dc=cb,dc=sc,dc=gov,dc=br
            if (($res_id = ldap_search($connect, "ou=Users,dc=cbm,dc=sc,dc=gov,dc=br", "uid=$username")) == false) {
                //    if (($res_id = ldap_search( $connect,"cn=E193,ou=Groups,dc=cb,dc=sc,dc=gov,dc=br", "uid=$username")) == false) {
                $erro_ldap .= "ERRO: PROCURA DA ÁRVORE NO LDAP<br>";
                return false;
            }

            if (ldap_count_entries($connect, $res_id) != 1) {
                $erro_ldap .= "ERRO: USUARIO $username EXISTE MAIS DE UM USUÁRIO<br>\n";
                return false;
            }

            if (( $entry_id = ldap_first_entry($connect, $res_id)) == false) {
                $erro_ldap .= "ERRO: NÃO FOI POSSIVEL ESTABELECER A ENTRADA PARA O LINK<br>\n";
                return false;
            }

            if (( $user_dn = ldap_get_dn($connect, $entry_id)) == false) {
                $erro_ldap .= "ERRO: NÃO FOI POSSÍVEL ESTABELECER A ÁRVORE DO USUÁRIO<br>\n";
                return false;
            }

            /* Authentifizierung des User */
            if (($link_id = @ldap_bind($connect, $user_dn, $password)) == false) {
                $erro_ldap .= "ERRO: USUÁRIO OU SENHA INVÁLIDOS<br>\n";
                return false;
            }

            @ldap_close($connect);
            return true;
        } else {                                  // no conection to ldap server
            $erro_ldap .= "NÃO FOI POSSÍVEL ESTABELECER A CONEXÃO: '$ldap_server'<br>\n";
        }

        $erro_ldap .= "ERRO FATAL: " . ldap_error($connect) . "<BR>\n";
        //echo $erro_ldap; exit;

        @ldap_close($connect);
        return(false);
    }

}
