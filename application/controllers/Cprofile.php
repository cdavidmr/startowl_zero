<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata("login")) {
            redirect(base_url());
        }        
        // CARGAR MODELOS
        $this->load->model("Musuario");
        $this->load->model("Mpais");


        $this->load->view('layout/head');
        $this->load->view('layout/header');
    }
    
    public function profile(){
        $codigo = $this->session->userdata("cod_usuario");
        
			$data  = array(		
                'usuario' => $this->Musuario->getProfile($codigo),
            );
			$data  = array(		
                'pais' => $this->Mpais->getPais($usuario->cod_pais),
            );
                        
        $this->load->view('vuserprofile',$data);
        $this->load->view('layout/footer');
    }
    
    public function editprofile(){
        $codigo = $this->session->userdata("cod_usuario");
        
			$data  = array(		
                'usuario' => $this->Musuario->getProfile($codigo),
            );
        $this->load->view('vedituserprofile',$data);
        $this->load->view('layout/footer');
    }
        
}