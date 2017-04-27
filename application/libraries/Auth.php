<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth {

    private $CI;


    public function __construct() {
        $this->CI = & get_instance();
    }

    public function checkAuth($pagina=null) {
        
        if (!$this->CI->session->userdata('usuario')) {
            if($pagina!=null){
                $this->CI->session->set_userdata('pagina', $pagina);
            }
            $this->CI->session->set_userdata('erro_mensagem', 'É necessário ter sido autenticado pelo sistema para ter acesso a esta página.');
            redirect(site_url('autenticacao'));
        }
    }
    
    public function checkldapuser($username, $password, $ldap_server = 'correio.cbm.sc.gov.br') {

        global $erro_ldap;
        $erro_ldap = "";

        if ($connect = @ldap_connect($ldap_server)) { // if connected to ldap server
            ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 3);

            // bind to ldap connection
            if (($bind = @ldap_bind($connect)) == false) {
                throw new Exception("ERRO LDAP NA PRIMEIRA NO BIND ANONIMO");
            }
            
            // search for user cn=E193,ou=Groups,dc=cb,dc=sc,dc=gov,dc=br
            if (($res_id = ldap_search($connect, "ou=Users,dc=cbm,dc=sc,dc=gov,dc=br", "uid=$username")) == false) {
                
                throw new Exception("ERRO LDAP: PROCURA DA ÁRVORE NO LDAP");
            }
            
            if (ldap_count_entries($connect, $res_id) != 1) {
                throw new Exception("ERRO LDAP: $username EXISTE MAIS DE UM USUÁRIO");
            }

            if (( $entry_id = ldap_first_entry($connect, $res_id)) == false) {
                throw new Exception("ERRO LDAP: NÃO FOI POSSIVEL ESTABELECER A ENTRADA PARA O LINK");
            }

            if (( $user_dn = ldap_get_dn($connect, $entry_id)) == false) {
                throw new Exception("ERRO LDAP: NÃO FOI POSSÍVEL ESTABELECER A ÁRVORE DO USUÁRIO");
            }
            
            // Authentifizierung des User 
            if (($link_id = @ldap_bind($connect, $user_dn, $password)) == false) {
                throw new Exception("ERRO LDAP: USUÁRIO OU SENHA INVÁLIDOS");
            }
            @ldap_close($connect);
            return true;
            
        } else {
            @ldap_close($connect);
            throw new Exception("NÃO FOI POSSÍVEL ESTABELECER A CONEXÃO: '$ldap_server'");
        }

        
        return(false);
    }

}
