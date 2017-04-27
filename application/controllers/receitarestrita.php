<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Receitarestrita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('receitarestrita_model', 'rr');
    }

    public function index() {
        $toView = [];
        try {
            //check autenticação
            $this->auth->checkAuth('receitarestrita');
            $this->load->library('session');
            //verifica se usuário possui acesso BM4/BM6
            //
            // IMPLEMENTAR
            //

            if ($this->input->post('di')) {
                $di = inverte_data_w_exception($this->input->post('di'));
                $toView['di'] = $di;
            } elseif ($this->session->flashdata('di')) {
                $di = $this->session->flashdata('di');
                $toView['di'] = $di;
            }
            if ($this->input->post('df')) {
                $df = inverte_data_w_exception($this->input->post('df'));
                $toView['df'] = $df;
            } elseif ($this->session->flashdata('df')) {
                $df = $this->session->flashdata('df');
                $toView['df'] = $df;
            }

            if (isset($di) && isset($df)) {
                $toView['di'] = $di;
                $toView['df'] = $df;
                $receitas = $this->rr->get_restritas_totais($di, $df);
                if ($receitas) {
                    $toView['receitas'] = $receitas;
                    $toView['totalgeral'] = $this->get_total_geral($receitas);
                    $totalaplicado = $this->rr->get_total_aplicacoes_restritas($di, $df);
                    $toView['totalaplicado'] = $totalaplicado;
                    $total_aplicado_por_receita = $this->rr->get_total_por_receita($di, $df);
                    $toView['aplicado_receita'] = $total_aplicado_por_receita;
                    $toView['comparativo'] = $this->monta_comparativo($receitas, $total_aplicado_por_receita);
                    $toView['todasrestritas'] = $this->rr->get_all_restritas_por_data($di, $df);
                }
            }

            //carrega os planejamentos pendentes
            $this->load->model('plano_model');
            $planos = $this->plano_model->getAllPendentes();
            $toView['planos'] = $planos;

            //carrega as OBMs
            $this->load->model('obm_model');
            $obms = $this->obm_model->getAllById();
            $toView['obms'] = $obms;

            if ($this->input->post('plano')) {
                $pid = $this->input->post('plano');
                $pl = $this->plano_model->getById($pid);
                $plano = $pl[0];
                $toView['id'] = $pid;
            }
            if($this->session->flashdata('dp')){
                $toView['dp'] = $this->session->flashdata('dp');
            }


            //carrega a view
            $this->load->view('inc/header_view');
            $this->load->view('planejamento/receitarestrita_view', $toView);
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            $this->load->view('inc/header_view');
            $this->load->view('planejamento/receitarestrita_view');
            $this->load->view('inc/footer_view');
        }
    }

    private function get_total_geral($receitas) {
        $sum = 0;
        if (count($receitas) > 0) {
            foreach ($receitas as $k => $v) {
                $sum += $v['valor'];
            }
        }
        return $sum;
    }

    private function monta_comparativo($receitas, $por_receita) {
        $res = [];
        foreach ($receitas as $k => $v) {
            //print_r($v);
            $res[$k]['nome'] = $v['nome'];
            $res[$k]['total'] = $v['valor'];
            if (count($por_receita) > 0) {
                foreach ($por_receita as $kk => $vv) {
                    if ($v['nome'] == $vv['nome']) {
                        $res[$k]['distribuido'] = $vv['valor'];
                    }
                }
            }
            if (!isset($res[$k]['distribuido'])) {
                $res[$k]['distribuido'] = 0;
            }
        }
        //pd($res);
        return $res;
    }

    public function insert() {
        $this->auth->checkAuth('receitarestrita');
        

        try {
            if ($this->input->post('di') && $this->input->post('df')) {
                $di = $this->input->post('di');
                $df = $this->input->post('df');
            }
            
            $data = array();
            
            //
            //verificação dos campos
            //
            if (!$this->input->post('plano')) {
                throw new Exception("Plano não identificado");
            }
            if (!$this->input->post('receita')) {
                throw new Exception("Receita não identificada");
            }
            if (!$this->input->post('dataprevista')) {
                throw new Exception("Obrigatório o preenchimento da data");
            }
            if (!$this->input->post('qtd')) {
                throw new Exception("Obrigatório o preenchimento da quantidade");
            }
            if (!$this->input->post('valor')) {
                throw new Exception("Obrigatório o preenchimento do valor");
            }
            if (!$this->input->post('di')) {
                throw new Exception("Não foi possível determinar a data inicial");
            }
            if (!$this->input->post('df')) {
                throw new Exception("Não foi possível determinar a data final");
            }

            // Verificação do Plano
            $plano = $this->input->post('plano');
            $this->load->model('plano_model');
            if (!$this->plano_model->exists($plano)) {
                throw new Exception('Plano não encontrado');
            }
            if (!$this->plano_model->alteravel($plano)) {
                throw new Exception('Este plano não pode ser alterado pois já foi aprovado ou removido');
            }
            $pl = $this->plano_model->getById($plano);
            $data['plano'] = $plano;

            //verificação da receita
            $receita = $this->input->post('receita');
            $this->load->model('origemreceita_model');
            if (!$this->origemreceita_model->exists($receita)) {
                throw new Exception('Receita não encontrada');
            }
            $data['origemreceita'] = $receita;

            //Verificação da data
            $dp = inverte_data_w_exception($this->input->post('dataprevista'));
            if (strtotime($dp) < strtotime($pl['datainicio']) || strtotime($dp) > strtotime($pl['datafim'])) {
                throw new Exception('Data prevista fora do limite das datas do plano, por favor verifique');
            }
            $data['dataprevista'] = $dp;
            
            //Verificação da quantidade
            $qtd = $this->input->post('qtd');
            if(is_nan($qtd)){
                throw new Exception('A quantidade deve ser um número válido');
            }
            $data['qtd'] = $qtd;
            
            //Verificação do valor
            $valor = $this->input->post('valor');
            if(is_nan($valor)){
                throw new Exception('O valor deve ser um número válido');
            }
            $data['valor'] = $valor;
            
            $data['tipo'] = 1;
            $data['especificacao'] = 0;
            if($this->input->post('detalhamento')){
                $data['detalhamento'] = $this->input->post('detalhamento');
            }else{
                $data['detalhamento'] = "Reservado";
            }
            $data['operador'] = $this->session->userdata('operador');
            
            if(isset($di) && isset($df)){
                $this->session->set_flashdata('di', $di);
                $this->session->set_flashdata('df', $df);
            }
            
            $this->load->model('planejamento_model');
            if($this->planejamento_model->insert($data)){
                $this->msg->sucesso("Inserido com sucesso");
                redirect(site_url('receitarestrita'));
            }else{
                throw new Exception('Erro ao inserir a receita');
            }
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            if(isset($di) && isset($df)){
                $this->session->set_flashdata('di', $di);
                $this->session->set_flashdata('df', $df);
            }
            if(isset($dp)){
                $this->session->set_flashdata('dp', $dp);
            }
            redirect(site_url('receitarestrita'));
        }
    }

    public function delete_item() {
        $this->auth->checkAuth('receitarestrita');
        $id = $this->input->post('id');
        try {
            if ($id == null || $id == '') {
                throw new Exception('Identificador inválido.');
            }
            $this->load->model('planejamento_model');
            if ($this->planejamento_model->delete($id)) {
                $this->msg->sucesso('Excluído com sucesso.');
                redirect(site_url('receitarestrita'));
            }
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('receitarestrita'));
        }
    }

}

/*
 * <?php if (isset($comparativo)) { ?>
        <?php foreach ($comparativo as $k => $v) { ?>
                ['<?=$v['nome']?>', '<?=$v['total']?>', '<?=$v['distribuido']?>', 
        <?php } ?>
    <?php } ?>
 */