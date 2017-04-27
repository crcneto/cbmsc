<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Planejamento extends CI_Controller {

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

    public function index() {
        $this->auth->checkAuth('planejamento');

        try {
            //Helper de manipulação de datas
            $this->load->helper('data_helper');

            //array que será enviado a view
            $toView = array();

            //Carrega origens de receita
            $origens = $this->origemreceita_model->getAllById();
            $toView['origens'] = $origens;

            if ($this->input->post('plano') != NULL && $this->input->post('plano') != '') {
                $r = $this->plano_model->get($this->input->post('plano'));
                $rr = $r[0];
                $rr['datainicio'] = getDataPorExtenso(inverte_data($rr['datainicio']));
                $rr['datafim'] = getDataPorExtenso(inverte_data($rr['datafim']));
                $toView['plano'] = $rr;
            } else if ($this->session->flashdata('plano') != null) {
                $r = $this->plano_model->get($this->session->flashdata('plano'));
                $rr = $r[0];
                $rr['datainicio'] = getDataPorExtenso(inverte_data($rr['datainicio']));
                $rr['datafim'] = getDataPorExtenso(inverte_data($rr['datafim']));
                $toView['plano'] = $rr;
            } else {
                throw new Exception("Plano não identificado.");
            }

            if ($toView['plano']['status'] != 1 && $toView['plano']['status'] != 2) {
                throw new Exception('Este plano não pode ser modificado pois já foi aprovado em alguma instância. Somente se reprovado volta a ser modificável.');
            }
            
            //carrega reprovações
            $reprovacoes = $this->plano_model->getReprovacoesByPlano($this->input->post('plano'));
            $toView['reprovacoes'] = $reprovacoes;

            //carrega especificações
            $especificacoes = $this->especificacao_model->getAllById();
            $toView['especs'] = $especificacoes;

            $obms = $this->obm_model->getAllById();
            $toView['obms'] = $obms;


            $planejamentos = $this->planejamento_model->getAllByPlano($toView['plano']['id']);
            $toView['planejamentos'] = $planejamentos;

            $tipos = array(
                1 => 'Receita',
                2 => 'Aplicação de Recurso'
            );
            $toView['tipos'] = $tipos;

            $usuarios = $this->usuario_model->getAll();
            $toView['usuarios'] = $usuarios;

            $receitas = $this->planejamento_model->getReceitasPorFonte($toView['plano']['id']);
            $toView['receitas'] = $receitas;

            $despesas = $this->planejamento_model->getDespesas($toView['plano']['id']);
            $toView['despesas'] = $despesas;

            $totalreceitas = $this->planejamento_model->getTotalReceitas($toView['plano']['id']);
            $toView['totalreceitas'] = $totalreceitas;

            $totaldespesas = $this->planejamento_model->getTotalDespesas($toView['plano']['id']);
            $toView['totaldespesas'] = $totaldespesas;

            $balanco = $totalreceitas['total'] - $totaldespesas['total'];
            $toView['balanco'] = $balanco;

            $this->load->model('subsetor_model', 'ss');
            $setores = $this->ss->getAllSetorSubsetorById();
            $toView['setores'] = $setores;

            //cabeçalho
            $this->load->view('inc/header_view');
            //conteúdo
            $this->load->view('planejamento/planejamento_view', $toView);
            //rodapé
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('plano'));
        }
    }

    public function delete() {
        $id = $this->input->post('id');
        $plan = $this->input->post('plano');

        try {

            if ($id == null || $id == '') {
                throw new Exception('Identificador inválido.');
            }

            if ($this->planejamento_model->delete($id)) {
                $this->session->set_userdata('sucesso_mensagem', 'Excluído com sucesso.');
                $this->session->set_flashdata(['plano' => $plan]);
                redirect(site_url('planejamento'));
            }
        } catch (Exception $ex) {
            $this->session->set_flashdata(['plano' => $plan]);
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('planejamento'));
        }
    }

    public function visualizar() {
        $toView = array();
        try {
            if ($this->input->post('id') == null || $this->input->post('id') == '') {
                throw new Exception('Selecione o plano.');
            }
            $pl = $this->plano_model->get($this->input->post('id'));
            $plano = $pl[0];

            if (!$plano) {
                throw new Exception('Plano não localizado.');
            }
            //Helper de manipulação de datas
            $this->load->helper('data_helper');
            $plano['datainicio'] = getDataPorExtenso(inverte_data($plano['datainicio']));
            $plano['datafim'] = getDataPorExtenso(inverte_data($plano['datafim']));
            //carrega plano
            $toView['plano'] = $plano;


            //Carrega origens de receita
            $origens = $this->origemreceita_model->getAllById();
            $toView['origens'] = $origens;

            //carrega especificações
            $especificacoes = $this->especificacao_model->getAllById();
            $toView['especs'] = $especificacoes;

            $obms = $this->obm_model->getAllById();
            $toView['obms'] = $obms;


            $planejamentos = $this->planejamento_model->getAllByPlano($plano['id']);
            $toView['planejamentos'] = $planejamentos;

            $tipos = array(
                1 => 'Receita',
                2 => 'Aplicação de Recurso'
            );
            $toView['tipos'] = $tipos;

            $usuarios = $this->usuario_model->getAllById();
            $toView['usuarios'] = $usuarios;


            $receitas = $this->planejamento_model->getReceitasPorFonte($plano['id']);
            $toView['receitas'] = $receitas;

            $despesas = $this->planejamento_model->getDespesas($plano['id']);
            $toView['despesas'] = $despesas;

            $alldespesas = $this->planejamento_model->getDespesasPorEspecificacao($plano['id']);
            $toView['alldespesas'] = $alldespesas;


            $totalreceitas = $this->planejamento_model->getTotalReceitas($plano['id']);
            $toView['totalreceitas'] = $totalreceitas;

            $totaldespesas = $this->planejamento_model->getTotalDespesas($plano['id']);
            $toView['totaldespesas'] = $totaldespesas;

            //echo "<pre>"; print_r($despesas); die();



            $this->load->view('inc/header_view');
            $this->load->view('plano/visualizar_view', $toView);
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('plano/aprovados'));
        }
    }

    public function insert() {
        try {
            $data = array();

            $data['plano'] = $this->input->post('plano');
            $data['tipo'] = $this->input->post('tipo');
            $data['especificacao'] = $this->input->post('especificacao');
            $data['origemreceita'] = $this->input->post('fonte');
            $data['detalhamento'] = $this->input->post('detalhamento');
            $data['dataprevista'] = $this->input->post('dataprevista');
            $data['qtd'] = $this->input->post('qtd');
            $data['valor'] = $this->input->post('valor');
            $data['subsetor'] = $this->input->post('subsetor');
            $usuario = $this->session->userdata('usuario');
            $data['operador'] = $usuario['id'];
            $data['obs'] = $this->input->post('obs');

            if ($data['tipo'] == 1) {
                $data['especificacao'] = 0;
            }

            if ($data['plano'] == null || $data['plano'] == '') {
                throw new Exception("O plano deve ser selecionado.");
            }
            $plan = $this->plano_model->get($data['plano']);
            $plano = $plan[0];
            if (inverte_data_w_exception($data['dataprevista']) > $plano['datafim']) {
                throw new Exception('A data prevista excede a data final no plano.');
            }
            if (inverte_data_w_exception($data['dataprevista']) < $plano['datainicio']) {
                throw new Exception('A data prevista é anterior a data de início do plano.');
            }

            foreach ($data as $key => $value) {
                if ($value == null || $value == '' || count($value) <= 0) {
                    throw new Exception("Campos obrigatórios não preenchidos.");
                } else {
                    $this->load->helper('array_helper');
                    //$value = limpaArray($value);
                    //teste
                    //echo "<pre>";
                    //print_r($value);die();
                    //fim teste
                    if ($this->planejamento_model->insert($data)) {
                        $this->session->set_flashdata(['plano' => $data['plano']]);
                        $this->session->set_userdata("sucesso_mensagem", "Inserido com sucesso.");
                        redirect(site_url('planejamento'));
                    }
                }
            }
        } catch (Exception $ex) {
            $this->session->set_userdata('erro_mensagem', $ex->getMessage());
            redirect(site_url('plano'));
        }
    }

    public function regiao() {
        try {
            $toView = array();
            //carrega as especificações de objeto
            $especificacoes = $this->especificacao_model->getAllById();
            $toView['especificacoes'] = $especificacoes;

            if ($this->input->post('obm') != null) {
                $obm = $this->input->post('obm');
                /*
                  if(!$this->obm_model->exists($obm)){
                  throw new Exception("OBM não identificada.");
                  } */
                $toView['obm_id'] = $obm;

                //data inicial
                $di = inverte_data_w_exception($this->input->post('datainicio'));
                $toView['datainicio'] = inverte_data($di);

                //data final
                $df = inverte_data_w_exception($this->input->post('datafim'));
                $toView['datafim'] = inverte_data($df);

                $subordinadas = $this->obm_model->getStringObmESubordinadas($obm);

                if ($this->input->post('especificacao') != 'todos') {
                    $esp = $this->input->post('especificacao');
                    $toView['esp'] = $esp;
                    $geral = $this->planejamento_model->getPlanejamentoPorRegiaoEspecificacao($subordinadas, $di, $df, $esp);
                    $apl_por_obm = $this->planejamento_model->getBySomaObjetoByObm($subordinadas, $di, $df, $esp);
                    $toView['apl_por_obm'] = $apl_por_obm;
                } else {
                    $geral = $this->planejamento_model->getPlanejamentoPorRegiao($subordinadas, $di, $df);
                }

                $toView['geral'] = $geral;

                $todas = $this->planejamento_model->getPlanejamentoPorRegiao($subordinadas, $di, $df);

                $tr = $this->getTodasAplicacoes($todas);
                $toView['aplicacoes'] = $tr;
                $rec = $this->getTodasReceitas($todas);
                $toView['receitas'] = $rec;

                $grupo_categorias = $this->getGrupoCategorias($tr);
                $toView['grupo_categorias'] = $grupo_categorias;

                $grupo_aplicacoes = $this->getAgrupadas($tr);
                $toView['grupo_aplicacoes'] = $grupo_aplicacoes;
                $grupo_receitas = $this->getAgrupadas($rec);
                $toView['grupo_receitas'] = $grupo_receitas;

                //Para calcular os totais

                $rec_to_sum = $this->getTodasReceitas($todas);
                $totalr = $this->getSoma($rec_to_sum);
                $toView['totalreceitas'] = $totalr;

                $todasr = $this->getTodasAplicacoes($todas);
                $totald = $this->getSoma($todasr);
                $toView['totaldespesas'] = $totald;

                $toView['teste'] = $grupo_categorias;
            }
            // Carrega OBMs
            $obms = $this->obm_model->getAllById();
            $toView['obms'] = $obms;


            $this->load->view('inc/header_view');
            $this->load->view('plano/regiao_view', $toView);
            $this->load->view('inc/footer_view');
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            redirect(site_url('planejamento/regiao'));
        }
    }

    private function getTodasReceitas($listageral) {
        $lista = $listageral;
        if ($lista == null) {
            return $lista;
        }
        foreach ($lista as $k => $v) {
            if ($v['tipo'] != 1) {
                unset($lista[$k]);
            }
        }
        return $lista;
    }

    private function getSoma($lista) {
        if ($lista == null || count($lista) < 1) {
            return 0;
        } else {
            $total = 0;
            foreach ($lista as $k => $v) {
                $total += $v['valor'];
            }
            return $total;
        }
    }

    private function getTodasAplicacoes($listageral) {
        $lista = $listageral;
        if ($lista == null) {
            return $lista;
        }
        foreach ($lista as $k => $v) {
            if ($v['tipo'] != 2) {
                unset($lista[$k]);
            }
        }
        return $lista;
    }

    private function getGrupoCategorias($listaAplicacoes) {
        if (!$listaAplicacoes || count($listaAplicacoes) <= 0) {
            return null;
        }
        $cat = $this->categoriaeconomica_model->getAllById();
        $lista = array();
        foreach ($listaAplicacoes as $k => $v) {
            $id_cat = $v['categoria'];
            $nome = $cat[$id_cat]['nome'];
            if (isset($lista[$nome])) {
                $valor = $lista[$nome];
                $lista[$nome] = $valor + $v['valor'];
            } else {
                $lista[$nome] = $v['valor'];
            }
        }
        return $lista;
    }

    private function getAgrupadas($lista) {
        $grupos = array();

        if (!$lista || count($lista) <= 0) {
            return $grupos;
        }

        foreach ($lista as $k => $v) {
            if ($v['tipo'] == 1) {
                if (key_exists($v['og_nome'], $grupos)) {
                    $grupos[$v['og_nome']] += $v['valor'];
                } else {
                    $grupos[$v['og_nome']] = $v['valor'];
                }
            } else {
                if (key_exists($v['descricao'], $grupos)) {
                    $grupos[$v['descricao']] += $v['valor'];
                } else {
                    $grupos[$v['descricao']] = $v['valor'];
                }
            }
        }
        return $grupos;
    }
    
    public function deferir(){
        try{
             //recebe id planejamento
            if(!$this->input->post('id')){
                throw new Exception('Item do planejamento não identificado.');
            }
            $pljid = $this->input->post('id');
            
            if(!$this->planejamento_model->exists($pljid)){
                throw new Exception("Item do planejamento não encontrado.");
            }
            
            
            //carrega planejamento
            $plj = $this->planejamento_model->get($pljid);
            
            //define id plano
            $plano = $plj['plano'];
            
            $id = $plj['id'];
            
            if($this->planejamento_model->deferir_item($id)){
                $this->msg->sucesso('Item deferido.');
                $this->session->set_flashdata('plano', $plano);
                redirect(site_url('plano/reprovar_plano'));
            }else{
                throw new Exception("Erro ao deferir o item do planejamento.");
            }
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            if(isset($plano)){
                $this->session->set_flashdata('plano', $plano['id']);
                $this->msg->erro($ex->getMessage());
                redirect(site_url('plano/reprovar_plano'));
            }else{
                redirect(site_url('plano'));
            }
        }
    }

    public function indeferir() {
        try {
            
            
            //recebe id planejamento
            if(!$this->input->post('id')){
                throw new Exception('Item do planejamento não identificado.');
            }
            $pljid = $this->input->post('id');
            
            if(!$this->planejamento_model->exists($pljid)){
                throw new Exception("Item do planejamento não encontrado.");
            }
            
            //carrega planejamento
            $plj = $this->planejamento_model->get($pljid);
            
            //carrega o plano
            $plano = $this->plano_model->getById($plj['plano']);
            
            //verifica se o parâmetro <indeferimento> chega por post
            if(!$this->input->post('indeferimento')){
                throw new Exception('É necessário informar o motivo do indeferimento.');
            }
            
            //retira a aprovação (set NULL)
            if($this->plano_model->retirarAprovacao($plj['plano'])){
                //carrega o plano
                $plano = $this->plano_model->getById($plj['plano']);
            }else{
                throw new Exception("Erro ao recarregar o plano.");
            }
            
            
            //indefere o plano
            $plano['status']=1;
            $plano['usuarioreprovacao'] = $this->session->userdata('operador');
            $plano['reprovacao'] = date('Y-m-d h:m:s');
            
            if(!$this->plano_model->update($plano)){
                throw new Exception('Erro ao alterar o plano.');
            }
            
            //indefere o item e persiste o motivo
            $plj['status'] = 1;
            $plj['indeferimento'] = $this->input->post('indeferimento');
            $plj['ind_operador'] = $this->session->userdata('operador');
            $plj['ind_ts'] = date('Y-m-d h:m:s');
            
            
            if(!$this->planejamento_model->update($plj)){
                throw new Exception('Erro ao indeferir o item do planejamento.');
            }
            $this->session->set_flashdata('plano', $plj['plano']);
            redirect(site_url('plano/reprovar_plano'));
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
            if(isset($plano)){
                $this->session->set_flashdata('plano', $plano['id']);
                $this->msg->erro($ex->getMessage());
                redirect(site_url('plano/reprovar_plano'));
            }else{
                $this->msg->erro($ex->getMessage());
                redirect(site_url('plano'));
            }
            
        }
    }

}
