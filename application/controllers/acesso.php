<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Acesso extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->model('modulo_model');
        $this->load->model('obm_model');
        $this->load->model('postograd_model');
        $this->load->model('acesso_model');
    }

    public function index() {

        //checa a autenticação
        $this->auth->checkAuth('acesso');
        
        $this->access->has('controledeacesso');

        
        $id = $this->input->post('usuario');
        $obm_in = $this->input->post('obm');

        $toView = array();
        
        try {
            //verifica requisição
            if ($id == null || $id == '') {
                $usuario = null;
            } else {
                //carrega Usuário
                $res_array = $this->usuario_model->get($id);
                $usuario = $res_array[0];
            }

            //verifica requisição
            if ($obm_in == null || $obm_in == '') {
                $obm = null;
            } else {
                //carrega a OBM
                $obma = $this->obm_model->get($obm_in);
                $obm = $obma[0];
            }

            //envia OBM carregada p/ a resposta
            $toView['obm'] = $obm;

            //envia Usuário carregado p/ a resposta
            $toView['usuario'] = $usuario;

            //carrega a lista de OBMs e envia para a resposta
            $toView['obms'] = $this->obm_model->getAllById();
            
            //carrega as OBMs as quais o usuário possui permissão para 'controledeacesso'
            $toView['obmsautorizadas'] = $this->acesso_model->getObmsControleAcesso($this->session->userdata('operador'), 'controledeacesso', 5);
            
            //carrega e envia p/ a resposta a lista de postos/graduações
            $toView['postograds'] = $this->postograd_model->getAllById();

            //carrega e envia para a resposta a lista de usuários
            $toView['usuarios'] = $this->usuario_model->getAllById();
            
            //define array de acessos
            $acessos = [];
            
            //se foi carregado usuário e obm, carrega os acessos
            if($usuario!=null && $obm!=null){
                $acessos = $this->acesso_model->getAcessos($usuario['id'], $obm['id']);
                
            }
            
            //define o operador com o valor gravado na sessão
            $operador = $this->session->userdata('operador');
            
            //carrega e envia os móulos de acesso na resposta
            $toView['modulos'] = $this->acesso_model->getAllModulosAutorizados($operador, 5);
            
            //envia a lista de acessos à resposta
            $toView['acessos'] = $acessos;
            
            //carrega o cabeçalho, o container e o rodapé
            $this->load->view('inc/header_view');
            $this->load->view('acesso/acessousuario_view', $toView);
            $this->load->view('inc/footer_view');
            
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url());
        }
    }

    public function controle() {
        
        //checa a autenticação
        $this->auth->checkAuth('acesso');

        try {
            //Define usuário e OBM via post
            $usuario = $this->input->post('usuario');
            $obm = $this->input->post('obm');

            //Remove usuário e OBM do array $_POST
            unset($_POST['usuario']);
            unset($_POST['obm']);

            //carrega o resto de $_POST (módulos e níveis)
            $req = $this->input->post();

            if ($usuario == null || $obm == null || $usuario == '' || $obm == '') {
                throw new Exception('Erro ao carregar usuário e OBM.');
            }

            
            $modulo = null;
            $nivel = null;
            $toInsert = array();
            
            $operador = $this->session->userdata('usuario');
            
            //Remove os acessos anteriores para este usuário nesta OBM
            $r = $this->acesso_model->deleteAll($usuario, $obm);
            
            foreach ($req as $k => $v) {

                $modulo = $k;
                $nivel = $v;

                $toInsert = [
                    'usuario' => $usuario,
                    'obm' => $obm,
                    'modulo' => $modulo,
                    'nivel' => $nivel,
                    'operador' => $operador['id'],
                ];
                
                $this->acesso_model->insert($toInsert);
            }
            $this->msg->sucesso('Controle de acesso atualizado.');
            redirect(site_url('acesso'));
            
        } catch (Exception $ex) {
            
            $this->msg->erro($ex->getMessage());
            redirect(site_url('acesso'));
        }
    }

}
