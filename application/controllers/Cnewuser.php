<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cnewuser extends CI_Controller {

	public function __construct(){
		parent::__construct();	
		$this->load->model("Musuario");
	}

	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url()."cprofile/profile");
		}
		else{
			redirect(base_url()."cloreg/register");
		}		
	}

	public function register(){
		$nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
		$pais = $this->input->post("cod_pais");
		$username = $this->input->post("username");
		$email = $this->input->post("email");
		
		$resusername = $this->Musuario->getUsername(
            strtolower($username)
        );
        
		$resemail = $this->Musuario->getEmail(
            strtolower($email)
        );

		if (!$resusername && !$resemail) {
			$this->session->set_flashdata("error","usuario y correo electronico en uso");
			redirect(base_url()."cloreg/register");
		}
		elseif (!$resusername) {
			$this->session->set_flashdata("error","nombre de usuario en uso");
			redirect(base_url()."cloreg/register");
		}
		elseif (!$resemail) {
			$this->session->set_flashdata("error","correo electronico en uso");
			redirect(base_url()."cloreg/register");
		}
		else{
			redirect(base_url()."cloreg/login");
		}
    }
    
}