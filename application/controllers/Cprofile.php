<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata("login")) {
            redirect(base_url());
        }        
        $this->load->model("Musuario");
        $this->load->view('layout/head');
        $this->load->view('layout/header');
    }
    
    public function profile(){
        $codigo = $this->session->userdata("cod_usuario");
        
			$data  = array(		
                'usuario' => $this->Musuario->getProfile($codigo),
            );
            
        $this->load->view('vuserprofile',$data);
        $this->load->view('layout/footer');
    }
    
    public function editprofile(){
        $codigo = $this->session->userdata("cod_usuario");
        $res = $this->Musuario->getProfile($codigo);
        
			$data  = array(		
                'nombre' => $res -> nom_usuario,
                'apellido' => $res -> apell_usuario,
                'nacimiento' => $res -> nacimiento_usuario,
                'empresa' => $res -> empresa_usuario,
                'competencia' => $res -> cod_habilidad,
                'correo' => $res -> email_usuario,
                'pais' => $res -> cod_pais,
                'idioma' => $res -> cod_idioma,
                'telefono' => $res -> tel_usuario,
            );
            
        $this->load->view('vedituserprofile',$data);
        $this->load->view('layout/footer');
    }
        
}