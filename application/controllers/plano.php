<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Plano extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('categoriaeconomica_model');
        $this->load->model('naturezadespesa_model');
        $this->load->model('aplicacao_model');
        $this->load->model('objeto_model');
        $this->load->model('especificacao_model');
        $this->load->model('plano_model');
        $this->load->model('obm_model');
        $this->load->model('origemreceita_model');
        $this->load->model('planejamento_model');
        $this->load->model('acesso_model');
        $this->load->model('usuario_model');
        //Carrega helper data
        $this->load->helper('data_helper');
    }

    private function setTableTemplate($thead) {
        //Carrega a Library Table do Framework 
        $this->load->library('table');

        //define o template da Table
        $template = array(
            'table_open' => '<table class="table table-hover table-striped table-bordered">',
            'thead_open' => '<thead class="text-center">',
            'thead_close' => '</thead>',
            'heading_row_start' => '<tr class="text-center">',
            'heading_row_end' => '</tr>',
            'heading_cell_start' => '<th class="text-center"><span style="white-space: nowrap;">',
            'heading_cell_end' => '</span></th>',
            'tbody_open' => '<tbody>',
            'tbody_close' => '</tbody>',
            'row_start' => '<tr>',
            'row_end' => '</tr>',
            'cell_start' => '<td>',
            'cell_end' => '</td>',
            'row_alt_start' => '<tr>',
            'row_alt_end' => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end' => '</td>',
            'table_close' => '</table>'
        );

        //aplica o tempplate
        $this->table->set_template($template);

        //define o cabeçalho da Table
        $this->table->set_heading($thead);
    }

    public function index() {
        
        try{
        $this->auth->checkAuth('plano');

        //inclui cabeçalho
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

        // Carrega OBMs
        $obms = $this->obm_model->getAllById();
        $toView['obms'] = $obms;

        // Carrega os usuários
        //$usuarios = $this->usuario_model->getAllById();
        //$toView['usuarios'] = $usuarios;
        //id, obm, datainicio, datafim, ts, usuario, status, reprovacao, usuarioreprovacao, aprovacao, responsavel
        //Monta a Tabela de exibição (Template)
        $this->setTableTemplate(array(
            'OBM', 'Data de Início', 'Data Limite', 'Criado em', 'Status', 'OBM Avaliadora', 'Editar', 'Visualizar', 'Aprovar', 'Reprovar', 'Excluir'
        ));

        //Monta status
        $st = array(
            '0' => 'Desativado',
            '1' => 'Reprovado',
            '2' => 'Pendente',
            '3' => 'Aprovado intermediário',
            '4' => 'Aprovado',
        );


        //Cria array adaptador para exibição
        $tab = array();
        
        $operador = $this->session->userdata('operador');
        $nivel = 5;
        $modulo = 'planejamento';
        $os = $this->acesso_model->getStringObmPorAcesso($operador, $modulo, $nivel);
        $rs = $this->plano_model->getAllPendentesObm($os);

        //Preenchimento da tabela
        foreach ($rs as $row) {
            //$teste = ;
            $os = $this->obm_model->getArrayById($row['obmavaliacaopendente']);
            $tab[] = [
                '<div class="text-right text-info">' . $obms[$row['obm']]['nome'] . '</div>',
                '<span style="white-space: nowrap;">' . form_to_db(substr($row['datainicio'], 0, 10)) . '</span>',
                '<span style="white-space: nowrap;">' . form_to_db(substr($row['datafim'], 0, 10)) . '</span>',
                '<span style="white-space: nowrap;">' . form_to_db(substr($row['ts'], 0, 10)) . '</span>',
                $st[$row['status']],
                $os['nome'],
                '<form action="' . site_url('planejamento') . '" id="form0' . $row['id'] . '" method="post" class="text-center"><input type="hidden" name="plano" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:document.getElementById(\'form0' . $row['id'] . '\').submit();"><i class="glyphicon glyphicon-edit" style="color:blue;"></i></a></form>',
                '<form action="' . site_url('planejamento/visualizar') . '" id="formm' . $row['id'] . '" method="post" class="text-center"><input type="hidden" name="id" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:document.getElementById(\'formm' . $row['id'] . '\').submit();"><i class="glyphicon glyphicon-eye-open" style="color:blue;"></i></a></form>',
                '<form action="' . site_url('plano/aprovar') . '" id="form' . $row['id'] . '" method="post" class="text-center"><input type="hidden" name="id" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:confirmacao(\'form' . $row['id'] . '\', \'aprovar\')"><i class="glyphicon glyphicon-thumbs-up" style="color:green;"></i></a></form>',
                '<form action="' . site_url('plano/reprovar_plano') . '" id="formr' . $row['id'] . '" method="post" class="text-center"><input type="hidden" name="id" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:confirmacao(\'formr' . $row['id'] . '\', \'reprovar\')"><i class="glyphicon glyphicon-thumbs-down" style="color:red;"></i></a></form>',
                '<form action="' . site_url('plano/delete') . '" id="formd' . $row['id'] . '" method="post" class="text-center"><input type="hidden" name="id" value="' . $row['id'] . '"/> <a href="#" onclick="javascript:confirmacao(\'formd' . $row['id'] . '\', \'excluir\');"><i class="glyphicon glyphicon-remove" style="color:red;"></i></a></form>'
            ];
        }

        //Monta a tabela
        $this->table->_set_from_array($tab);


        //Gera a tabela
        $a = $this->table->generate();


        //Prepara para passar p/ a view
        $toView['tabela'] = $a;

        if ($this->input->post('id') != null) {
            $id = $this->input->post('id');
            $m = $this->especificacao_model->get($id);
            $toView['es'] = $m[0];
        } else {
            //'OBM', 'Data de Início', 'Data Limite', 'Criado em', 'Status', 'Aprovar', 'Reprovar', 'Excluir'
            $toView['especificacao'] = array(
                'obm' => '',
                'datainicio' => '',
                'datafim' => '',
                'status' => '',
            );
        }

        $this->load->view('plano/plano_view', $toView);
        $this->load->view('inc/footer_view');
        } catch (Exception $ex){
            $this->msg->erro($ex->getMessage());
            redirect(site_url());
        }
    }

    public function insert() {
        try {
            
            $this->load->helper('data_helper');
            $obm = $this->input->post('obm');
            $datainicio = $this->input->post('datainicio');
            $datafim = $this->input->post('datafim');
            $user = $this->session->userdata('usuario');
            $usuario = $user['id'];
            
            
            $in = array(
                'obm' => $obm,
                'datainicio' => inverte_data_w_exception($datainicio),
                'datafim' => inverte_data_w_exception($datafim),
                'usuario' => $usuario,
                'obmavaliacaopendente' => $obm
            );
            
            if ($this->plano_model->insert($in)) {
                $this->session->set_userdata('sucesso_mensagem', 'Cadastrado com sucesso.');
                redirect(site_url('plano'));
            } else {
                throw new Exception("Erro ao cadastrar.");
            }
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('plano'));
        }
    }

    public function delete() {
        try {
            //verifica requisição
            if ($this->input->post('id') == null) {
                throw new Exception("Plano não identificado.");
            }
            //define identificador
            $id = $this->input->post('id');
            
            //verifica se existe planejamento
            if($this->planejamento_model->existePlanejamento($id)){
                throw new Exception('Não é possível excluir o plano pois já existem itens cadastrados.');
            }
            
            if ($this->plano_model->delete($id)) {
                $this->session->set_userdata("sucesso_mensagem", "Plano excluído com sucesso.");
                redirect(site_url('plano'));
            } else {
                throw new Exception('Erro ao excluir o plano.');
            }
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('plano'));
        }
    }

    public function aprovados() {
        //status=4
        //Verificar Acesso
        try {
            $toView = array();
            if ($this->input->post('obm') == NULL) {
                $lista = $this->plano_model->getAprovados();
            } else {
                $lista = $this->plano_model->getAprovadosByObm($this->input->post('obm'));
            }

            $toView['aprovados'] = $lista;

            // Carrega OBMs
            $obms = $this->obm_model->getAllById();
            $toView['obms'] = $obms;

            // Carrega Usuários
            $usuarios = $this->usuario_model->getAllById();
            $toView['usuarios'] = $usuarios;


            $this->load->view('inc/header_view');
            $this->load->view('plano/planosaprovados_view', $toView);
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url());
        }
    }

    public function aprovar() {
        try {
            if ($this->input->post('id') == null) {
                throw new Exception("Plano não identificado.");
            }
            $id = $this->input->post('id');
            if (!$this->plano_model->exists($id)) {
                throw new Exception('Erro ao carregar o plano.');
            }
            //carrega operador
            $operador = $this->session->userdata('operador');
            
            //carregar plano
            $plano = $this->plano_model->getArrayById($id);
            
            //achar OBM avaliação pendente
            $obm = $this->obm_model->getArrayById($plano['obmavaliacaopendente']);
            
            //verifica se operador é administrador na OBM avaliadora
            if(!$this->acesso_model->verificaAdministrador($operador, $obm['id'])){
                throw new Exception('Não autorizado. Usuário deve ser administrador na OBM '.$obm['nome']);
            }
            
            if ($this->plano_model->aprovar($id, $operador, $obm['nivel'], $obm['superior'])) {
                $this->session->set_userdata("sucesso_mensagem", "Plano aprovado.");
                redirect(site_url('plano'));
            } else {
                throw new Exception('Erro ao aprovar o plano.');
            }
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('plano'));
        }
    }

    public function reprovar_plano() {
        $toView = array();
        try {
            //Verificar autenticacao
            $this->auth->checkAuth('plano');
            
            if($this->input->post('id')){
                $id = $this->input->post('id');
            }elseif ($this->session->flashdata('plano')) {
                $id = $this->session->flashdata('plano');
            }else{
                throw new Exception('Plano não identificado.');
            }
            
            if (!$this->plano_model->exists($id)) {
                throw new Exception('Plano não localizado.');
            }
            $plan = $this->plano_model->get($id);
            $plano = $plan[0];
            
            //Verificar permissões de acesso
            $this->load->model('acesso_model', 'ac');
            $nivel = $this->ac->getNivel($this->session->userdata('operador'), 'planejamento', $plano['obm']);
            
            if($nivel<5){
                throw new Exception("Função não autorizada para este usuário nesta OBM.");
            }
            
            //envia identificador à resposta
            $toView['id'] = $id;
            
            $plano['datainicio'] = inverte_data($plan[0]['datainicio']);
            $plano['datafim'] = inverte_data($plan[0]['datafim']);
            $toView['plano'] = $plano;

            $toView['obms'] = $this->obm_model->getAllById();
            
            //Carrega Model dos Planejamentos
            $this->load->model('planejamento_model', 'pnj');
            $planejamentos = $this->pnj->getAllByPlano($id);
            $toView['planejamentos'] = $planejamentos;
            
            //Carrega especificações 
            $this->load->model('especificacao_model', 'em');
            $esps = $this->em->getAllByIdString();
            $toView['especs'] = $esps;
            
            //carrega os itens do planejamento
            $toView['itens'] = $planejamentos;


            $this->load->view('inc/header_view');
            $this->load->view('plano/reprovar_plano_view', $toView);
            $this->load->view('inc/footer_view');
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('plano'));
        }
    }

    public function reprovar() {
        try {
            
            //Verificar autenticacao
            $this->auth->checkAuth('plano');

            if ($this->input->post('plano') == null) {
                throw new Exception("Plano não identificado.");
            }

            //identificador
            $id = $this->input->post('plano');

            $pl = $this->plano_model->get($id);

            $plano = $pl[0];


            if ($this->input->post('motivo') == NULL) {
                throw new Exception('O campo motivo deve ser preenchido.');
            }
            //motivo
            $motivo = $this->input->post('motivo');

            if ($this->session->userdata('operador') == NULL) {
                throw new Exception('Erro ao identificar o usuário');
            }
            //operador
            $operador = $this->session->userdata('operador');

            $data = array(
                'plano' => $plano,
                'operador' => $operador,
                'motivo' => $motivo
            );
            
            /**
             * Modificado. Os itens deverão conter seus próprios históricos
            $plns = $this->input->post('plns');
            $this->planejamento_model->zeraStatus($plano['id']);
            if(count($plns)>0){
                foreach ($plns as $k => $v) {
                    $this->planejamento_model->changeStatus($v, 3);
                }
            }
            */
            if ($this->plano_model->reprovar($data)) {
                $this->session->set_userdata("sucesso_mensagem", "Plano reprovado.");
                redirect(site_url('plano'));
            } else {
                throw new Exception('Erro ao reprovar o plano.');
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('plano'));
        }
    }

    

}
